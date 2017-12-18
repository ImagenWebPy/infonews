<?php

class Noticia extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function listado() {
        $this->views->listado = $this->model->listadoNoticias();

        $this->view->title = SITE_TITLE . 'Noticias';
        $this->view->description = 'Listado de Noticias';
        $this->view->render('header');
        $this->view->render('noticia/index');
        $this->view->render('footer');
    }

}
