<?php

require('env.php');
require('vendor/autoload.php');

spl_autoload_register(function($className) {
  if (str_starts_with($className, 'DocsRenderer')) {
    $className = str_replace('\\', '/', $className);
    $className = str_replace('DocsRenderer', '', $className);
    $className = trim($className, '/');

    require_once(DOCS_RENDERER_FOLDER . '/src/' . $className . '.php');
    
  }
});

$route = $_GET['route'] ?? '';
$options = [
  'bookRootFolder' => __DIR__ . '/book',
  'bookRootUrl' => '/ceremonycrm/help/book',
];

$pageData = ['randVar' => rand(1000, 9999)];

try {
  $renderer = new \DocsRenderer\Loader($route, $options, $pageData);
  $renderer->init();
  echo $renderer->render();
} catch (\Exception $e) {
  echo $e->getMessage();
}