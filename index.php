<?php

require('vendor/autoload.php');
require('book/content/scripts/pageData.php');

$route = $_GET['route'] ?? '';
$env = [
  'bookRootFolder' => __DIR__ . '/book',
  'bookRootUrl' => '/ceremonycrm/help/book',
  'guideRootUrl' => '/ceremonycrm/help',
  'defaultHomePage' => 'home',
  'defaultPageConfig' => [
    'pageTemplate' => 'preline-admin/main',
    'elementTemplates' => [
      'header' => 'preline-admin/header',
      'breadcrumbs' => 'preline-admin/breadcrumbs',
      'sidebar' => 'preline-admin/sidebar',
      'footer' => 'preline-admin/footer',
    ],
  ],
];

try {
  $renderer = new \WaiBlue\GuideVis\Loader($route, $env);
  $renderer->init();
  echo $renderer->render(getPageData($renderer));
} catch (\Exception $e) {
  echo $e->getMessage();
}