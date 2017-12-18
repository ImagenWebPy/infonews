<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->slider = $this->helper->getHomeSlider();
        $this->view->promocion = $this->helper->getHomePromociones();
        $this->view->rrhh = $this->helper->getHomeRRHH();
        $this->view->marcas = $this->helper->getHomeMarcasNovedades();
        $this->view->videos = $this->helper->getHomeVideos();
        $this->view->varios = $this->helper->getHomeVarios();
        $this->view->listadoPromociones = $this->helper->getHomeListadoPromociones();
        $this->view->listadoRRHH = $this->helper->getFooterRRHH();
        $this->view->title = SITE_TITLE . 'Info-News';
        $this->view->description = 'Portal de Noticias e Informaciones';
        $this->view->render('header');
        $this->view->render('index/index');
        $this->view->render('footer');
    }

}
