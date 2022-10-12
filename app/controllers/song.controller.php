<?php
require_once './app/models/song.model.php';
require_once './app/views/song.view.php';
require_once './app/controllers/singer.controller.php';

class SongController{
    private $model;
    private $view;

    public function __construct() {
        $this->model = new SongModel();
        $this->view = new SongView();
    }

    public function showHome(){
        $this->view->showHome();
    }

    public function showSong(){
        $this->modelSinger = new SingerModel();
        $singer = $this->modelSinger->getAllSinger();
        $songs = $this->model->getAllSong();
        $this->view->showSong($songs, $singer);
    }

    public function showSongID($id){
        $songs = $this->model->getSongID($id);
        $this->view->showSongID_filter($songs);

    }

    public function filterSinger(){
        $singer = $_POST['singer'];

        if(isset($singer)){
            $songs = $this->model->filterSinger($singer);
            $this->view->showSongID_filter($songs);
        }
        
    }

    public function addSong(){
        $title = $_POST['title'];
        $genere = $_POST['genere'];
        $album = $_POST['album'];
        $singer = $_POST['singer'];

        if(isset($title) && isset($genere) && isset($album) && isset($singer)){
            $songs = $this->model->insertSong($title, $genere, $album, $singer);
        }

        header("Location: " . BASE_URL); 
    }

    public function deleteSong($id){
        $this->model->deleteSongById($id);
        header("Location: " . BASE_URL);
    }

    public function showEditForm($id){
        $song = $this->model->getSongID($id);
        $this->view->showFormEdit($song);
    }

    public function editSong($id){
        $title = $_POST['title'];
        $genere = $_POST['genere'];
        $album = $_POST['album'];
        $singer = $_POST['singer'];

        if(isset($title)){
            $this->model->editSongById($title, $genere, $album, $singer, $id);
            header("Location: " . BASE_URL);
        }
    }
}   