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

    function guardarImagen($img){
        //Guarda la imagen en la carpeta images
        $file = new imgToSave($img);
        $UrlImg = 'images/'.$img['name'];
        $file->Save($UrlImg);
    }

    function AddMueble(){
        $nombre = $_POST['tf_producto'];
        $precio = $_POST['tf_valor'];
        $descuento = $_POST['tf_descuento'];
        $id_categoria = $_POST['tf_categoria'];
        $img = $_FILES['tf_imagen'];
        $this->guardarImagen($img);
        $this->modelAdmin->insertMueble($nombre, $precio, $descuento, $id_categoria, 'images/'.$img['name']);
    }

    function AddCategoria(){
        $cat = $_POST['tf_new_categoria'];
        $this->modelAdmin->insertCategoria($cat);
    }

    function EditMueble($id_mueble){
        $nombre = $_POST['tf_producto'];
        $precio = $_POST['tf_valor'];
        $descuento = $_POST['tf_descuento'];
        $id_categoria = $_POST['tf_categoria'];
        $img = $_FILES['tf_imagen'];
        $this->guardarImagen($img);
        $this->modelAdmin->editMueble($nombre, $precio, $descuento, $id_categoria, 'images/'.$img['name'], $id_mueble);
    }

    function DeleteMueble($id){
        $mueble = $this->model->getProducto($id);
        $this->modelAdmin->deleteMueble($id);

        //no pude encontrar otra forma de hacer andar esto..
        //Eliminar imagen
        foreach ($mueble as $key => $value) {
            unlink(print_r($value->imagen, true));
        }
    }

    function DeleteCategoria($id){
        $this->modelAdmin->deleteCategoria($id);
    }
}