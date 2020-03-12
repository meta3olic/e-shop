<?php

namespace app\controllers;

use app\core\Controller;

class ProductController extends Controller
{
    public function viewAction()
    {
        $product = $this->model->getProduct($_GET['product_id']);
        $product_name = $_GET['product_name'];
        $category_id = $_GET['category_id'];

        $breadcrumbs = ['Главная' => '/', 'Категория' => "/category/products?cat_id={$category_id}", 'О товаре' => ''];
        $this->view->render($product_name, compact('product', 'breadcrumbs'));
    }

    // public function cartAction()
    // {
    //     // echo 'Cart';
    //     // die;
    // }
}
