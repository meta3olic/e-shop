<?php

namespace app\core;

class View
{
    public $route;
    public $path;
    public $layout = 'default';

    public function __construct($route)
    {
        // $getPart = (explode('?', $_SERVER['HTTP_REFERER']))[1];
        // $this->breadcrumbsArr = ['main' => ['url' => '', 'text' => ''], 'category' => ['url' => '/', 'text' => 'Главная/Категория'], 'product' => ['url' => '/category/products?' . $getPart, 'text' => 'Главная/Категория/О товаре']];
        // debug($this->breadcrumbsArr);
        $this->route = $route;
        $this->path = ucfirst($route['controller']) . '/' . $route['action'];
    }

    public function render($title, $vars = [])
    {
        extract($vars);
        $layout = 'app/views/layouts/' . $this->layout . '.php';
        $view = 'app/views/' . $this->path . '.php';
        if (file_exists($view)) {
            ob_start();
            require $view;
            $content = ob_get_clean();
        } else {
            echo "Вид {$view} не найден";
        }
        if (file_exists($layout)) {
            require $layout;
        } else {
            echo "Шаблон {$layout} не найден";
        }
    }

    public static function error_code()
    {
        // require 
    }
}
