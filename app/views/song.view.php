<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class SongView{

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    public function showHome(){
        $this->smarty->display('home.tpl');
    }

    public function showSong($songs) {
        // asigno variables al tpl smarty
        $this->smarty->assign('songs', $songs);

        // mostrar el tpl
        $this->smarty->display('songList.tpl');
    }

    public function showSongID_filter($songs){
        // asigno variables al tpl smarty
        $this->smarty->assign('songs', $songs);
        // mostrar el tpl
        $this->smarty->display('song.id.filter.tpl');

    }

    public function showFormEdit($id){
        $this->smarty->assign('id', $id);
        $this->smarty->display('formEditSong.tpl');
    }

}