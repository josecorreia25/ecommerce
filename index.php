<?php 
//O vendor/autoload.php é do composer, para trazer as dempendencias
require_once("vendor/autoload.php");
// os Use são namespace 
	use \Slim\Slim;
	use \Hcode\Page;

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	 $page = new Page();

	 $page->setTpl("index");
});

$app->run();

 ?>