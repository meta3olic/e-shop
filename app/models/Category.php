<?php

namespace app\models;

use app\core\Model;

class Category extends Model
{
    public function getProducts()
    {
        return $this->db->query("SELECT * FROM goods");
    }
}
