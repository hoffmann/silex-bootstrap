<?php
require_once __DIR__.'/../vendor/autoload.php';

use Silex\Application;

use Symfony\Component\HttpKernel\Debug\ErrorHandler;
use Symfony\Component\HttpKernel\Debug\ExceptionHandler;


$app = new Silex\Application();
$app["debug"] = True;

if ($app["debug"]){
    ini_set('display_errors', 1);
    error_reporting(-1);
    ErrorHandler::register();
    if ('cli' !== php_sapi_name()) {
        ExceptionHandler::register();
    }
} else {
    ini_set('display_errors', 0);
}


$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../templates',
));

$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array (
            'driver'    => 'pdo_mysql',
            'host'      => 'localhost',
            'dbname'    => 'test',
            'user'      => 'test',
            'password'  => 'test',
    )
));


$app->get('/', App\View\TestView::asView("Hello World"));

$app->run();

