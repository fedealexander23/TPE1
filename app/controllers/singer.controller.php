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

        $singer = $this->model->insertSinger($singer, $nationality);
    
        header("Location: " . BASE_URL); 
    }

    function deleteSinger($singer){
        $this->model->deleteSingerById($singer);
        header("Location: " . BASE_URL . 'singers');
    }

    function editSinger($id){
        
    }
}