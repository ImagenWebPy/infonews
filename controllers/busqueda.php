<?php

class Busqueda extends Controller {

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
        $busqueda = $this->helper->cleanInput($_POST['texto']);
        session::set('BUSQUEDA', $busqueda);
        $this->view->listado = $this->model->listado($pagina);

        $this->view->title = SITE_TITLE . 'Busqueda';
        $this->view->description = 'Resultados de la busqueda';
        $this->view->render('header');
        $this->view->render('busqueda/index');
        $this->view->render('footer');
    }

}
