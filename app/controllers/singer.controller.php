<?php
require_once './app/models/singer.model.php';
require_once './app/views/singer.view.php';
require_once './app/helpers/auth.helper.php';

class SingerController{
    private $model;
    private $view;
    
    
    
    public function __construct() {
        $this->model = new SingerModel();
        $this->view = new SingerView();
    }
    
    function showSinger(){
        $authHelper = new AuthHelper();
        $singer = $this->model->getAllSinger();
        $this->view->showSinger($singer, $authHelper->isAdmin());
    }

    function addSinger(){
        $singer = $_POST['singer'];
        $nationality = $_POST['nationality'];

        if(isset($singer) && isset($nationality)){
            $singer = $this->model->insertSinger($singer, $nationality);
            header("Location: " . BASE_URL . "singers" ); 
        }
    }

    function deleteSinger($singer){
        $this->model->deleteSingerById($singer);
        header("Location: " . BASE_URL . 'singers');
    }

    function showEditForm($id){
        $singer = $this->model->getSingerID($id);
        $this->view->showFormEdit($singer);
    }

    function editSinger($id){
        
        $singer = $_POST['singer'];
        $nationality = $_POST['nationality'];

        if(!isset($singer) || !isset($nationality)){
            
        }
        else{
            $this->model->editSingerById($singer, $nationality, $id);
            header("Location: " . BASE_URL . "singers"); 
        }
    }
}