<?php

namespace app\core;

abstract class Model
{
    protected $db;
    // public $db;
    public function __construct()
    {
        $this->db = Db::instance();
    }
}
