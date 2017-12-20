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
        $form = '
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Modificar Datos</h3>
                    </div>
                    <div class="row">
                        <form role="form" id="frmEditarContenido" method="POST">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Categoría</label>
                                    <select class="form-control" name="contenido[categoria]" required>
                                        <option value="">Seleccione una Categoria</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Marca</label>
                                    <select class="form-control" name="contenido[marca]">
                                        <option value="">Seleccione una Marca</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Título</label>
                                    <input type="text" name="contenido[titulo]" class="form-control tags" placeholder="Tags" value="">
                                </div>
                                <div class="form-group">
                                    <label>Contenido</label>
                                    <textarea name="contenido[contenido]" rows="10" cols="80">
                                        
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label>Tags</label><span> Ingrese las palabras separadas por comas(,)</span>
                                    <input type="text" name="contenido[tag]" class="form-control tags" placeholder="Tags" value="">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                ';
        $datos = array(
            'titulo' => utf8_encode($sql[0]['categoria']) . ' - ' . utf8_encode($sql[0]['titulo']),
            'contenido' => $form
        );
        return json_encode($datos);
    }

}
