<?php

class Promocion_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function listadoPromociones() {
        $sql = $this->db->select("select id, descripcion, img from marca where estado = 1 ORDER BY orden ASC");
        return $sql;
    }

    public function getDatosPromocion($id) {
        $sql = $this->db->select("SELECT m.descripcion as marca,
                                        p.img
                                FROM promocion p
                                LEFT JOIN marca m on m.id = p.id_marca
                                where p.id_marca = $id
                                and p.estado = 1");
        return $sql;
    }

}
