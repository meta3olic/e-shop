<?php
include 'app/lib/debug.php';
include 'app/lib/functions.php';


use app\core\Router;
// use app\config\Db;

function autoloader($class)
{
    $class = str_replace('\\', '/', $class);
    $file = $class . '.php';
    if (file_exists($file)) {
        require $file;
    }
}
spl_autoload_register('autoloader');

$router = new Router();
$router->run();
