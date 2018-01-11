<?php

class Busqueda_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function listado($pagina) {
        if (!empty($pagina)) {
            $page = $pagina;
        } else {
            $page = 1;
        }
        $setLimit = CANT_REG;
        $pageLimit = ($setLimit * $page) - $setLimit;
        $busqueda = $_SESSION['BUSQUEDA'];
        $sqlNoticia = '';
        $condicion = "";
        if (!empty($busqueda)) {
            $condicion = "from noticia n
                                LEFT JOIN marca m on m.id = n.id_marca
                                where n.estado = 1
                                and n.tag like '%$busqueda%'";
            $sqlNoticia = $this->db->select("SELECT n.id,
                                        n.titulo,
                                        SUBSTRING(n.contenido,1,240) as contenido,
                                        n.img,
                                        m.descripcion as marca,
                                        c.descripcion as categoria
                                from noticia n
                                LEFT JOIN marca m on m.id = n.id_marca
                                LEFT JOIN categoria c on c.id = n.id_categoria
                                where n.estado = 1
                                and n.tag like '%$busqueda%'
                                ORDER BY n.fecha_visible DESC
                                LIMIT $pageLimit, $setLimit");
        }
        $data = array(
            'listado' => $sqlNoticia,
            'paginador' => $this->helper->mostrarPaginador($setLimit, $page, 'noticia', 'busqueda/listado', $condicion)
        );
        return $data;
    }

}
