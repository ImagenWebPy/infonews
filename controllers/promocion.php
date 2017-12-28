<?php

class Promocion extends Controller {

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

        $this->view->listado = $this->model->listadoPromociones();

        $this->view->title = SITE_TITLE . 'Promociones';
        $this->view->description = 'Listado de Promociones';
        $this->view->render('header');
        $this->view->render('promocion/index');
        $this->view->render('footer');
    }

    public function publicacion() {
        $url = $this->helper->getUrl();
        $id = $url[2];

        $this->view->contenido = $this->model->getDatosPromocion($id);
        $this->view->title = SITE_TITLE . ' Clasificados';
        $this->view->description = 'Clasificados';
        $this->view->render('header');
        $this->view->render('promocion/post');
        $this->view->render('footer');
    }

}
