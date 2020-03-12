<?php

namespace app\controllers;

use app\core\Controller;

// use app\core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $cats = $this->model->getCats();
        $breadcrumbs = [];
        $this->view->render('Главная', compact('cats', 'breadcrumbs'));
    }
}
