<?php
    require_once 'libs/Router.php';
    require_once 'app/controller/stock-api.controller.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $router = new Router();

    // rutas
    $router->addRoute("/muebles", "GET", "StockApiController", "getStock");
    $router->addRoute("/mueblesBy/:ORDER/:TYPE", "GET", "StockApiController", "getStock");
    $router->addRoute("/muebles/:ID", "GET", "StockApiController", "getMueble");
    $router->addRoute("/muebles/:ID", "DELETE", "StockApiController", "deleteMueble");
    $router->addRoute("/muebles", "POST", "StockApiController", "insertMueble");
    $router->addRoute("/muebles/:ID", "PUT", "StockApiController", "editMueble");

    //ruta default
    $router->setDefaultRoute("StockApiController", "getStock");
    //run
    $router->route($_GET["resource"], $_SERVER["REQUEST_METHOD"]); 
