<?php

require('vendor/autoload.php');

$route = $_GET['route'] ?? '';
$env = [
  'bookRootFolder' => __DIR__ . '/book',
  'bookRootUrl' => '/ceremonycrm/help/book',
  'guideRootUrl' => '/ceremonycrm/help',
  'defaultPageConfig' => [
    'elementTemplates' => [
      'header' => 'header',
      'sidebar' => 'sidebar',
      'footer' => 'footer',
    ],
  ],
];

$pageData = [
  'randVar' => rand(1000, 9999),
  'today' => date('Y-m-d'),
];

try {
  $renderer = new \WaiBlue\GuideVis\Loader($route, $env, $pageData);
  $renderer->init();
  echo $renderer->render();
} catch (\Exception $e) {
  echo $e->getMessage();
}