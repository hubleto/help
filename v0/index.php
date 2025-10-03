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

  public function __construct(string $page, array $env, array $templateConfig) {
    parent::__construct($page, $env, $templateConfig);
    $language = substr($page, 0, 2);
    if (is_file($this->env['bookRootFolder'] . '/config-' . $language . '.yaml')) {
      $this->bookConfigFile = $this->env['bookRootFolder'] . '/config-' . $language . '.yaml';
    } else {
      $this->bookConfigFile = $this->env['bookRootFolder'] . '/config.yaml';
    }
  }

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
  }

  public function loadBookConfig(): array
  {
    $bookConfig = parent::loadBookConfig();

    // list($packages, $apps) = $this->loadPackagesAndAppsInfo();
    // $communityApps = [];
    // foreach ($apps as $app) {
    //   if (isset($app['urlHelp']['en'])) {
    //     $tmpItem = [ "page" => 'en/apps/' . $app['urlHelp']['en'] ];
    //     $communityApps[] = $tmpItem;
    //   }
    // }
    // $bookConfig["tableOfContents"][1]["children"][0]["children"] = $communityApps;

    return $bookConfig;
  }

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

  public function getPageContent(string $page): string
  {
    $content = parent::getPageContent($page);
    $content = preg_replace('/\!\[(.*)?\]\(images/', '![$1](/hubleto/public/help/v0/book/content/assets/images', $content);
    return $content;
  }

  public function getPageVars(array $pageData = []): array
  {
    $pageVars = parent::getPageVars($pageData);
    $pageVars['bookIndex'] = $this->buildBookIndex();

    list($packages, $apps) = $this->loadPackagesAndAppsInfo();
    $pageVars["packages"] = $packages;
    $pageVars["apps"] = $apps;

    $pageVars['guide'] = $this;
    return $pageVars;
  }

  public function loadPackagesAndAppsInfo(): array
  {
    $packagesAndApps = \Symfony\Component\Yaml\Yaml::parse(file_get_contents(__DIR__ . '/book/packages-and-apps.yaml')) ?? [];
    $packages = $packagesAndApps['packages'];
    $apps = $packagesAndApps['apps'];
    return [$packages, $apps];
  }

  public function getAppInfo(string $app): array
  {
    list($packages, $apps) = $this->loadPackagesAndAppsInfo();
    return $apps[$app] ?? [];
  }

  public function getOnThisPage(string $mdContent): array
  {
    $onThisPage = parent::getOnThisPage($mdContent);
    foreach ($onThisPage as $key => $value) {
      if (empty($key)) unset($onThisPage[$key]);
    }
    return $onThisPage;
  }
}

try {
  $renderer = new MyGuideVis($page, $env, $templateConfig);
  $renderer->init();
  echo $renderer->render();
} catch (\Exception $e) {
  echo $e->getMessage();
}