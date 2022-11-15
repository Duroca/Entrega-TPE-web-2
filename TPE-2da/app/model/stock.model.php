<?php

class StockModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_muebleria;charset=utf8', 'root', '');
    }

    public function getAll() {
        $query = $this->db->prepare("SELECT p.*, c.nombre_cat FROM producto p, categoria c WHERE p.id_categoria_fk = c.id");
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getAllOrdered($order, $defaultOrder) {
        try {
            $query = $this->db->prepare("SELECT p.*, c.nombre_cat FROM producto p, categoria c  WHERE p.id_categoria_fk = c.id ORDER BY $order $defaultOrder");
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }
        catch (PDOException $e) {
            return null;
        }
    }

    public function get($id) {
        $query = $this->db->prepare("SELECT p.*, c.nombre_cat FROM producto p, categoria c WHERE p.id = $id AND p.id_categoria_fk=c.id");
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert($nombre, $precio, $descuento, $id_categoria, $img) {
        $query = $this->db->prepare("INSERT INTO producto(nombre, precio, descuento, id_categoria_fk, imagen) VALUES (?, ?, ?, ?, ?)");
        $query->execute([$nombre, $precio, $descuento, $id_categoria, $img]);

        return $this->db->lastInsertId();
    }

    public function delete($id) {
        $query = $this->db->prepare("DELETE FROM producto WHERE id = ?");
        $query->execute([$id]);
    }

    public function edit($nombre, $precio, $descuento, $id_categoria, $img, $id_producto) {
        $query = $this->db->prepare("UPDATE producto SET nombre=?, precio=?, descuento=?, id_categoria_fk=?, imagen=?  WHERE id=?");
        $query->execute([$nombre, $precio, $descuento, $id_categoria, $img, $id_producto]);
    }
    
}