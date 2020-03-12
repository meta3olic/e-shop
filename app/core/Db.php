<?php

namespace app\core;


class Db
{
    use TSingletone;

    protected $mysqli;
    protected function __construct()
    {
        $config_db = require 'app/config/config_db.php';
        $this->mysqli = new \MySQLi($config_db['host'], $config_db['user'], $config_db['password'], $config_db['db_name']);
        if ($this->mysqli->connect_error) {
            die("Ошибка подключения к БД");
        }
    }
    public function query($sql)
    {
        $res = $this->mysqli->query($sql);
        return $res->fetch_all(MYSQLI_ASSOC);
    }

    public function queryOne($sql)
    {
        $res = $this->mysqli->query($sql);
        return $res->fetch_assoc();
    }
}
