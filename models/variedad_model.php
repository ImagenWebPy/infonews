<?php

class Variedad_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function listadoVariedades($pagina) {
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
                                        n.img
                                from noticia n
                                where n.estado = 1
                                and n.id_categoria = 2
                                ORDER BY n.fecha_visible DESC
                                LIMIT $pageLimit, $setLimit");
        if (empty($marca)) {
            $condicion = "from noticia n
                        where n.estado = 1
                        and n.id_categoria = 2";
        }
        $data = array(
            'listado' => $sql,
            'paginador' => $this->helper->mostrarPaginador($setLimit, $page, 'noticia', 'noticia/listado', $condicion)
        );
        return $data;
    }
    
     public function getDatosVariedad($id) {
        $sql = $this->db->select("select id, titulo, contenido, img, tag, fecha_visible from noticia where id = $id");
        return $sql[0];
    }

}
