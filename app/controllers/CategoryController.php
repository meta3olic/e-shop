<?php

namespace app\controllers;

use app\core\Controller;

class CategoryController extends Controller
{
    public function productsAction()
    {
        $products = $this->model->getProducts();
        $cat_name = $_GET['cat_name'];
        $cat_id = $_GET['cat_id'];
        $breadcrumbs = ['Главная' => '/', 'Категория' => ''];
        $this->view->render($cat_name, compact('products', 'cat_id', 'breadcrumbs'));
    }
}
