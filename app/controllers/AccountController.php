<?php

namespace app\controllers;

use app\core\Controller;

class AccountController extends Controller
{
    public function loginAction()
    {
        $breadcrumbs = ['Главная' => '/', 'Авторизация' => ''];
        $this->view->render('Login', compact('breadcrumbs'));
    }
    public function registerAction()
    {
    }
    public function checkLoginAction()
    {
        $data = $_POST;
        $user = $this->model->checkAccount($data);
        if ($user) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            echo true;
        } else {
            echo false;
        }
    }

    public function logoutAction()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);
        header("location: {$_SERVER['HTTP_REFERER']}");
    }
}
