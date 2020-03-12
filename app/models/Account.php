<?php

namespace app\models;

use app\core\Model;

class Account extends Model
{
    public function checkAccount($data)
    {
        if ($data) {
            $login = $_POST['login'];
            $password = $_POST['password'];
        } else {
            return false;
        }
        $user = $this->db->queryOne("SELECT * FROM users WHERE name='{$login}' AND password='{$password}'");
        if ($user) {
            return $user;
        } else {
            return false;
        }
    }
}
