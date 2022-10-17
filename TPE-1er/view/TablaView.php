<?php
require_once "./libs/Smarty.class.php";
require_once "./extras/img.php";

class TablaView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showAllProducts($prod, $cats){
        $this->smarty->assign('titulo_s', "Nagel Muebles | Shop");
        $this->smarty->assign('productos_s', $prod);
        $this->smarty->assign('categorias_s', $cats);
        $this->smarty->assign('all_categorias', $cats);
        $this->smarty->assign('allProducts', true);
        $this->smarty->display('templates/inventarioUser.tpl');
    }

    function showProductsByCategoria($prod, $cats, $tituloCatOBJ){
        foreach ($tituloCatOBJ as $key => $value) {
            $titulo = $value->{"nombre_cat"};
        }
        $this->smarty->assign('titulo_s', "Nagel Muebles | $titulo");
        $this->smarty->assign('productos_s', $prod);
        $this->smarty->assign('categoria', $titulo);
        $this->smarty->assign('all_categorias', $cats);
        $this->smarty->assign('allProducts', false);
        $this->smarty->display('templates/productosCategoria.tpl');
    }

    function showProduct($mueble){
        $titulo = $mueble[0]->{"nombre"};
        $precio_final = ($mueble[0]->{"precio"} * (100 - $mueble[0]->{"descuento"}) / 100);
        $this->smarty->assign('titulo_s', "Nagel Muebles | $titulo");
        $this->smarty->assign('precio_final', $precio_final);
        $this->smarty->assign('mueble', $mueble[0]);
        $this->smarty->display('templates/productoPage.tpl');
    }
}