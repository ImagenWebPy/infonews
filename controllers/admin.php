<?php

class Admin extends Controller {

    function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }

    public function index() {
        $this->view->title = 'Dashboard';
        $this->view->render('admin/header');
        $this->view->render('admin/index/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function contenido() {
        $this->view->public_css = array("admin/plugins/datatables/dataTables.bootstrap.css", "admin/plugins/html5fileupload/html5fileupload.css", "admin/plugins/datepicker/datepicker3.css", "admin/plugins/jquery.tagsinput/jquery.tagsinput.css");
        $this->view->public_js = array("admin/plugins/datatables/jquery.dataTables.min.js", "admin/plugins/datatables/dataTables.bootstrap.min.js", "admin/plugins/html5fileupload/html5fileupload.min.js", "admin/plugins/datepicker/bootstrap-datepicker.js", "admin/plugins/jquery.tagsinput/jquery.tagsinput.js", "admin/plugins/ckeditor/ckeditor.js");
        $this->view->title = 'Contenido';
        $this->view->render('admin/header');
        $this->view->render('admin/contenido/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function listadoDTContenidos() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->listadoDTContenidos();
        echo $data;
    }

    public function cambiarEstadoNoticias() {
        header('Content-type: application/json; charset=utf-8');
        $datos = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'estado' => (!empty($_POST['estado'])) ? $this->helper->cleanInput($_POST['estado']) : 0,
        );
        $data = $this->model->modifcarEstadoDetalle($datos);
        echo json_encode($data);
    }

    public function editarDTContenido() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->editarDTContenido($data);
        echo $datos;
    }

    public function editarContenido() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['contenido']['id']),
            'id_categoria' => $this->helper->cleanInput($_POST['contenido']['categoria']),
            'id_marca' => $this->helper->cleanInput($_POST['contenido']['marca']),
            'titulo' => $this->helper->cleanInput($_POST['contenido']['titulo']),
            'contenido' => $this->helper->cleanInput($_POST['contenido']['contenido']),
            'tag' => $this->helper->cleanInput($_POST['contenido']['tag']),
            'fecha_visible' => $this->helper->cleanInput($_POST['contenido']['fecha_visible']),
            'orden' => $this->helper->cleanInput($_POST['contenido']['orden']),
            'destacado' => (!empty($_POST['contenido']['destacado'])) ? $_POST['contenido']['destacado'] : 0,
            'estado' => (!empty($_POST['contenido']['mostrar'])) ? $_POST['contenido']['mostrar'] : 0
        );
        $datos = $this->model->editarContenido($data);
        echo json_encode($datos);
    }

    public function uploadImgNoticia() {
        if (!empty($_POST)) {
            $idPost = $_POST['data']['id'];
            $carpeta = $_POST['data']['carpeta'];
            $this->model->unlinkActualImg($idPost, $carpeta);
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/img/' . $carpeta . '/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($idPost . '_' . $name);
            $filename = $filename . '.' . $extension;
            //$filename				= $file.'.'.substr(sha1(time()),0,6).'.'.$extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #############
            #SE REDIMENSIONA LA IMAGEN
            #############
            # ruta de la imagen a redimensionar 
            $imagen = $serverdir . $filename;
            # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
            $imagen_final = $filename;
//            if ($slider == TRUE) {
//                switch ($posicion) {
//                    case 1:
//                        $ancho = 574;
//                        $alto = 443;
//                        break;
//                    case 2:
//                        $ancho = 274;
//                        $alto = 442;
//                        break;
//                    case 3:
//                        $ancho = 374;
//                        $alto = 215;
//                        break;
//                    case 4:
//                        $ancho = 374;
//                        $alto = 215;
//                        break;
//                }
//            } else {
                $ancho = 800;
                $alto = 400;
//            }
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'id' => $idPost,
                'img' => $filename
            );
            $response = $this->model->uploadImgNoticia($data,$carpeta);
            echo json_encode($response);
            //echo json_encode(array('result'=>true));
        } else {
            $filename = basename($_SERVER['QUERY_STRING']);
            $file_url = '/public/archivos/' . $filename;
            header('Content-Type: 				application/octet-stream');
            header("Content-Transfer-Encoding: 	Binary");
            header("Content-disposition: 		attachment; filename=\"" . basename($file_url) . "\"");
            readfile($file_url);
            exit();
        }
    }

}
