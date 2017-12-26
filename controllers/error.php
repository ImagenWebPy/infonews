<?php

class Error extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->title = SITE_TITLE . '404 - Opps, la pagina solicitada no existe.';
        $this->view->description = 'Página de error';
        $this->view->render('header');
        $this->view->render('error/index');
        $this->view->render('footer');
    }

}
