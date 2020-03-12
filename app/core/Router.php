<?php

namespace app\core;

session_start();
// session_destroy();
class Router
{
    protected $routes = [];
    protected $params = [];
    public function __construct()
    {
        $routes_arr = require 'app/config/routes.php';
        foreach ($routes_arr as $route => $params) {
            $this->add($route, $params);
        }
    }
    public function add($route, $params)
    {
        $route = '#^' . $route . '$#';
        $this->routes[$route] = $params;
    }
    public function match()
    {
        $url = trim($_SERVER['QUERY_STRING'], '/');
        $url = self::removeQueryString($url);
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                $this->params = $params;
                return true;
            }
        }
        return false;
    }
    public function run()
    {

        // [
        //     '/' => '';
        //     'category/products' => 'Главная/Категории'
        //     '' => 'Главная/Категории/Продукт'
        // ]
        if ($this->match()) {
            $controller_name = 'app\controllers\\' . ucfirst($this->params['controller']) . 'Controller';
            if (class_exists($controller_name)) {
                $controller = new $controller_name($this->params);
                $action_name = $this->params['action'] . 'Action';
                if (method_exists($controller, $action_name)) {
                    $controller->$action_name();
                } else {
                    // echo "Метод {$action_name} не существует";
                    require 'app/views/404/404.php';
                }
            } else {
                // echo "Контроллер {$controller_name} не существует";
                require 'app/views/404/404.php';
            }
        } else {
            // echo "Маршрут " . $_SERVER['QUERY_STRING'] . " не найден";
            require 'app/views/404/404.php';
        }
    }

    protected static function removeQueryString($url)
    {
        // account/login&page=1&count=8
        $params = explode('&', $url, 2);
        if (strpos($params[0], '=') === false) {
            return $params[0];
        } else {
            return '';
        }
    }
}
