<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class SongView{

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showHome(){
        $this->smarty->display('home.tpl');
    }

    function showSong($songs) {
        // asigno variables al tpl smarty
        $this->smarty->assign('count', count($songs)); 
        $this->smarty->assign('songs', $songs);

        // mostrar el tpl
        $this->smarty->display('songList.tpl');
    }

    function showSongID($songs){
        // asigno variables al tpl smarty
        $this->smarty->assign('songs', $songs);
        // mostrar el tpl
        $this->smarty->display('songID.tpl');

    }
}