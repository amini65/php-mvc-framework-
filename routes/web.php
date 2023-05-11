<?php
$route= \app\core\Application::$app->router;



$route->get('/',[\app\controllers\HomeController::class,'home']);
$route->get('/user/index',[\app\controllers\UserController::class,'index']);
$route->get('/user/create',[\app\controllers\UserController::class,'create']);
$route->post('/user/store',[\app\controllers\UserController::class,'store']);