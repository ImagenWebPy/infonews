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

    public function medio() {
        $this->view->public_css = array("admin/plugins/datatables/dataTables.bootstrap.css", "admin/plugins/html5fileupload/html5fileupload.css");
        $this->view->public_js = array("admin/plugins/datatables/jquery.dataTables.min.js", "admin/plugins/datatables/dataTables.bootstrap.min.js");
        $this->view->title = 'Contenido';
        $this->view->render('admin/header');
        $this->view->render('admin/medio/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function promocion() {
        $this->view->public_css = array("admin/plugins/datatables/dataTables.bootstrap.css", "admin/plugins/html5fileupload/html5fileupload.css", "admin/plugins/datepicker/datepicker3.css", "admin/plugins/jquery.tagsinput/jquery.tagsinput.css");
        $this->view->public_js = array("admin/plugins/datatables/jquery.dataTables.min.js", "admin/plugins/datatables/dataTables.bootstrap.min.js", "admin/plugins/html5fileupload/html5fileupload.min.js", "admin/plugins/datepicker/bootstrap-datepicker.js", "admin/plugins/jquery.tagsinput/jquery.tagsinput.js", "admin/plugins/ckeditor/ckeditor.js");
        $this->view->title = 'Promociones';
        $this->view->render('admin/header');
        $this->view->render('admin/promocion/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function clipping() {
        $this->view->public_css = array("admin/plugins/datatables/dataTables.bootstrap.css", "admin/plugins/html5fileupload/html5fileupload.css", "admin/plugins/datepicker/datepicker3.css", "admin/plugins/jquery.tagsinput/jquery.tagsinput.css");
        $this->view->public_js = array("admin/plugins/datatables/jquery.dataTables.min.js", "admin/plugins/datatables/dataTables.bootstrap.min.js", "admin/plugins/html5fileupload/html5fileupload.min.js", "admin/plugins/datepicker/bootstrap-datepicker.js", "admin/plugins/jquery.tagsinput/jquery.tagsinput.js", "admin/plugins/ckeditor/ckeditor.js");
        $this->view->title = 'Clipping de Medios';
        $this->view->render('admin/header');
        $this->view->render('admin/clipping/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function clipping_revista() {
        $this->view->public_css = array("admin/plugins/datatables/dataTables.bootstrap.css", "admin/plugins/html5fileupload/html5fileupload.css", "admin/plugins/datepicker/datepicker3.css", "admin/plugins/jquery.tagsinput/jquery.tagsinput.css");
        $this->view->public_js = array("admin/plugins/datatables/jquery.dataTables.min.js", "admin/plugins/datatables/dataTables.bootstrap.min.js", "admin/plugins/html5fileupload/html5fileupload.min.js", "admin/plugins/datepicker/bootstrap-datepicker.js", "admin/plugins/jquery.tagsinput/jquery.tagsinput.js", "admin/plugins/ckeditor/ckeditor.js", "admin/plugins/datepicker/locales/bootstrap-datepicker.es.js");
        $this->view->title = 'Clipping de Medios - Revistas';
        $this->view->render('admin/header');
        $this->view->render('admin/clipping/revista');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function listadoDTContenidos() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->listadoDTContenidos();
        echo $data;
    }

    public function listadoDTMedios() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->listadoDTMedios();
        echo $data;
    }

    public function listadoDTPromociones() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->listadoDTPromociones();
        echo $data;
    }

    public function listadoDTClipping() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->listadoDTClipping();
        echo $data;
    }

    public function listadoDTClippingRevista() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->listadoDTClippingRevista();
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

    public function cambiarEstadoMedios() {
        header('Content-type: application/json; charset=utf-8');
        $datos = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'estado' => (!empty($_POST['estado'])) ? $this->helper->cleanInput($_POST['estado']) : 0,
        );
        $data = $this->model->cambiarEstadoMedios($datos);
        echo json_encode($data);
    }

    public function cambiarEstadoPromocion() {
        header('Content-type: application/json; charset=utf-8');
        $datos = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'estado' => (!empty($_POST['estado'])) ? $this->helper->cleanInput($_POST['estado']) : 0,
        );
        $data = $this->model->modifcarEstadoPromocion($datos);
        echo json_encode($data);
    }

    public function cambiarEstadoClipping() {
        header('Content-type: application/json; charset=utf-8');
        $datos = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'estado' => (!empty($_POST['estado'])) ? $this->helper->cleanInput($_POST['estado']) : 0,
        );
        $data = $this->model->modifcarEstadoClipping($datos);
        echo json_encode($data);
    }

    public function cambiarEstadoClippingRevista() {
        header('Content-type: application/json; charset=utf-8');
        $datos = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'estado' => (!empty($_POST['estado'])) ? $this->helper->cleanInput($_POST['estado']) : 0,
        );
        $data = $this->model->cambiarEstadoClippingRevista($datos);
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

    public function editarDTMedio() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->editarDTMedio($data);
        echo $datos;
    }

    public function editarDTPromocion() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->editarDTPromocion($data);
        echo $datos;
    }

    public function editarDTClipping() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->editarDTClipping($data);
        echo $datos;
    }

    public function editarDTClippingRevista() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->editarDTClippingRevista($data);
        echo $datos;
    }

    public function editarContenido() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['contenido']['id']),
            'id_categoria' => $this->helper->cleanInput($_POST['contenido']['categoria']),
            'id_marca' => $this->helper->cleanInput($_POST['contenido']['marca']),
            'titulo' => $this->helper->cleanInput($_POST['contenido']['titulo']),
            'contenido' => $_POST['contenido']['contenido'],
            'tag' => $this->helper->cleanInput($_POST['contenido']['tag']),
            'fecha_visible' => $this->helper->cleanInput($_POST['contenido']['fecha_visible']),
            'orden' => $this->helper->cleanInput($_POST['contenido']['orden']),
            'destacado' => (!empty($_POST['contenido']['destacado'])) ? $_POST['contenido']['destacado'] : 0,
            'estado' => (!empty($_POST['contenido']['mostrar'])) ? $_POST['contenido']['mostrar'] : 0
        );
        $datos = $this->model->editarContenido($data);
        echo json_encode($datos);
    }

    public function editarMedio() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['medio']['id']),
            'id_tipo_medio' => $this->helper->cleanInput($_POST['medio']['id_tipo_medio']),
            'descripcion' => $this->helper->cleanInput($_POST['medio']['descripcion']),
            'estado' => (!empty($_POST['medio']['mostrar'])) ? $_POST['medio']['mostrar'] : 0
        );
        $datos = $this->model->editarMedio($data);
        echo json_encode($datos);
    }

    public function editarClipping() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['clipping']['id']),
            'id_medio' => $this->helper->cleanInput($_POST['clipping']['medio']),
            'id_seccion_medio' => $this->helper->cleanInput($_POST['clipping']['seccion_medio']),
            'pagina' => $this->helper->cleanInput($_POST['clipping']['pagina']),
            'fecha_visible' => $this->helper->cleanInput($_POST['clipping']['fecha_visible']),
            'tipo' => $this->helper->cleanInput($_POST['clipping']['tipo']),
            'estado' => (!empty($_POST['clipping']['mostrar'])) ? $_POST['clipping']['mostrar'] : 0
        );
        $datos = $this->model->editarClipping($data);
        echo json_encode($datos);
    }

    public function editarClippingRevista() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['clippingRevista']['id']),
            'id_medio' => $this->helper->cleanInput($_POST['clippingRevista']['medio']),
            'id_marca' => $this->helper->cleanInput($_POST['clippingRevista']['marca']),
            'pagina' => $this->helper->cleanInput($_POST['clippingRevista']['pagina']),
            'fecha_visible' => $this->helper->cleanInput($_POST['clippingRevista']['fecha_visible']),
            'estado' => (!empty($_POST['clippingRevista']['mostrar'])) ? $_POST['clippingRevista']['mostrar'] : 0
        );
        $datos = $this->model->editarClippingRevista($data);
        echo json_encode($datos);
    }

    public function editarPromocion() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['promocion']['id']),
            'id_marca' => $this->helper->cleanInput($_POST['promocion']['marca']),
            'titulo' => $this->helper->cleanInput($_POST['promocion']['titulo']),
            'contenido' => $_POST['promocion']['contenido'],
            'tag' => $this->helper->cleanInput($_POST['promocion']['tag']),
            'orden' => $this->helper->cleanInput($_POST['promocion']['orden']),
            'destacado' => (!empty($_POST['promocion']['destacado'])) ? $_POST['promocion']['destacado'] : 0,
            'estado' => (!empty($_POST['promocion']['mostrar'])) ? $_POST['promocion']['mostrar'] : 0
        );
        $datos = $this->model->editarPromocion($data);
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
            $response = $this->model->uploadImgNoticia($data, $carpeta);
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

    public function uploadImgClipping() {
        if (!empty($_POST)) {
            $idPost = $_POST['data']['id'];
            $this->model->unlinkActualImgClipping($idPost);
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/img/clipping/';
            $dirThumb = 'public/img/clipping/thumb/';
            $serverdir = $dir;
            $serverdirThumb = $dirThumb;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($idPost . '_' . $name);
            $filename_thumb = $this->helper->cleanUrl($idPost . '_' . $name);
            $filename = $filename . '.' . $extension;
            $filename_thumb = $filename_thumb . '_thumb.' . $extension;
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
            $imagen_final_thumb = $filename_thumb;
            #redimensionamos la imagen original
            $ancho = 1280;
            $alto = 720;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            #creamos la miniatura
            $ancho = 420;
            $alto = 420;
            $this->helper->redimensionar($imagen, $imagen_final_thumb, $ancho, $alto, $serverdirThumb);
            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'id' => $idPost,
                'img' => $filename,
                'img_thumb' => $filename_thumb
            );
            $response = $this->model->uploadImgClipping($data);
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

    public function uploadImgTapaClippingRevista() {
        if (!empty($_POST)) {
            $idPost = $_POST['data']['id'];
            $this->model->unlinkActualImgClippingRevista($idPost, 'tapa');
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/img/clipping_revistas/';
            $dirThumb = 'public/img/clipping_revistas/thumb/';
            $serverdir = $dir;
            $serverdirThumb = $dirThumb;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($idPost . '_' . $name);
            $filename_thumb = $this->helper->cleanUrl($idPost . '_' . $name);
            $filename = $filename . '.' . $extension;
            $filename_thumb = $filename_thumb . '_thumb.' . $extension;
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
            $imagen_final_thumb = $filename_thumb;
            #redimensionamos la imagen original
            $ancho = 1280;
            $alto = 720;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            #creamos la miniatura
            $ancho = 420;
            $alto = 420;
            $this->helper->redimensionar($imagen, $imagen_final_thumb, $ancho, $alto, $serverdirThumb);
            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'id' => $idPost,
                'img' => $filename,
                'img_thumb' => $filename_thumb
            );
            $response = $this->model->uploadImgClippingTapaRevista($data);
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

    public function uploadImgClippingRevista() {
        if (!empty($_POST)) {
            $idPost = $_POST['data']['id'];
            $this->model->unlinkActualImgClippingRevista($idPost, 'publicacion');
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/img/clipping_revistas/';
            $dirThumb = 'public/img/clipping_revistas/thumb/';
            $serverdir = $dir;
            $serverdirThumb = $dirThumb;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($idPost . '_' . $name);
            $filename_thumb = $this->helper->cleanUrl($idPost . '_' . $name);
            $filename = $filename . '.' . $extension;
            $filename_thumb = $filename_thumb . '_thumb.' . $extension;
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
            $imagen_final_thumb = $filename_thumb;
            #redimensionamos la imagen original
            $ancho = 1280;
            $alto = 720;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            #creamos la miniatura
            $ancho = 420;
            $alto = 420;
            $this->helper->redimensionar($imagen, $imagen_final_thumb, $ancho, $alto, $serverdirThumb);
            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'id' => $idPost,
                'img' => $filename,
                'img_thumb' => $filename_thumb
            );
            $response = $this->model->uploadImgClippingRevista($data);
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

    public function uploadImagenesNoticia() {
        if (!empty($_POST)) {
            $idPost = $_POST['data']['id'];

            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/img/galeria/';
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
            $ancho = 800;
            $alto = 400;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'id' => $idPost,
                'archivo' => $filename
            );
            $response = $this->model->uploadImagenesNoticia($data);
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

    public function eliminarGaleriaIMG() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->eliminarGaleriaIMG($data);
        echo json_encode($datos);
    }

    public function mostrarImgBtn() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->mostrarImgBtn($data);
        echo json_encode($datos);
    }

    public function uploadVideoNoticia() {
        if (!empty($_POST)) {
            $idPost = $_POST['data']['id'];
            $this->model->unlinkActualVideo($idPost);
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/videos/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($idPost . '_' . $name);
            $filename = $filename . '.' . $extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'id' => $idPost,
                'video' => $filename
            );
            $response = $this->model->uploadVideoNoticia($data);
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

    public function modalAgregarContenido() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->modalAgregarContenido();
        echo $datos;
    }

    public function modalAgregarMedio() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->modalAgregarMedio();
        echo $datos;
    }

    public function modalAgregarPromocion() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->modalAgregarPromocion();
        echo $datos;
    }

    public function modalAgregarClipping() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->modalAgregarClipping();
        echo $datos;
    }

    public function modalAgregarClippingRevista() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->modalAgregarClippingRevista();
        echo $datos;
    }

    public function frmAgregarContenido() {
        if (!empty($_POST)) {
            $id_categoria = $this->helper->cleanInput($_POST['contenido']['categoria']);
            $data = array(
                'id_categoria' => $id_categoria,
                'id_marca' => (!empty($_POST['contenido']['marca'])) ? $this->helper->cleanInput($_POST['contenido']['marca']) : NULL,
                'estado' => (!empty($_POST['contenido']['mostrar'])) ? $_POST['contenido']['mostrar'] : 0,
                'titulo' => $this->helper->cleanInput($_POST['contenido']['titulo']),
                'contenido' => $_POST['contenido']['contenido'],
                'fecha_visible' => $_POST['contenido']['fecha_visible'],
                'tag' => $this->helper->cleanInput($_POST['contenido']['tag'])
            );
            $idPost = $this->model->frmAgregarContenido($data);
            #IMAGENES
            if (!empty($_FILES['file_imagen']['name'])) {
                $error = false;
                switch ($id_categoria) {
                    case 1: #Marca
                        $carpeta = 'marcas';
                        break;
                    case 2:
                        $carpeta = 'variedad';
                        break;
                    case 3:
                        $carpeta = 'rrhh';
                        break;
                }
                $dir = 'public/img/' . $carpeta . '/';
                $serverdir = $dir;
                #IMAGENES
                $newname = $idPost . '_' . $_FILES['file_imagen']['name'];
                $fname = $this->helper->cleanUrl($newname);
                $contents = file_get_contents($_FILES['file_imagen']['tmp_name']);

                $handle = fopen($serverdir . $fname, 'w');
                fwrite($handle, $contents);
                fclose($handle);
                #############
                #SE REDIMENSIONA LA IMAGEN
                #############
                # ruta de la imagen a redimensionar 
                $imagen = $serverdir . $fname;
                # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
                $imagen_final = $fname;
                $ancho = 800;
                $alto = 400;
                $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
                #############
                $imagenes = array(
                    'id' => $idPost,
                    'imagenes' => $fname
                );
                $this->model->frmAddNoticiaImg($imagenes);
            }
            if (!empty($_FILES['file_galeria']['name'])) {
                $filename = array();
                $dir = 'public/img/galeria/';
                $serverdir = $dir;
                #IMAGENES
                $cantImagenes = count($_FILES['file_galeria']['name']) - 1;
                for ($i = 0; $i <= $cantImagenes; $i++) {
                    $newname = $idPost . '_' . $_FILES['file_galeria']['name'][$i];
                    $fname = $this->helper->cleanUrl($newname);

                    $contents = file_get_contents($_FILES['file_galeria']['tmp_name'][$i]);

                    $handle = fopen($serverdir . $fname, 'w');
                    fwrite($handle, $contents);
                    fclose($handle);
                    #############
                    #SE REDIMENSIONA LA IMAGEN
                    #############
                    # ruta de la imagen a redimensionar 
                    $imagen = $serverdir . $fname;
                    # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
                    $imagen_final = $fname;
                    $ancho = 463;
                    $alto = 350;
                    $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
                    #############
                    array_push($filename, $fname);
                }
                $imagenes = array(
                    'id' => $idPost,
                    'imagenes' => $filename
                );
                $this->model->frmAddNoticiaImgGaleria($imagenes);
            }
            if (!empty($_FILES['file_video']['name'])) {
                $error = false;
                $dir = 'public/videos/';
                $serverdir = $dir;
                #IMAGENES
                $newname = $idPost . '_' . $_FILES['file_video']['name'];
                $fname = $this->helper->cleanUrl($newname);
                $contents = file_get_contents($_FILES['file_video']['tmp_name']);

                $handle = fopen($serverdir . $fname, 'w');
                fwrite($handle, $contents);
                fclose($handle);
                #############
                $videos = array(
                    'id' => $idPost,
                    'video' => $fname
                );
                $this->model->frmAddNoticiaVideo($videos);
            }
            Session::set('message', array(
                'type' => 'success',
                'mensaje' => 'Se ha agregado correctamente el contenido'
            ));
            header('Location:' . URL . 'admin/contenido/');
        }
    }

    public function frmAgregarPromocion() {
        if (!empty($_POST)) {
            $data = array(
                'id_marca' => (!empty($_POST['promocion']['marca'])) ? $this->helper->cleanInput($_POST['promocion']['marca']) : NULL,
                'estado' => (!empty($_POST['promocion']['mostrar'])) ? $_POST['promocion']['mostrar'] : 0,
                'titulo' => $this->helper->cleanInput($_POST['promocion']['titulo']),
                'contenido' => $_POST['promocion']['contenido'],
                'tag' => $this->helper->cleanInput($_POST['promocion']['tag'])
            );
            $idPost = $this->model->frmAgregarPromocion($data);

            #IMAGENES
            if (!empty($_FILES['file_archivo'])) {
                $error = false;
                $dir = 'public/img/promociones/';
                $serverdir = $dir;
                #IMAGENES
                $newname = $idPost . '_' . $_FILES['file_archivo']['name'];
                $fname = $this->helper->cleanUrl($newname);
                $contents = file_get_contents($_FILES['file_archivo']['tmp_name']);

                $handle = fopen($serverdir . $fname, 'w');
                fwrite($handle, $contents);
                fclose($handle);
                #############
                #SE REDIMENSIONA LA IMAGEN
                #############
                # ruta de la imagen a redimensionar 
                $imagen = $serverdir . $fname;
                # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
                $imagen_final = $fname;
                $ancho = 1200;
                $alto = 500;
                $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
                #############
                $imagenes = array(
                    'id' => $idPost,
                    'imagenes' => $fname
                );
                $this->model->frmAddPromocionImg($imagenes);
            }
            Session::set('message', array(
                'type' => 'success',
                'mensaje' => 'Se ha agregado correctamente el contenido'
            ));
            header('Location:' . URL . 'admin/promocion/');
        }
    }

    public function frmAgregarMedio() {
        if (!empty($_POST)) {
            $data = array(
                'id_tipo_medio' => $this->helper->cleanInput($_POST['medio']['id_tipo_medio']),
                'descripcion' => $this->helper->cleanInput($_POST['medio']['descripcion']),
                'estado' => (!empty($_POST['medio']['mostrar'])) ? $_POST['medio']['mostrar'] : 0
            );
            $idPost = $this->model->frmAgregarMedio($data);
            Session::set('message', array(
                'type' => 'success',
                'mensaje' => 'Se ha agregado correctamente el contenido'
            ));
            header('Location:' . URL . 'admin/medio/');
        }
    }

    public function frmAgregarClipping() {
        if (!empty($_POST)) {
            $data = array(
                'id_medio' => (!empty($_POST['clipping']['medio'])) ? $this->helper->cleanInput($_POST['clipping']['medio']) : NULL,
                'id_seccion_medio' => (!empty($_POST['clipping']['seccion_medio'])) ? $this->helper->cleanInput($_POST['clipping']['seccion_medio']) : NULL,
                'estado' => (!empty($_POST['clipping']['mostrar'])) ? $_POST['clipping']['mostrar'] : 0,
                'pagina' => (!empty($_POST['clipping']['pagina'])) ? $this->helper->cleanInput($_POST['clipping']['pagina']) : NULL,
                'tipo' => (!empty($_POST['clipping']['tipo'])) ? $_POST['clipping']['tipo'] : NULL,
                'fecha_visible' => (!empty($_POST['clipping']['fecha_visible'])) ? $_POST['clipping']['fecha_visible'] : NULL
            );
            $idPost = $this->model->frmAgregarClipping($data);

            #IMAGENES
            if (!empty($_FILES['file_archivo'])) {
                $error = false;
                $dir = 'public/img/clipping/';
                $dirThumb = 'public/img/clipping/thumb/';
                $serverdir = $dir;
                $serverdirThumb = $dirThumb;
                #IMAGENES
                $newname = $idPost . '_' . $_FILES['file_archivo']['name'];
                $newnameThumb = $idPost . '_' . $_FILES['file_archivo']['name'];
                $fname = $this->helper->cleanUrl($newname);
                $fnameThumb = $this->helper->cleanUrl($newnameThumb);
                $fnameThumb = explode('.', $fnameThumb);
                $newNameThumb = $fnameThumb[0] . '_thumb.' . $fnameThumb[1];
                $contents = file_get_contents($_FILES['file_archivo']['tmp_name']);

                $handle = fopen($serverdir . $fname, 'w');
                fwrite($handle, $contents);
                fclose($handle);
                #############
                #SE REDIMENSIONA LA IMAGEN
                #############
                # ruta de la imagen a redimensionar 
                $imagen = $serverdir . $fname;
                # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
                $imagen_final = $fname;
                $imagen_final_thumb = $newNameThumb;
                $ancho = 1280;
                $alto = 720;
                $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
                #creamos la miniatura
                $ancho = 420;
                $alto = 420;
                $this->helper->redimensionar($imagen, $imagen_final_thumb, $ancho, $alto, $serverdirThumb);
                #############
                $imagenes = array(
                    'id' => $idPost,
                    'img' => $fname,
                    'img_thumb' => $imagen_final_thumb
                );
                $this->model->frmAddClippingImg($imagenes);
            }
            Session::set('message', array(
                'type' => 'success',
                'mensaje' => 'Se ha agregado correctamente el contenido'
            ));
            header('Location:' . URL . 'admin/clipping/');
        }
    }

    public function frmAgregarClippingRevista() {
        if (!empty($_POST)) {
            $data = array(
                'id_medio' => (!empty($_POST['clippingRevista']['medio'])) ? $this->helper->cleanInput($_POST['clippingRevista']['medio']) : NULL,
                'id_marca' => (!empty($_POST['clippingRevista']['marca'])) ? $this->helper->cleanInput($_POST['clippingRevista']['marca']) : NULL,
                'estado' => (!empty($_POST['clippingRevista']['mostrar'])) ? $_POST['clippingRevista']['mostrar'] : 0,
                'pagina' => (!empty($_POST['clippingRevista']['pagina'])) ? $this->helper->cleanInput($_POST['clippingRevista']['pagina']) : NULL,
                'fecha_visible' => (!empty($_POST['clippingRevista']['fecha_visible'])) ? $_POST['clippingRevista']['fecha_visible'] : NULL
            );
            $idPost = $this->model->frmAgregarClippingRevista($data);

            #IMAGEN TAPA
            if (!empty($_FILES['file_tapaRevista']['name'])) {
                $error = false;
                $dir = 'public/img/clipping_revistas/';
                $dirThumb = 'public/img/clipping_revistas/thumb/';
                $serverdir = $dir;
                $serverdirThumb = $dirThumb;
                #IMAGENES
                $newname = $idPost . '_' . $_FILES['file_tapaRevista']['name'];
                $newnameThumb = $idPost . '_' . $_FILES['file_tapaRevista']['name'];
                $fname = $this->helper->cleanUrl($newname);
                $fnameThumb = $this->helper->cleanUrl($newnameThumb);
                $fnameThumb = explode('.', $fnameThumb);
                $newNameThumb = $fnameThumb[0] . '_thumb.' . $fnameThumb[1];
                $contents = file_get_contents($_FILES['file_tapaRevista']['tmp_name']);

                $handle = fopen($serverdir . $fname, 'w');
                fwrite($handle, $contents);
                fclose($handle);
                #############
                #SE REDIMENSIONA LA IMAGEN
                #############
                # ruta de la imagen a redimensionar 
                $imagen = $serverdir . $fname;
                # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
                $imagen_final = $fname;
                $imagen_final_thumb = $newNameThumb;
                $ancho = 1280;
                $alto = 720;
                $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
                #creamos la miniatura
                $ancho = 420;
                $alto = 420;
                $this->helper->redimensionar($imagen, $imagen_final_thumb, $ancho, $alto, $serverdirThumb);
                #############
                $imagenes = array(
                    'id' => $idPost,
                    'img' => $fname,
                    'img_thumb' => $imagen_final_thumb
                );
                $this->model->frmAddClippingRevistaImg($imagenes, 'tapa');
            }
            #IMAGEN PUBLICACION
            if (!empty($_FILES['file_revista']['name'])) {
                $error = false;
                $dir = 'public/img/clipping_revistas/';
                $dirThumb = 'public/img/clipping_revistas/thumb/';
                $serverdir = $dir;
                $serverdirThumb = $dirThumb;
                #IMAGENES
                $newname = $idPost . '_' . $_FILES['file_revista']['name'];
                $newnameThumb = $idPost . '_' . $_FILES['file_revista']['name'];
                $fname = $this->helper->cleanUrl($newname);
                $fnameThumb = $this->helper->cleanUrl($newnameThumb);
                $fnameThumb = explode('.', $fnameThumb);
                $newNameThumb = $fnameThumb[0] . '_thumb.' . $fnameThumb[1];
                $contents = file_get_contents($_FILES['file_revista']['tmp_name']);

                $handle = fopen($serverdir . $fname, 'w');
                fwrite($handle, $contents);
                fclose($handle);
                #############
                #SE REDIMENSIONA LA IMAGEN
                #############
                # ruta de la imagen a redimensionar 
                $imagen = $serverdir . $fname;
                # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
                $imagen_final = $fname;
                $imagen_final_thumb = $newNameThumb;
                $ancho = 1280;
                $alto = 720;
                $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
                #creamos la miniatura
                $ancho = 420;
                $alto = 420;
                $this->helper->redimensionar($imagen, $imagen_final_thumb, $ancho, $alto, $serverdirThumb);
                #############
                $imagenes = array(
                    'id' => $idPost,
                    'img' => $fname,
                    'img_thumb' => $imagen_final_thumb
                );
                $this->model->frmAddClippingRevistaImg($imagenes, 'publicacion');
            }
            Session::set('message', array(
                'type' => 'success',
                'mensaje' => 'Se ha agregado correctamente el contenido'
            ));
            header('Location:' . URL . 'admin/clipping_revista/');
        }
    }

}
