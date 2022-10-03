<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class SingerView{

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showSinger($singer){
        // asigno variables al tpl smarty
        $this->smarty->assign('singers', $singer);

        // mostrar el tpl
        $this->smarty->display('singer.tpl');
    }
}