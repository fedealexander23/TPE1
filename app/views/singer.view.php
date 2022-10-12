<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class SingerView{

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showSinger($singer, $authHelper){
        // asigno variables al tpl smarty
        $this->smarty->assign('singers', $singer);
        $this->smarty->assign('sesion', $authHelper);

        // mostrar el tpl
        $this->smarty->display('singer.tpl');
    }

    public function showFormEdit($singer){
        $this->smarty->assign('singer', $singer);
        $this->smarty->display('formEditSinger.tpl');
    }

}