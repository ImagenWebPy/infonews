<?php

class Clipping_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function filtrarClipping($datos) {
        $fecha = date('Y-m-d', strtotime($datos['fecha']));
        $sql = $this->db->select("SELECT m.descripcion as medio,
                                        sm.descripcion as seccion_medio,
                                        c.img,
                                        c.img_thumb,
                                        c.pagina,
                                        c.tipo
                                FROM clipping c
                                LEFT JOIN medio m on m.id = c.id_medio
                                LEFT JOIN seccion_medio sm on sm.id = c.id_seccion_medio
                                where c.estado = 1
                                and c.fecha_visible = '$fecha'");
        if (!empty($sql)) {
            $data = '
                <div class="module-title">
                    <h3 class="title"><span class="bg-1">Garden</span></h3>
                </div>
                <!--========== BEGIN .ARTICLE ==========-->
                <div class="article">';
            foreach ($sql as $item) {
                if ($item['tipo'] == 'Garden') {
                    $caption = '<strong>Medio: </strong>' . utf8_encode($item['medio']) . '<br><strong>Sección: </strong>' . utf8_encode($item['seccion_medio']) . '<br><srtong>Página: </strong>' . utf8_encode($item['pagina']);
                    $data .= '  <a href="' . URL . 'public/img/clipping/' . $item['img'] . '" data-lightbox="clipping" data-title="' . $caption . '">
                                <img src="' . URL . 'public/img/clipping/thumb/' . $item['img_thumb'] . '" alt = "' . $item['img'] . '" />
                            </a>';
                }
            }
            $data .= '</div>
                <!--========== END .ARTICLE ==========--> 
                <div class="module-title">
                    <h3 class="title"><span class="bg-1">Competencia</span></h3>
                </div><!--========== BEGIN .ARTICLE ==========-->
                <div class="article">';
            foreach ($sql as $item) {
                if ($item['tipo'] == 'Competencia') {
                    $caption = '<strong>Medio: </strong>' . utf8_encode($item['medio']) . '<br><strong>Sección: </strong>' . utf8_encode($item['seccion_medio']) . '<br><srtong>Página: </strong>' . utf8_encode($item['pagina']);
                    $data .= '  <a href="' . URL . 'public/img/clipping/' . $item['img'] . '" data-lightbox="clipping" data-title="' . $caption . '">
                                <img src="' . URL . 'public/img/clipping/thumb/' . $item['img_thumb'] . '" alt = "' . $item['img'] . '" />
                            </a>';
                }
            }
            $data .= '</div>';
        } else {
            $data = '<h4>Aún no se han cargado datos en el periodo selecionado. Por favor seleccione otra fecha.</h4>';
        }
        return $data;
    }
    
    public function filtrarClippingRevista($datos) {
        $fecha = date('Y-m-d', strtotime($datos['fecha']));
        $sql = $this->db->select("SELECT m.descripcion as medio,
                                        sm.descripcion as seccion_medio,
                                        c.img,
                                        c.img_thumb,
                                        c.pagina,
                                        c.tipo
                                FROM clipping c
                                LEFT JOIN medio m on m.id = c.id_medio
                                LEFT JOIN seccion_medio sm on sm.id = c.id_seccion_medio
                                where c.estado = 1
                                and c.fecha_visible = '$fecha'");
        if (!empty($sql)) {
            $data = '
                <div class="module-title">
                    <h3 class="title"><span class="bg-1">Garden</span></h3>
                </div>
                <!--========== BEGIN .ARTICLE ==========-->
                <div class="article">';
            foreach ($sql as $item) {
                if ($item['tipo'] == 'Garden') {
                    $caption = '<strong>Medio: </strong>' . utf8_encode($item['medio']) . '<br><strong>Sección: </strong>' . utf8_encode($item['seccion_medio']) . '<br><srtong>Página: </strong>' . utf8_encode($item['pagina']);
                    $data .= '  <a href="' . URL . 'public/img/clipping/' . $item['img'] . '" data-lightbox="clipping" data-title="' . $caption . '">
                                <img src="' . URL . 'public/img/clipping/thumb/' . $item['img_thumb'] . '" alt = "' . $item['img'] . '" />
                            </a>';
                }
            }
            $data .= '</div>
                <!--========== END .ARTICLE ==========--> 
                <div class="module-title">
                    <h3 class="title"><span class="bg-1">Competencia</span></h3>
                </div><!--========== BEGIN .ARTICLE ==========-->
                <div class="article">';
            foreach ($sql as $item) {
                if ($item['tipo'] == 'Competencia') {
                    $caption = '<strong>Medio: </strong>' . utf8_encode($item['medio']) . '<br><strong>Sección: </strong>' . utf8_encode($item['seccion_medio']) . '<br><srtong>Página: </strong>' . utf8_encode($item['pagina']);
                    $data .= '  <a href="' . URL . 'public/img/clipping/' . $item['img'] . '" data-lightbox="clipping" data-title="' . $caption . '">
                                <img src="' . URL . 'public/img/clipping/thumb/' . $item['img_thumb'] . '" alt = "' . $item['img'] . '" />
                            </a>';
                }
            }
            $data .= '</div>';
        } else {
            $data = '<h4>Aún no se han cargado datos en el periodo selecionado. Por favor seleccione otra fecha.</h4>';
        }
        return $data;
    }

}
