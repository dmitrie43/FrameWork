<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class MainController extends Controller
{
    public function indexAction() {

//        $db = new Db;
//
//        $params = [
//            'id' => 3,
//        ];
//
//        $data = $db->column('SELECT name FROM users WHERE id = :id', $params);

        $result = $this->model->getUsers();
        $vars = [
          'users' => $result,
        ];

        $this->view->render('Главная страница', $vars);
    }
}