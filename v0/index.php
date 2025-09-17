<?php

require('vendor/autoload.php');
require('env.php');

$page = $_GET['page'] ?? '';
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

  public function init()
  {
    parent::init();

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

    list($packages, $apps) = $this->loadPackagesAndAppsInfo();
    $communityApps = [];
    foreach ($apps as $app) {
      if (isset($app['urlHelp']['en'])) {
        $tmpItem = [ "page" => 'en/apps/' . $app['urlHelp']['en'] ];
        $communityApps[] = $tmpItem;
      }
    }
    $bookConfig["tableOfContents"][1]["children"][0]["children"] = $communityApps;

    return $bookConfig;
  }

  // public function loadUrl($url, $post = []) {

  //   $this->loadUrlError = '';

  //   if (is_callable('curl_init')) {
  //     $ch = curl_init();

  //     curl_setopt($ch, CURLOPT_URL, $url);
  //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  //     curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
  //     curl_setopt($ch, CURLOPT_TIMEOUT, 5);
  //     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  //     curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
  //     curl_setopt($ch, CURLOPT_BUFFERSIZE, 1024 * 1024 * 1024 * 10);
  //     curl_setopt($ch, CURLOPT_SSLVERSION, CURL_SSLVERSION_MAX_TLSv1_3);
  //     curl_setopt($ch, CURLOPT_TIMEOUT, 1000);

  //     $html = curl_exec($ch);
  //     $this->loadUrlError = curl_error($ch);

  //     curl_close($ch);
  //   } else {
  //     $this->loadUrlError = 'CURL is not available';
  //   }

  //   return $this->loadUrlError == '' ? $html : false;
  // }

  // public function getPageContent(string $page): string
  // {
  //   if (!empty($pageContentsCache[$page])) {
  //     return $pageContentsCache[$page];
  //   } else {
  //     if ($page == $this->page && ($this->env['pageContentSource'] ?? '') == 'github-raw') {
  //       $url = "https://raw.githubusercontent.com/hubleto/help/refs/heads/main/"
  //         . "v0/book/content/pages/"
  //         . $page . ".md";
  //       $pageContent = $this->loadUrl($url);
  //       if ($pageContent === false) $pageContent = $this->loadUrlError;
  //       // $pageContent = $url . ":" . $pageContent;
  //     } else {
  //       $pageContent = parent::getPageContent($page);
  //     }

  //     $this->pageContentsCache[$page] = $pageContent;

  //     return $pageContent;
  //   }
  // }

  public function getPageContent(string $page): string
  {
    $content = parent::getPageContent($page);
    // $content = str_replace('<img src="images', '<img src="/hubleto/public/help/v0/book/content/assets/images', $content);
    // $content = str_replace('<img', '<a', $content);
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
    // foreach ($apps as $key => $app) {
    //   if (!is_array($app['languages']) || !in_array($this->config['language'], $app['languages'])) {
    //     unset($apps[$key]);
    //   }
    // }
    
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