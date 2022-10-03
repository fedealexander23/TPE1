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

    function showHome(){
        $this->view->showHome();
    }

    function showSong(){
        $songs = $this->model->getAllSong();
        $this->view->showSong($songs);
    }

    function showSongID($id){
        $songs = $this->model->getSongID($id);
        $this->view->showSongID($songs);

    }

}