<?php

class Noticia extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function listado() {
        $url = $this->helper->getUrl();
        if (!empty($url[2])) {
            $pagina = $url[2];
        } else {
            $pagina = 1;
        }
        
        $this->view->listado = $this->model->listadoNoticias($pagina);

        $this->view->title = SITE_TITLE . 'Noticias';
        $this->view->description = 'Listado de Noticias';
        $this->view->render('header');
        $this->view->render('noticia/index');
        $this->view->render('footer');
    }

}
