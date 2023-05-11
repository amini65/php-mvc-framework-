<?php

namespace app\core;

class Controller
{

    public function view($layout)
    {

    }
    public function render($view,$params=[])
    {
        return Application::$app->router->renderView($view,$params);
    }


}