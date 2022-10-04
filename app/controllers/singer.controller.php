<?php
require_once './app/models/singer.model.php';
require_once './app/views/singer.view.php';

class SingerController{
    private $model;
    private $view;

    public function __construct() {
        $this->model = new SingerModel();
        $this->view = new SingerView();
    }

    function showSinger(){
        $singer = $this->model->getAllSinger();
        $this->view->showSinger($singer);
    }

}