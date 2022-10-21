<?php
require_once './app/models/song.model.php';
require_once './app/views/song.view.php';
require_once './app/controllers/singer.controller.php';
require_once './app/helpers/auth.helper.php';

class SongController{
    private $model;
    private $view;

    public function __construct() {
        $this->model = new SongModel();
        $this->view = new SongView();
    }

    public function showSong(){
        $authHelper = new AuthHelper();
        $this->modelSinger = new SingerModel();
        $singer = $this->modelSinger->getAllSinger();
        $songs = $this->model->getAllSong();
        $this->view->showSong($songs, $singer, $authHelper->isAdmin());
    }

    public function showSongID($id){
        $songs = $this->model->getSongID($id);
        $this->view->showSongID($songs);

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

        $authHelper = new AuthHelper();
        if($authHelper->isAdmin()){
            if(!isset($title) && !isset($genere) && !isset($album) && !isset($singer)){
                header("Location: " . BASE_URL);
            }
            else{
                $songs = $this->model->insertSong($title, $genere, $album, $singer);
            }
        }
        header("Location: " . BASE_URL . "songs"); 
    }

    public function deleteSong($id){
        $authHelper = new AuthHelper();
        if($authHelper->isAdmin()){
            $this->model->deleteSongById($id);
        }
        header("Location: " . BASE_URL . "songs");
    }

    public function showEditForm($id){
        $authHelper = new AuthHelper();
        if($authHelper->isAdmin()){
            $song = $this->model->getSongID($id);
            $this->view->showFormEdit($song);
        }
    }

    public function editSong($id){
        $title = $_POST['title'];
        $genere = $_POST['genere'];
        $album = $_POST['album'];
        $singer = $_POST['singer'];

        $authHelper = new AuthHelper();
        if($authHelper->isAdmin()){
            $this->model->editSongById($title, $genere, $album, $singer, $id);
        }
        header("Location: " . BASE_URL . "songs");
    }
}   