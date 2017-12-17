<?php

class Index extends Controller {

    private $meta_description = '';

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->slider = $this->helper->getHomeSlider();
        $this->view->promocion = $this->helper->getHomePromociones();
        $this->view->rrhh = $this->helper->getHomeRRHH();
        $this->view->title = SITE_TITLE . 'Info-News';
        $this->view->description = 'Portal de Noticias e Informaciones';
        $this->view->render('header');
        $this->view->render('index/index');
        $this->view->render('footer');
    }

}
