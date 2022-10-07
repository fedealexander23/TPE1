<?php
require_once './app/models/auth.model.php';
require_once './app/views/auth.view.php';

class AuthController{
    private $model;
    private $view;

    public function __construct() {
        $this->model = new usersModel();
        $this->view = new AuthView();
    }
}