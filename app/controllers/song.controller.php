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

    public function showHome(){
        $this->view->showHome();
    }

    public function showSong(){
        $songs = $this->model->getAllSong();
        $this->view->showSong($songs);
    }

    public function showSongID($id){
        $songs = $this->model->getSongID($id);
        $this->view->showSongID_filter($songs);

    }

    function filterSinger(){
        $singer = $_POST['singer'];
        
        $songs = $this->model->filterSinger($singer);
        $this->view->showSongID_filter($songs);
    }

    function addSong(){
        $title = $_POST['title'];
        $genere = $_POST['genere'];
        $album = $_POST['album'];
        $singer = $_POST['singer'];

        $songs = $this->model->insertSong($title, $genere, $album, $singer);

        header("Location: " . BASE_URL); 
    }

    function deleteSong($id){
        $this->model->deleteSongById($id);
        header("Location: " . BASE_URL);
    }

    function editSong($id){
        $this->view->showFormEdit($id);
    }
}