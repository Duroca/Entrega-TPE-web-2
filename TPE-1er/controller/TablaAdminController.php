<?php

require_once "./model/TablaAdminModel.php";
require_once "./view/TablaAdminView.php";
require_once "./extras/img.php";

class TablaAdminController extends TablaController{

    private $viewAdmin;
    private $modelAdmin;

    private $view;
    private $model;

    function __construct(){
        $this->viewAdmin = new TablaAdminView();
        $this->modelAdmin = new TablaAdminModel();

        $this->view = new TablaView();
        $this->model = new TablaModel();
    }

    function Admin_inventory(){
        $inv = $this->model->getInventario();
        $cats = $this->model->getCategorias();
        $this->viewAdmin->showInventarioAdmin($inv,$cats);
        $this->view->showAllProducts($inv,$cats);
    }

    function AddMueble(){
        $nombre = $_POST['tf_producto'];
        $precio = $_POST['tf_valor'];
        $descuento = $_POST['tf_descuento'];
        $id_categoria = $_POST['tf_categoria'];
        $img = $_FILES['tf_imagen'];
        //Guarda la imagen en la carpeta images
        $file = new imgToSave($img);
        $UrlImg = 'images/'.$img['name'];

        $file->Save($UrlImg);
        $this->modelAdmin->insertMueble($nombre, $precio, $descuento, $id_categoria, $UrlImg);
    }

    function AddCategoria(){
        $cat = $_POST['tf_new_categoria'];
        $this->modelAdmin->insertCategoria($cat);
    }

    function DeleteMueble($id){
        $mueble = $this->model->getProducto($id);

        //no pude encontrar otra forma de hacer andar esto..
        //Eliminar imagen
        foreach ($mueble as $key => $value) {
            unlink(print_r($value->imagen, true));
        }

        $this->modelAdmin->deleteMueble($id);
    }

    function DeleteCategoria($id){
        $this->modelAdmin->deleteCategoria($id);
    }
}