<?php

class TablaModel {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_muebleria;charset=utf8', 'root', '');
    }

    function getInventario(){
        $sentencia = $this->db->prepare("SELECT p.*, c.nombre_cat FROM producto p, categoria c WHERE p.id_categoria_fk = c.id");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function getProducto($id_producto){
        $sentencia = $this->db->prepare("SELECT p.*, c.nombre_cat FROM producto p, categoria c WHERE p.id = $id_producto AND p.id_categoria_fk=c.id");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function getCategorias(){
        $sentencia = $this->db->prepare("SELECT * FROM categoria");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    
    function getCategoria($id){
        $sentencia = $this->db->prepare("SELECT nombre_cat FROM categoria WHERE id = $id");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function getCategoriaID($name){
        $sentencia = $this->db->prepare("SELECT id FROM categoria WHERE nombre_cat = '$name'");
        $sentencia->execute();
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function getProductosByCategoria($name){
        $id = $this->getCategoriaID($name);
        foreach ($id as $key => $value) {
            $sentencia = $this->db->prepare("SELECT * FROM producto WHERE id_categoria_fk = $value");
        }
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
}

