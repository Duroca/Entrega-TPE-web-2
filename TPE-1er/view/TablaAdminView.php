<?php
require_once "./libs/Smarty.class.php";
require_once "./extras/img.php";

class TablaAdminView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }
    
    function showInventarioAdmin($prod, $cat){
        $this->smarty->assign('titulo_s', "Admin Inventario");
        $this->smarty->assign('productos_s', $prod);
        $this->smarty->assign('categorias_s', $cat);
        $this->smarty->display('templates/inventarioAdmin.tpl');
    }
}