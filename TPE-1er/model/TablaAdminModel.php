<?php

class TablaAdminModel {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_muebleria;charset=utf8', 'root', '');
    }

    function insertCategoria($categoria){
        $sentencia = $this->db->prepare("INSERT INTO categoria(nombre_cat) VALUES (?)");
        $sentencia->execute(array($categoria));
    }

    function insertMueble($nombre, $precio, $descuento, $id_categoria, $img){
        $sentencia = $this->db->prepare("INSERT INTO producto(nombre, precio, descuento, id_categoria_fk, imagen) VALUES (?, ?, ?, ?, ?)");
        $sentencia->execute(array($nombre, $precio, $descuento, $id_categoria, $img));
    }

    function deleteMueble($id){
        $sentencia = $this->db->prepare("DELETE FROM producto WHERE id = $id");
        $sentencia->execute();
    }

    function deleteCategoria($id){
        $sentencia = $this->db->prepare("DELETE FROM categoria WHERE id = $id");
        $sentencia->execute();
    }

    function editMueble($nombre, $precio, $descuento, $id_categoria, $img, $id_producto){
        $sentencia = $this->db->prepare("UPDATE producto SET nombre=$nombre, precio=$precio, descuento=$descuento, id_categoria_fk=$id_categoria, imagen=$img  WHERE id = $id_producto");
        $sentencia->execute();
    }
}