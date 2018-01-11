<?php

class Clipping extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function listado() {
        $this->view->title = SITE_TITLE . 'Clipping';
        $this->view->description = 'Clipping';
        $this->view->render('header');
        $this->view->render('clipping/listado');
        $this->view->render('footer');
    }

    public function filtrarClipping() {
        header('Content-type: application/json; charset=utf-8');
        $datos = array(
            'fecha' => $this->helper->cleanInput($_POST['fecha']),
        );
        $data = $this->model->filtrarClipping($datos);
        echo json_encode($data);
    }

}
