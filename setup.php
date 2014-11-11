<?php

if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] != 'mipt' || $_SERVER['PHP_AUTH_PW'] != 'dev') {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'bad password';
    exit;
}

date_default_timezone_set("Europe/Moscow");

/**
 * Door framework initialization
 */

//require composer autoload
require_once(__DIR__."/vendor/autoload.php");

//Creating application
$app = new App\Application;

\Door\Core\Bootstrap::init($app);

$app->register_library('pages', "/App/Pages");

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



//Application execution
$path_info = \Door\Core\Helper\Arr::get($_SERVER,'PATH_INFO', "");

if(strpos($path_info, "admin") === 0)
{
	require __DIR__."/setup_admin.php";
}
else
{
	$app->router->add("page","<path>","/App/Controller/Page", array(
		'path' => '.*'
	));
}

echo $app->request(\Door\Core\Helper\Arr::get($_SERVER,'PATH_INFO', ""))
		->execute()
		->response()
		->send_headers()
		->body();


