<?php
use app\controllers\SiteController;
use app\core\Application;

require_once __DIR__.'/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

//var_dump('mysql:host='.$_ENV['DB_HOST'].';port='.$_ENV['DB_PORT'].';dbname='.$_ENV['DB_NAME']);
//echo '<br>';
//var_dump($_ENV['DB_DSN']);
//die;
$confid=[
    'db'=>[
        'dsn' => 'mysql:host='.$_ENV['DB_HOST'].';port='.$_ENV['DB_PORT'].';dbname='.$_ENV['DB_NAME'],
        'user'=>$_ENV['DB_USER'],
        'password'=>$_ENV['DB_PASSWORD'],
        ]
    ];

$app=new Application(__DIR__,$confid);

// routing
include_once __DIR__.'/routes/web.php';
//$app->router->get('/',[SiteController::class,'home']);
//$app->router->get('/tt','fdfdfdf');
//$app->router->get('/test',[SiteController::class,'handleContact']);

$app->run();
