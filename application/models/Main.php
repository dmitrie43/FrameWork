<?php

namespace application\models;

use application\core\Model;

class Main extends Model
{
    public function getUsers() {
        $result = $this->db->viewAll('SELECT name FROM users');
        return $result;
    }
}