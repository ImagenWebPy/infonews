<?php

class Rrhh_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function listadoRRHH($pagina) {
        if (!empty($pagina)) {
            $page = $pagina;
        } else {
            $page = 1;
        }
        $setLimit = CANT_REG;
        $pageLimit = ($setLimit * $page) - $setLimit;
        $sql = $this->db->select("SELECT n.id,
                                        n.titulo,
                                        SUBSTRING(n.contenido,1,240) as contenido,
                                        n.img,
                                        m.descripcion as marca
                                from noticia n
                                LEFT JOIN marca m on m.id = n.id_marca
                                where n.estado = 1
                                and n.id_categoria = 3
                                ORDER BY n.fecha_visible DESC
                                LIMIT $pageLimit, $setLimit");
        $condicion = "from noticia n
                    LEFT JOIN marca m on m.id = n.id_marca
                    where n.estado = 1
                    and n.id_categoria = 3";
        $data = array(
            'listado' => $sql,
            'paginador' => $this->helper->mostrarPaginador($setLimit, $page, 'noticia', 'rrhh/listado', $condicion)
        );
        return $data;
    }

    public function getDatosPublicacion($id) {
        $sql = $this->db->select("select titulo, contenido, img, tag, fecha_visible from noticia where id = $id");
        return $sql[0];
    }

}
