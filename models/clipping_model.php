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
            $data .= '</div>
                <!--========== END .ARTICLE ==========-->
                <div class="module-title">
                    <h3 class="title"><span class="bg-1">Noticias</span></h3>
                </div><!--========== BEGIN .ARTICLE ==========-->
                <div class="article">';
            foreach ($sql as $item) {
                if ($item['tipo'] == 'Noticia') {
                    $caption = '<strong>Medio: </strong>' . utf8_encode($item['medio']) . '<br><strong>Sección: </strong>' . utf8_encode($item['seccion_medio']) . '<br><srtong>Página: </strong>' . utf8_encode($item['pagina']);
                    $data .= '  <a href="' . URL . 'public/img/clipping/' . $item['img'] . '" data-lightbox="clipping" data-title="' . $caption . '">
                                <img src="' . URL . 'public/img/clipping/thumb/' . $item['img_thumb'] . '" alt = "' . $item['img'] . '" />
                            </a>';
                }
            }
            $data .= '</div>';
        } else {
            $data = '<h4 style="margin: 20px; font-weight: bold;">Aún no se han cargado datos en el periodo selecionado. Por favor seleccione otra fecha.</h4>';
        }
        return $data;
    }

    public function filtrarClippingRevista($datos) {
        $fecha = date('Y-m-d', strtotime('01-' . $datos['fecha']));
        $sql = $this->db->select("select cr.id,
                                        m.descripcion as medio,
                                        ma.descripcion as marca,
                                        cr.img_tapa,
                                        cr.img_tapa_thumb,
                                        cr.img,
                                        cr.img_thumb,
                                        cr.pagina
                                from clipping_revista cr
                                LEFT JOIN medio m on m.id = cr.id_medio
                                LEFT JOIN marca ma on ma.id = cr.id_marca
                                WHERE cr.estado = 1
                                and fecha_visible =  '$fecha'");
        if (!empty($sql)) {
            $data = '
                <div class="module-title">
                    <h3 class="title"><span class="bg-1">Garden</span></h3>
                </div>
                <!--========== BEGIN .ARTICLE ==========-->
                ';
            foreach ($sql as $item) {
                $caption = '<strong>Revista: </strong>' . utf8_encode($item['medio']) . '<br><strong>Marca: </strong>' . utf8_encode($item['marca']) . '<br><srtong>Página: </strong>' . utf8_encode($item['pagina']);
                $data .= '<div class="article"> 
                            <a href="' . URL . 'public/img/clipping_revistas/' . $item['img_tapa'] . '" data-lightbox="clipping" data-title="' . $caption . '">
                                <img src="' . URL . 'public/img/clipping_revistas/thumb/' . $item['img_tapa_thumb'] . '" alt = "' . $item['img_tapa'] . '" />
                            </a>
                            <a href="' . URL . 'public/img/clipping_revistas/' . $item['img'] . '" data-lightbox="clipping" data-title="' . $caption . '">
                                <img src="' . URL . 'public/img/clipping_revistas/thumb/' . $item['img_thumb'] . '" alt = "' . $item['img'] . '" />
                            </a>
                        </div>';
            }
            $data .= '
                <!--========== END .ARTICLE ==========--> ';
        } else {
            $data = '<h4 style="margin: 20px; font-weight: bold;">Aún no se han cargado datos en el periodo selecionado. Por favor seleccione otra fecha.</h4>';
        }
        return $data;
    }

}
