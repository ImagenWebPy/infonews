<?php

class Admin_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function listadoDTContenidos() {
        $sql = $this->db->select("SELECT n.id,
                                        n.titulo,
                                        c.descripcion as categoria,
                                        n.fecha_visible,
                                        n.destacado,
                                        n.orden,
                                        n.estado
                                FROM noticia n
                                LEFT JOIN categoria c on c.id = n.id_categoria
                                ORDER BY id DESC");
        $datos = array();
        foreach ($sql as $item) {
            $id = $item['id'];
            if ($item['estado'] == 1) {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="1"><span class="label label-success">Activo</span></a>';
            } else {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
            }
            $btnEditar = '<a class="editDTContenido pointer btn-xs" data-id="' . $id . '"><i class="fa fa-edit"></i> Editar </a>';
            array_push($datos, array(
                "DT_RowId" => "contenido_$id",
                'id' => $item['id'],
                'titulo' => utf8_encode($item['titulo']),
                'categoria' => utf8_encode($item['categoria']),
                'destacado' => (!empty($item['destacado'])) ? 'Sí' : '-',
                'orden' => (!empty($item['orden'])) ? $item['orden'] : '-',
                'fecha' => date('d-m-Y', strtotime($item['fecha_visible'])),
                'estado' => $estado,
                'accion' => $btnEditar
            ));
        }
        $json = '{"data": ' . json_encode($datos) . '}';
        return $json;
    }

    public function modifcarEstadoDetalle($datos) {
        $id = $datos['id'];
        $estado = $datos['estado'];
        #Actualizamos el estado de acuerdo al valor actual
        if ($estado == 1)
            $newEstado = 0;
        else
            $newEstado = 1;
        $update = array(
            'estado' => $newEstado
        );
        $this->db->update('noticia', $update, "id = $id");
        #retornamos la fila
        $sql = $this->db->select("SELECT n.id,
                                        n.titulo,
                                        c.descripcion as categoria,
                                        n.fecha_visible,
                                        n.destacado,
                                        n.orden,
                                        n.estado
                                FROM noticia n
                                LEFT JOIN categoria c on c.id = n.id_categoria
                                where n.id = $id");
        if ($sql[0]['estado'] == 1) {
            $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="1"><span class="label label-success">Activo</span></a>';
        } else {
            $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
        }
        if (!empty($sql[0]['destacado'])) {
            $destacado = 'Sí';
        } else {
            $destacado = '-';
        }
        if (!empty($sql[0]['orden'])) {
            $orden = $sql[0]['orden'];
        } else {
            $orden = '-';
        }
        $btnEditar = '<a class="editDTContenido pointer btn-xs" data-id="' . $id . '"><i class="fa fa-edit"></i> Editar </a>';
        $fila = '<td>' . $id . '</td>
                <td>' . utf8_encode($sql[0]['titulo']) . '</td>
                <td>' . utf8_encode($sql[0]['categoria']) . '</td>
                <td>' . $destacado . '</td>
                <td>' . $orden . '</td>
                <td>' . date('d-m-Y', strtotime($sql[0]['fecha_visible'])) . '</td>
                <td>' . $estado . '</td>
                <td>' . $btnEditar . '</td>';
        $data = array(
            'id' => $id,
            'content' => $fila
        );
        return $data;
    }

    public function editarDTContenido($data) {
        $id = $data['id'];
        $sql = $this->db->select("SELECT n.id,
                                        c.id as id_categoria,
                                        c.descripcion as categoria,
                                        m.id as id_marca,
                                        m.descripcion as marca,
                                        n.titulo,
                                        n.contenido,
                                        n.img,
                                        n.tag,
                                        n.video,
                                        n.fecha_visible,
                                        n.destacado,
                                        n.orden,
                                        n.estado
                                FROM noticia n
                                LEFT JOIN categoria c on c.id = n.id_categoria
                                LEFT JOIN marca m on m.id = n.id_marca
                                where n.id = $id");
        switch ($sql[0]['id_categoria']) {
            case 1: #Marca
                if (($sql[0]['orden'] >= 1) && ($sql[0]['orden'] <= 4))
                    $carpeta = 'slider';
                else
                    $carpeta = 'marca';
                break;
            case 2:
                $carpeta = 'variedad';
                break;
            case 3:
                $carpeta = 'rrhh';
                break;
        }
        $mostrarNoticia = ($sql[0]['estado'] == 1) ? 'checked' : '';
        $destacarNoticia = (!empty($sql[0]['destacado'])) ? 'checked' : '';
        $sqlCategoria = $this->db->select("select id, descripcion from categoria where estado = 1 ORDER BY descripcion ASC");
        $sqlMarca = $this->db->select("select id, descripcion from marca where estado = 1 ORDER BY descripcion ASC");
        $form = '
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Modificar Datos</h3>
                    </div>
                    <div class="row">
                        <form role="form" id="frmEditarContenido" method="POST">
                            <input type="hidden" name="contenido[id]" value="' . utf8_encode($sql[0]['id']) . '">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Categoría</label>
                                    <select class="form-control" name="contenido[categoria]" required>
                                        <option value="">Seleccione una Categoria</option>';
        foreach ($sqlCategoria as $item) {
            $selected = ($item['id'] == $sql[0]['id_categoria']) ? 'selected' : '';
            $form .= '                   <option value="' . $item['id'] . '" ' . $selected . '>' . utf8_encode($item['descripcion']) . '</option>';
        }
        $form .= '                   </select>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="contenido[mostrar]" ' . $mostrarNoticia . '>
                                            Mostrar
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="contenido[destacado]" ' . $destacarNoticia . '>
                                            Destacar
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Marca</label>
                                    <select class="form-control" name="contenido[marca]">
                                        <option value="">Seleccione una Marca</option>';
        foreach ($sqlMarca as $item) {
            $selected = ($item['id'] == $sql[0]['id_marca']) ? 'selected' : '';
            $form .= '                  <option value="' . $item['id'] . '" ' . $selected . '>' . utf8_encode($item['descripcion']) . '</option>';
        }
        $form .= '                      </select>
                                </div>
                                <div class="form-group">
                                    <label>Orden</label><span class="help-block" style="display: initial; font-size:12px;">(Completar solo si el campo Destacar ese encuentra marcado)</span>
                                    <input type="numer" name="contenido[orden]" class="form-control" placeholder="#" value="' . $sql[0]['orden'] . '">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Título</label>
                                    <input type="text" name="contenido[titulo]" class="form-control" placeholder="Tags" value="' . utf8_encode($sql[0]['titulo']) . '">
                                </div>
                                <div class="form-group">
                                    <label>Contenido</label>
                                    <textarea name="contenido[contenido]" class="form-control" rows="10" cols="80">
                                        ' . utf8_encode($sql[0]['contenido']) . '
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label>Fecha Publicación:</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" name="contenido[fecha_visible]" class="form-control pull-right fechaVisibleContenido" value="' . date('d-m-Y', strtotime($sql[0]['fecha_visible'])) . '">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <label>Tags</label><span> Ingrese las palabras separadas por comas(,)</span>
                                    <input type="text" name="contenido[tag]" class="form-control tags" placeholder="Tags" value="' . utf8_encode($sql[0]['tag']) . '">
                                </div>
                                <button type="submit" class="btn btn-block btn-primary btn-lg btnSubmitEditForm">Guardar Cambios</button>
                                <hr>
                                <div class="form-group">
                                    <label>Imagen Principal</label>
                                    <div class="html5fileupload fileImagen" data-url="' . URL . 'admin/uploadImgNoticia" data-valid-extensions="JPG,JPEG,jpg,png,jpeg,gif,PNG,bmp,BMP" style="width: 100%;">
                                        <input type="file" name="file_archivo" />
                                    </div>
                                    <script>
                                        $(".html5fileupload.fileImagen").html5fileupload({
                                            data:{id:' . $id . ', carpeta: "' . $carpeta . '"},
                                            onAfterStartSuccess: function(response) {
                                                $("#imgNoticia" + response.id).html(response.content);
                                            }
                                        });
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label>Imagenes</label>
                                    <div class="html5fileupload fileImagenes" data-url="' . URL . 'admin/uploadImagenesNoticia" data-multiple="true" data-valid-extensions="JPG,JPEG,jpg,png,jpeg,gif,PNG,bmp,BMP" style="width: 100%;">
                                        <input type="file" name="file_archivo" />
                                    </div>
                                    <script>
                                        $(".html5fileupload.fileImagenes").html5fileupload({
                                            data:{id:' . $id . ', carpeta: "' . $carpeta . '"},
                                            onAfterStartSuccess: function(response) {
                                                $("#imgNoticia" + response.id).html(response.content);
                                            }
                                        });
                                    </script>
                                </div>
                                <div class col-md-12 id="imgNoticia' . $id . '">
                                </div>
                                <div class="form-group">
                                    <label>Video</label>
                                    <div class="html5fileupload fileVideo" data-url="' . URL . 'admin/uploadVideoNoticia" data-valid-extensions="mp4,avi,mpg,mov" style="width: 100%;">
                                        <input type="file" name="file_archivo" />
                                    </div>
                                    <script>
                                        $(".html5fileupload.fileVideo").html5fileupload({
                                            data:{id:' . $id . '},
                                            onAfterStartSuccess: function(response) {
                                                $("#imgNoticia" + response.id).html(response.content);
                                            }
                                        });
                                    </script>
                                </div>
                                <div class col-md-12 id="videoNoticia' . $id . '">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <script>
                    $(function() {
                        //Date picker
                        $(".fechaVisibleContenido").datepicker({
                            autoclose: true,
                            format: "dd-mm-yyyy"
                        });
                        CKEDITOR.replace("contenido[contenido]");
                        $(".tags").tagsInput();
                    });
                </script>
                ';
        $datos = array(
            'titulo' => utf8_encode($sql[0]['categoria']) . ' - ' . utf8_encode($sql[0]['titulo']),
            'contenido' => $form
        );
        return json_encode($datos);
    }

    public function editarContenido($data) {
        $id = $data['id'];
        $destacado = NULL;
        if ($data['destacado']) {
            switch ($data['id_categoria']) {
                case 1: #Marca
                    if (($data['orden'] >= 1) && ($data['orden'] <= 4))
                        $destacado = 'PRINCIPAL';
                    else
                        $destacado = 'MARCAS';
                    break;
                case 2:
                    $destacado = 'VARIOS';
                    break;
                case 3:
                    $destacado = 'RRHH';
                    break;
                case 4:
                    $destacado = 'VIDEO';
                    break;
            }
        }
        $estado = 1;
        if (empty($data['estado'])) {
            $estado = 0;
        }
        $marca = (!empty($data['id_marca'])) ? $data['id_marca'] : NULL;
        $tag = (!empty($data['tag'])) ? utf8_decode($data['tag']) : NULL;
        $orden = (!empty($data['orden'])) ? utf8_decode($data['orden']) : NULL;
        $contenido = (!empty($data['contenido'])) ? utf8_decode($data['contenido']) : NULL;
        $update = array(
            'id_categoria' => $data['id_categoria'],
            'id_marca' => $marca,
            'titulo' => utf8_decode($data['titulo']),
            'contenido' => $contenido,
            'tag' => $tag,
            'fecha_visible' => date('Y-m-d', strtotime($data['fecha_visible'])),
            'destacado' => $destacado,
            'orden' => $orden,
            'estado' => $estado
        );
        $db = $this->db->update('noticia', $update, "id = $id");
        $sql = $this->db->select("SELECT n.id,
                                        n.titulo,
                                        c.descripcion as categoria,
                                        n.fecha_visible,
                                        n.destacado,
                                        n.orden,
                                        n.estado
                                FROM noticia n
                                LEFT JOIN categoria c on c.id = n.id_categoria
                                where n.id = $id");
        if ($sql[0]['estado'] == 1) {
            $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="1"><span class="label label-success">Activo</span></a>';
        } else {
            $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
        }
        if (!empty($sql[0]['destacado'])) {
            $destacado = 'Sí';
        } else {
            $destacado = '-';
        }
        if (!empty($sql[0]['orden'])) {
            $orden = $sql[0]['orden'];
        } else {
            $orden = '-';
        }
        $btnEditar = '<a class="editDTContenido pointer btn-xs" data-id="' . $id . '"><i class="fa fa-edit"></i> Editar </a>';
        $fila = '<td>' . $id . '</td>
                <td>' . utf8_encode($sql[0]['titulo']) . '</td>
                <td>' . utf8_encode($sql[0]['categoria']) . '</td>
                <td>' . $destacado . '</td>
                <td>' . $orden . '</td>
                <td>' . date('d-m-Y', strtotime($sql[0]['fecha_visible'])) . '</td>
                <td>' . $estado . '</td>
                <td>' . $btnEditar . '</td>';
        $datos = array(
            'id' => $id,
            'content' => $fila
        );
        return $datos;
    }

    public function unlinkActualImg($idPost, $carpeta, $galeria = FALSE) {
        $dir = 'public/img/' . $carpeta . '/';
        $sql = '';
        if ($galeria = FALSE) {
            $sql = $this->db->select("select img from noticia where id = $idPost");
            unlink($dir . $sql[0]['img']);
        }
    }

}
