<?php

class Rrhh extends Controller {

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

        $this->view->listado = $this->model->listadoRRHH($pagina);

        $this->view->title = SITE_TITLE . 'Noticias';
        $this->view->description = 'Recursos Humanos';
        $this->view->render('header');
        $this->view->render('rrhh/index');
        $this->view->render('footer');
    }
    
    public function publicacion() {
        $url = $this->helper->getUrl();
        $id = $url[2];

        $datosMeta = $this->helper->getDatosMetaPublicacion($id, 'noticia');
        $this->view->contenido = $this->model->getDatosPublicacion($id);
        $this->view->ultimasNoticias = $this->helper->ultimosPost('noticia',3,6);
        $this->view->title = SITE_TITLE . $datosMeta['titulo'];
        $this->view->description = $datosMeta['contenido'];
        $this->view->render('header');
        $this->view->render('rrhh/post');
        $this->view->render('footer');
    }

}
