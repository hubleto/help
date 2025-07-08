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