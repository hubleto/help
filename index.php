<?php

require('vendor/autoload.php');
require('env.php');
require('book/content/scripts/pageData.php');

$route = $_GET['route'] ?? '';
$config = [
  'bookRootUrl' => $env['bookRootUrl'],
  'guideRootUrl' => $env['guideRootUrl'],
  'bookRootFolder' => __DIR__ . '/book',
  'homePage' => 'home',
  'notFoundPage' => 'not-found',
  'defaultPageConfig' => [
    'pageTemplate' => 'preline-admin/main',
    'elementTemplates' => [
      'header' => 'preline-admin/header',
      'sidebar' => 'preline-admin/sidebar',
      'footer' => 'preline-admin/footer',
      'onThisPage' => 'preline-admin/on-this-page',
    ],
  ],
];

try {
  $renderer = new \WaiBlue\GuideVis\Loader($route, $config);
  $renderer->init();
  echo $renderer->render(getPageData($renderer));
} catch (\Exception $e) {
  echo $e->getMessage();
}