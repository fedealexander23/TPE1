<?php
require_once './app/models/song.model.php';
require_once './app/views/song.view.php';

class SongController{

    private $model;
    private $view;

    public function __construct() {
        $this->model = new SongModel();
        $this->view = new SongView();
    }

    function showSong(){
        $songs = $this->model->getAllSong();
        $this->view->showTasks($songs);
    }


}