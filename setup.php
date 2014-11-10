<?php

date_default_timezone_set("Europe/Moscow");

/**
 * Door framework initialization
 */

//require composer autoload
require_once(__DIR__."/vendor/autoload.php");

//Creating application
$app = new \Door\Core\Application();

\Door\Core\Bootstrap::init($app);

$app->docroot(__DIR__."/public");
$app->modpath(__DIR__."/modules");
$app->vendorpath(__DIR__."/vendor");
$app->apppath(__DIR__."/application");
$app->url->hostname("chekotin");
$app->initialize();

$app->database->set_connection(array(
	'server' => 'mongodb://localhost:27017',
	'database' => 'miptcloud',
	'options' => array(),
	'username' => null,
	'password' => null	
));

$app->router->add("index","","/App/Controller/Page");

//Application execution
echo $app->request(\Door\Core\Helper\Arr::get($_SERVER,'PATH_INFO', ""))
		->execute()
		->response()
		->send_headers()
		->body();


