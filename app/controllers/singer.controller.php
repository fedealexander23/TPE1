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
        $img = $_FILES['img']['tmp_name'];
        $authHelper = new AuthHelper();
        if($authHelper->isAdmin()){
            if($img){ 
                $this->model->insertSinger($singer, $nationality, $img);
            }else{
                $this->model->insertSinger($singer, $nationality);
            }
        }   
        header("Location: " . BASE_URL . "singers" ); 
    }

    function deleteSinger($singer){
        $authHelper = new AuthHelper();
        if($authHelper->isAdmin()){
            $this->model->deleteSingerById($singer);
        }
        header("Location: " . BASE_URL . 'singers');
    }
    
    function showEditForm($id){
        $authHelper = new AuthHelper();
        if($authHelper->isAdmin()){
            $singer = $this->model->getSingerID($id);
            $this->view->showFormEdit($singer);
        }
    }

    function editSinger($id){
        $singer = $_POST['singer'];
        $nationality = $_POST['nationality'];
        $img = $_FILES['img']['tmp_name'];

        $authHelper = new AuthHelper();
        if($authHelper->isAdmin()){
            if($img){
                $this->model->editSingerById($singer, $nationality, $id, $img);
            }else{
                $this->model->editSingerById($singer, $nationality, $id);
            }
        }
        header("Location: " . BASE_URL . "singers"); 
    }
}