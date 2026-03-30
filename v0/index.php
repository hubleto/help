<?php

require('vendor/autoload.php');
require('env.php');

$page = $_GET['page'] ?? '';

if ($page == '') header("Location: en");

$templateConfig = [
  'notFoundPage' => [
    'pageTemplate' => 'not-found',
    'elementTemplates' => [
      'htmlHead' => 'html-head',
      'header' => 'header',
      'sidebar' => 'sidebar',
      'footer' => 'footer',
    ],
  ],
  'defaultPageConfig' => [
    'pageTemplate' => 'main',
    'elementTemplates' => [
      'htmlHead' => 'html-head',
      'header' => 'header',
      'sidebar' => 'sidebar',
      'footer' => 'footer',
      'onThisPage' => 'on-this-page',
    ],
  ],
];

class MyGuideVis extends \WaiBlue\GuideVis\Loader {
  public array $pageContentsCache = [];
  public string $searchPage = 'search';

  public function __construct(string $page, array $env, array $templateConfig) {
    parent::__construct($page, $env, $templateConfig);
    $language = preg_match('/^[a-z]{2}\//', $page) ? substr($page, 0, 2) : 'en';
    if (is_file($this->env['bookRootFolder'] . '/config-' . $language . '.yaml')) {
      $this->bookConfigFile = $this->env['bookRootFolder'] . '/config-' . $language . '.yaml';
    } else {
      $this->bookConfigFile = $this->env['bookRootFolder'] . '/config.yaml';
    }
  }

  /**
   * [Description for init]
   *
   * @return [type]
   * 
   */
  public function init()
  {
    parent::init();

    $this->twig->addFunction(new \Twig\TwigFunction('btn', function($class, $icon, $text) {
      return
        "<button class='btn btn-{$class}'>"
          . "<span class='icon'><i class='{$icon}'></i></span>"
          . (empty($text) ? "" : "<span class='text'>{$text}</span>")
        . "</button>"
      ;
    }));

    $this->twig->addFunction(new \Twig\TwigFunction(
      'getTableOfContentsFromFolder',
      function($folder, $maxLevel) {
        return $this->getTableOfContentsFromFolder($folder, $maxLevel);
      }
    ));
    
    $this->twig->addFunction(new \Twig\TwigFunction('renderTopBar', function(array $items) {
      $topbar = '<div class="mt-4 card card-body gap-2 grid grid-cols-4">';
      foreach ($items as $key => $value) {
        $topbar .= '<a href="#' . $key . '" class="btn btn-transparent btn-small border border-primary text-primary">
          <span class="text text-center w-full block">' . $key . '</span>
        </a>';
      }
      $topbar .= "</div>";
      return $topbar;
    }));

    if ($this->page === $this->searchPage && isset($_GET['q'])) {
      $this->pageContentMd = '';
    }
  }

  /**
   * [Description for getTableOfContentsFromFolder]
   *
   * @param string $folder
   * @param int $maxLevel
   * @param int $level
   * 
   * @return array
   * 
   */
  public function getTableOfContentsFromFolder(string $folder, int $maxLevel = 2, $level = 0): array
  {
    $toc = [];

    $f = $this->env['bookRootFolder'] . '/content/pages/' . $folder;
    if (is_dir($f)) {
      $pages = scandir($f);
      foreach ($pages as $page) {
        if ($page == '.' || $page == '..') continue;
        if (substr($page, -3) == '.md') {
          $page = substr($page, 0, -3);

          $title = '';
          $children = [];
          
          $mdContent = $this->getPageContent($folder . '/' . str_replace('.md', '', $page));

          preg_match('/^# (.*?)\\n/', $mdContent, $m1);
          preg_match('/\n# (.*?)\\n/', $mdContent, $m2);
          $title = $m1[1] ?? ($m2[1] ?? '');

          preg_match('/\{\# tocOrder = (.+) \#\}/', $mdContent, $m);
          $order = $m[1] ?? '';

          if ($level < $maxLevel - 1 && is_dir($f . '/' . $page)) {
            $children =
              $this->getTableOfContentsFromFolder(
                $folder . '/' . $page,
                $maxLevel,
                $level + 1
              );
            ;
          }

          if (empty($title)) $title = $page;
          if (empty($order)) $order = $page;

          $toc[$order] = [
            'page' => $folder . '/' . $page,
            'order' => $order,
            'title' => $title,
            'children' => $children,
          ];

        }
      }
    }

    ksort($toc);
    
    return $toc;
  }

  public function loadPageConfig(): array
  {
    $config = parent::loadPageConfig();

    $toc = [];
    $prevPage = [];
    $setNextPage = false;
    $this->walkTableOfContents(function($page) use (&$toc, &$prevPage, &$setNextPage) {
      if ($page['page'] == $this->page) {
        $toc = $page;
        $toc['prevPageData'] = $prevPage;
        $setNextPage = true;
      } else if ($setNextPage) {
        $toc['nextPageData'] = $page;
        $setNextPage = false;
      } else {
        $prevPage = $page;
      }
    });

    if (!empty($toc)) $config['tocData'] = $toc;

    return $config;
  }

  public function pageExists(string $page): bool
  {
    if (parent::pageExists($page)) return true;
    $found = false;
    $this->walkTableOfContents(function($item) use ($page, &$found) {
      if ($item['page'] === $page) $found = true;
    });
    return $found;
  }

  /**
   * [Description for getPageContent]
   *
   * @param string $page
   * 
   * @return string
   * 
   */
  public function getPageContent(string $page): string
  {
    $pageContentFile = $this->env['bookRootFolder'] . '/content/pages/' . $page . '.md';
    if (!is_file($pageContentFile)) {
      if ($page === $this->searchPage) return '';
      $slug = basename($page);
      $title = ucwords(str_replace('-', ' ', $slug));
      return "# {$title}\n\n{% include 'components/work-in-progress.twig' %}\n";
    }
    $content = parent::getPageContent($page);
    $content = preg_replace('/\!\[(.*)?\]\(images/', '![$1](/hubleto/public/help/v0/book/content/assets/images', $content);

    $content = preg_replace_callback('/\[#btn (.*?) #\]/', function ($m) {
      $args = @json_decode($m[1], true);
      $class = $args['class'] ?? '';
      $title = $args['title'] ?? '';
      $icon = $args['icon'] ?? '';
      $icon = empty($args['icon']) ? '' : '<span class="icon"><i class="' . $args['icon'] . '"></i></span>';
      return '<button class="btn ' . $class . '">' . $icon . '<span class="text">' . $title . '</span></button>';
    }, $content);

    return $content;
  }

  /**
   * [Description for getPageVars]
   *
   * @param array $pageData
   * 
   * @return array
   * 
   */
  public function getPageVars(array $pageData = []): array
  {
    $pageVars = parent::getPageVars($pageData);
    $pageVars['bookIndex'] = $this->buildBookIndex();

    list($packages, $apps) = $this->loadPackagesAndAppsInfo();
    $pageVars["packages"] = $packages;
    $pageVars["apps"] = $apps;

    $pagesFolder = $this->env['bookRootFolder'] . '/content/pages/';
    $pageExistsMap = [];
    $this->walkTableOfContents(function($item) use (&$pageExistsMap, $pagesFolder) {
      $pageExistsMap[$item['page']] = is_file($pagesFolder . $item['page'] . '.md');
    });
    $pageVars['pageExistsMap'] = $pageExistsMap;

    $pageVars['guide'] = $this;
    return $pageVars;
  }

  /**
   * [Description for loadPackagesAndAppsInfo]
   *
   * @return array
   * 
   */
  public function loadPackagesAndAppsInfo(): array
  {
    $packagesAndApps = \Symfony\Component\Yaml\Yaml::parse(file_get_contents(__DIR__ . '/book/packages-and-apps.yaml')) ?? [];
    $packages = $packagesAndApps['packages'];
    $apps = $packagesAndApps['apps'];
    return [$packages, $apps];
  }

  /**
   * [Description for getAppInfo]
   *
   * @param string $app
   * 
   * @return array
   * 
   */
  public function getAppInfo(string $app): array
  {
    list($packages, $apps) = $this->loadPackagesAndAppsInfo();
    return $apps[$app] ?? [];
  }

  /**
   * [Description for getOnThisPage]
   *
   * @param string $mdContent
   * 
   * @return array
   * 
   */
  public function getOnThisPage(string $mdContent): array
  {
    $onThisPage = parent::getOnThisPage($mdContent);
    foreach ($onThisPage as $key => $value) {
      if (empty($key)) unset($onThisPage[$key]);
    }
    return $onThisPage;
  }
}



///////////////////////////

try {
  $renderer = new MyGuideVis($page, $env, $templateConfig);
  $renderer->searchPage = 'search';
  $renderer->init();
  echo $renderer->render();
} catch (\Exception $e) {
  echo $e->getMessage();
}