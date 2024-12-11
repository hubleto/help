<?php

require('vendor/autoload.php');
require('env.php');

$page = $_GET['page'] ?? '';
$language = substr($page, 0, 2);

if (!in_array($language, ['en', 'sk', 'cz', 'fr', 'it', 'es', 'pl', 'de'])) exit;

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

  public function __construct(string $language, string $page, array $env, array $templateConfig)
  {
    parent::__construct($page, $env, $templateConfig);
    $this->bookConfigFile = $this->env['bookRootFolder'] . '/config-' . $language . '.yaml';
  }

}

try {
  $renderer = new MyGuideVis($language, $page, $env, $templateConfig);
  $renderer->init();
  echo $renderer->render();
} catch (\Exception $e) {
  echo $e->getMessage();
}