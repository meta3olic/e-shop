<?php

namespace app\models;

use app\core\Model;

class Main extends Model
{

    public function getCats()
    {
        return $this->db->query('SELECT * FROM categories');
    }
}
