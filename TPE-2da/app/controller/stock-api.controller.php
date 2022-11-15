<?php
require_once './app/model/stock.model.php';
require_once './app/view/stock-api.view.php';

class StockApiController {
    private $model;
    private $view;

    private $data;

    public function __construct() {
        $this->model = new StockModel();
        $this->view = new ApiView();
        
        // lee el body del request
        $this->data = file_get_contents("php://input"); 
    }

    private function getData() {
        return json_decode($this->data);
    }

    public function getStock($params = null) {
        if ($params != null){
            $order = $params[':ORDER'];
            $type = $params[':TYPE'];
            $stock = $this->model->getAllOrdered($order, $type);
        } else {
            $stock = $this->model->getAll();
        }
        if ($stock){
            $this->view->response($stock);
        } else {
            $this->view->response("Error de parametros", 404);
        }
    }

    public function getMueble($params = null) {
        $id = $params[':ID'];
        $mueble = $this->model->get($id);

        if ($mueble)
            $this->view->response($mueble);
        else 
            $this->view->response("El mueble con el id=$id no existe", 404);
    }

    public function deleteMueble($params = null) {
        $id = $params[':ID'];

        $mueble = $this->model->get($id);
        if ($mueble) {
            $this->model->delete($id);
            $this->view->response($mueble);
        } else 
            $this->view->response("El mueble con el id=$id no existe", 404);
    }

    public function insertMueble($params = null) {
        $mueble = $this->getData();

        if (empty($mueble->nombre) || empty($mueble->precio) || empty($mueble->descuento) || empty($mueble->id_categoria_fk)  || empty($mueble->imagen)){
            $this->view->response("Complete los datos", 400);
        } else {
            $id = $this->model->insert($mueble->nombre, $mueble->precio, $mueble->descuento, $mueble->id_categoria_fk, $mueble->imagen);
            $mueble = $this->model->get($id);
            $this->view->response($mueble, 201);
        }
    }

    public function editMueble($params = null) {
        $id = $params[':ID'];
        $mueble_viejo = $this->model->get($id);
        if ($mueble_viejo) {
            $mueble = $this->getData();
            if (empty($mueble->nombre) || empty($mueble->precio) || empty($mueble->descuento) || empty($mueble->id_categoria_fk)  || empty($mueble->imagen)) {
                $this->view->response("Complete los datos", 400);
            } else {
                $this->model->edit($mueble->nombre, $mueble->precio, $mueble->descuento, $mueble->id_categoria_fk, $mueble->imagen, $id);
                $this->view->response($this->model->get($id));
            }
        } else
            $this->view->response("El mueble con el id=$id no existe", 404);
    }

}