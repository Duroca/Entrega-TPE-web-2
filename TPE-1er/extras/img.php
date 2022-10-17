<?php

class imgToSave {

    private $img;

    function __construct($file) {
        $this->img = $file;
    }

    function Save($destino){
        $ruta = $this->img['tmp_name'];
        move_uploaded_file($ruta, $destino);
    }
}