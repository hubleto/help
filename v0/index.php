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

  public function getPageVars(array $pageData = []): array
  {
    $pageVars = parent::getPageVars($pageData);
    $pageVars['bookIndex'] = $this->buildBookIndex();
    $pageVars['apps'] = $this->getApps();
    $pageVars['guide'] = $this;
    return $pageVars;
  }

  public function getApps(): array
  {
    return \Symfony\Component\Yaml\Yaml::parse(file_get_contents(__DIR__ . '/book/apps.yaml'));
  }

  public function getAppInfo(string $app): array
  {
    $apps = $this->getApps();
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