<?php

namespace app\core;

abstract class Controller
{
    public $route;
    public $view;
    public $model;
    public function __construct($route)
    {
        $this->route = $route;
        $this->view = new View($route);
        $this->model = $this->loadModel($route['controller']);
    }

    public function loadModel($name)
    {
        $class = 'app\models\\' . ucfirst($name);
        if (class_exists($class)) {
            return new $class;
        }
    }

    public function loadView()
    {
        require '/app/views/Cart/view.php';
        die;
    }
}
