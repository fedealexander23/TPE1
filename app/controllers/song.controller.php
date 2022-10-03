<?php
require_once './app/models/song.model.php';
require_once './app/views/song.view.php';

class SongController{

    private $model;
    private $view;

    public function __construct() {
        $this->model = new TaskModel();
        $this->view = new TaskView();
    }


}