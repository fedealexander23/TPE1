<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class SongView{

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showTasks($songs) {
        // asigno variables al tpl smarty
        $this->smarty->assign('count', count($songs)); 
        $this->smarty->assign('songs', $songs);

        // mostrar el tpl
        $this->smarty->display('taskList.tpl');
    }
}