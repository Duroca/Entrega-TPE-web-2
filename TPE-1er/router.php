<?php
require_once 'controller/TablaController.php';
require_once 'controller/TablaAdminController.php';
require_once 'extras/UserSession.php';
require_once 'controller/SessionController.php';

define("BASE_URL", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/');


$action = "home";
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);
    
$t = new TablaController();
$tAdmin = new TablaAdminController();
$session = new UserSession();

switch ($params[0]) {
    case 'home':
        $h = new Smarty();
        $h->assign('titulo_s', "Nagel Muebles");
        $h->display("templates/home.tpl");
        break;

    case 'about_us':
        $h = new Smarty();
        $h->assign('titulo_s', "Nagel Muebles | About us");
        $h->display("templates/about-us.tpl");
        break;

    case 'shop':
        if (isset($params[1])){
            $t->ProductosByCategoria($params[1]);
        }else{
            if (isset($_SESSION['user'])){
                $tAdmin->Admin_inventory();
            }else{
                $t->AllProducts();
            }
        }
        break;

    case 'detalles':
        if (isset($params[1])){
            $t->PageProducto($params[1]);
        }else{
            echo "404 not found";
        }
        break;
    case 'shop-all':
        $t->AllProducts();
        break;

    case 'login':
        $h = new Smarty();
        $h->assign('titulo_s', "Login");
        $h->display("templates/login.tpl");
        break;

    case 'verify-login':
        $sessionUser = $_POST['userName'];
        $sessionPass = $_POST['userPassword'];

        $s = new SessionController();

        if($s->IsAdmin($sessionUser, $sessionPass)){
            $session->setUser($sessionUser);
            header('location: shop');
        }else{
            $h = new Smarty();
            $h->assign('titulo_s', "Login");
            $h->display("templates/login.tpl");
        }
        
        break;

    case 'logout':
        $session->closeSession();
        header('location: home');
        break;

    case 'submit-categoria':
        if (isset($_SESSION['user'])){
            $tAdmin->AddCategoria();
            header('location: shop');
        }else{
            echo "404 not found";
        }
        break;

    case 'submit-mueble':
        if (isset($_SESSION['user'])){
            $tAdmin->AddMueble();
            header('location: shop');
        }else{
            echo "404 not found";
        }
        break;

    case 'delete-categoria':
        if (isset($_SESSION['user'])){
            $id_cat = $params[1];
            $tAdmin->DeleteCategoria($id_cat);
            header('location: ../shop');
        }else{
            echo "404 not found";
        }
        break;

    case 'delete-mueble':
        if (isset($_SESSION['user'])){
            $id_mueble = $params[1];
            $tAdmin->DeleteMueble($id_mueble);
            header('location: ../shop');
        }else{
            echo "404 not found";
        }
        break;

    default:
        echo "404 not found";
        break;
}





