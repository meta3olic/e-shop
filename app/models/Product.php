<?php

namespace app\models;

use app\core\Model;

class Product extends Model
{
    public function getProduct($id)
    {
        return $this->db->query("SELECT * FROM goods WHERE id={$id}");
    }
}
