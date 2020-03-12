<?php

namespace app\controllers;

use app\core\Controller;

class CartController extends Controller
{
    // public function viewAction()
    // {
    //     debug($_GET);
    //     // $product = $this->model->getProduct($_GET['product_id']);
    //     // $product_name = $_GET['product_name'];
    //     // $category_id = $_GET['category_id'];

    //     // $breadcrumbs = ['Главная' => '/', 'Категория' => "/category/products?cat_id={$category_id}", 'О товаре' => ''];
    //     $a = 123;
    //     $this->view->render('', compact('a'));
    // }

    public function addAction()
    {
        // session_destroy();
        if (isset($_GET['product_id'])) {
            $product_id = $_GET['product_id'];
            if (!$_SESSION['user_cart']) {
                $_SESSION['user_cart'] = [];
            }
            array_push($_SESSION['user_cart'], $product_id);
            echo(count($_SESSION['user_cart']));
        }else{
            echo false;
        }
    }
}
