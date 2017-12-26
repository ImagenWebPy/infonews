<?php

class Promocion_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function listadoPromociones($pagina) {
        if (!empty($pagina)) {
            $page = $pagina;
        } else {
            $page = 1;
        }
        $setLimit = CANT_REG;
        $pageLimit = ($setLimit * $page) - $setLimit;
        $sql = $this->db->select("SELECT p.id,
                                        p.titulo,
                                        p.contenido,
                                        p.img,
                                        m.descripcion AS marca
                                FROM promocion p
                                LEFT JOIN marca m ON m.id = p.id_marca
                                WHERE p.estado = 1
                                ORDER BY p.fecha_publicacion DESC
                                LIMIT $pageLimit, $setLimit");
        if (empty($marca)) {
            $condicion = "from promocion p
                        LEFT JOIN marca m ON m.id = p.id_marca
                        WHERE p.estado = 1";
        }
        $data = array(
            'listado' => $sql,
            'paginador' => $this->helper->mostrarPaginador($setLimit, $page, 'promocion', 'promocion/listado', $condicion)
        );
        return $data;
    }

    public function getDatosPromocion($id) {
        $sql = $this->db->select("SELECT p.id,
                                        p.titulo,
                                        p.contenido,
                                        p.img,
                                        m.descripcion AS marca,
                                        p.fecha_publicacion
                                FROM promocion p
                                LEFT JOIN marca m on m.id = p.id_marca
                                where p.id = $id");
        return $sql[0];
    }

}
