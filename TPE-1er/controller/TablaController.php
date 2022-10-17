<?php

require_once "./model/TablaModel.php";
require_once "./view/TablaView.php";
require_once "./extras/img.php";


class TablaController{

    private $view;
    private $model;
    
    function __construct(){
        $this->view = new TablaView();
        $this->model = new TablaModel();
    }

    function AllProducts(){
        $inv = $this->model->getInventario();
        $cats = $this->model->getCategorias();
        $this->view->showAllProducts($inv,$cats);
    }

    function ProductosByCategoria($name){
        $cats = $this->model->getCategorias();
        $muebles = $this->model->getProductosByCategoria($name);
        $id = $this->model->getCategoriaID($name);
        foreach ($id as $key => $value) {
            $nameOBJ = $this->model->getCategoria($value);
        }
        $this->view->showProductsByCategoria($muebles, $cats, $nameOBJ);
    }

    function PageShop($id){
        $cats = $this->model->getCategorias();
        $cat1 = $this->model->getCategoria($id);
        foreach ($cat1 as $key => $value) {
            $muebles = $this->model->getProductosByCategoria($value->{"nombre_cat"});
        }
        $this->view->showProductsByCategoria($muebles, $cats, $cat1);
    }

    function PageProducto($id){
        $mueble = $this->model->getProducto($id);
        $this->view->showProduct($mueble);
    }
}