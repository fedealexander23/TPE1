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

    function addSinger(){
        $singer = $_POST['singer'];
        $nationality = $_POST['nationality'];

        if(!isset($singer) && !isset($singer)){
            $singer = $this->model->insertSinger($singer, $nationality);
        }

        header("Location: " . BASE_URL); 
    }

    function deleteSinger($id){
        $this->model->deleteSingerById($id);
        header("Location: " . BASE_URL);
    }

    function editSinger($id){
        
    }
}