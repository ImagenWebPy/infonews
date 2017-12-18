<?php

require 'libs/Database.php';

class Helper {

    function __construct() {
        $this->db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
    }

    /**
     * Funcion para limpiar un string
     * @param strig $String a quitar caracteres especiales y espacios
     * @return string formateado
     */
    public function cleanUrl($String) {
        $String = str_replace(array('á', 'à', 'â', 'ã', 'ª', 'ä'), "a", $String);
        $String = str_replace(array('Á', 'À', 'Â', 'Ã', 'Ä'), "A", $String);
        $String = str_replace(array('Í', 'Ì', 'Î', 'Ï'), "I", $String);
        $String = str_replace(array('í', 'ì', 'î', 'ï'), "i", $String);
        $String = str_replace(array('é', 'è', 'ê', 'ë'), "e", $String);
        $String = str_replace(array('É', 'È', 'Ê', 'Ë'), "E", $String);
        $String = str_replace(array('ó', 'ò', 'ô', 'õ', 'ö', 'º'), "o", $String);
        $String = str_replace(array('Ó', 'Ò', 'Ô', 'Õ', 'Ö'), "O", $String);
        $String = str_replace(array('ú', 'ù', 'û', 'ü'), "u", $String);
        $String = str_replace(array('Ú', 'Ù', 'Û', 'Ü'), "U", $String);
        $String = str_replace(array('?', '[', '^', '´', '`', '¨', '~', ']', '¿', '!', '¡'), "", $String);
        $String = str_replace("ç", "c", $String);
        $String = str_replace("Ç", "C", $String);
        $String = str_replace("ñ", "n", $String);
        $String = str_replace("Ñ", "N", $String);
        $String = str_replace("Ý", "Y", $String);
        $String = str_replace("ý", "y", $String);

        $String = str_replace("'", "", $String);
        $String = str_replace(".", "_", $String);
        $String = str_replace(" ", "_", $String);
        $String = str_replace("/", "_", $String);

        $String = str_replace("&aacute;", "a", $String);
        $String = str_replace("&Aacute;", "A", $String);
        $String = str_replace("&eacute;", "e", $String);
        $String = str_replace("&Eacute;", "E", $String);
        $String = str_replace("&iacute;", "i", $String);
        $String = str_replace("&Iacute;", "I", $String);
        $String = str_replace("&oacute;", "o", $String);
        $String = str_replace("&Oacute;", "O", $String);
        $String = str_replace("&uacute;", "u", $String);
        $String = str_replace("&Uacute;", "U", $String);
        return $String;
    }

    /**
     * Funcion para limpiar un input antes de enviarlo por post
     * @param type $data
     * @return type
     */
    public function cleanInput($data) {
        $data = trim($data);
        $data = str_replace("'", "\'", $data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);

        return $data;
    }

    /**
     * Funcion para mostrar mensajes de alerta
     * @param string $type (success - info - warning - error)
     * @param string $message (mensaje a mostrar)
     * @return string
     */
    public function messageAlert($type, $message) {
        $alert = "";
        switch ($type) {
            case 'success':
                $alert .= '<div class="alert alert-success" role="alert">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            ' . $message . '
                        </div>';
                break;
            case 'info':
                $alert .= '<div class="alert alert-info" role="alert">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            ' . $message . '
                        </div>';
                break;
            case 'warning':
                $alert .= '<div class="alert alert-warning" role="alert">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            ' . $message . '
                        </div>';
                break;
            case 'error':
                $alert .= '<div class="alert alert-danger" role="alert">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            ' . $message . '
                        </div>';
                break;
        }
        return $alert;
    }

    /**
     * 
     * @return string url anterior del sitio
     */
    public function getUrlAnterior() {
        $url = (!empty($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : '';
        return $url;
    }

    /**
     * Funcion que retorna la url actual en forma de array
     * @return array url
     */
    public function getUrl() {
        $url = '';
        if (!empty($_GET['url'])) {
            $url = $_GET['url'];
            $url = explode('/', $url);
        }
        return $url;
    }

    /**
     * Funcion que lista las opciones del campo enum de una tabla
     * @param string $table
     * @param string $field
     * @return array con las opciones del campo enum
     */
    public function getEnumOptions($table, $field) {
        $finalResult = array();
        if (strlen(trim($table)) < 1)
            return false;
        $query = $this->db->select("show columns from $table");
        foreach ($query as $row) {
            if ($field != $row["Field"])
                continue;
//check if enum type 
            if (preg_match('/enum.(.*)./', $row['Type'], $match)) {
                $opts = explode(',', $match[1]);
                foreach ($opts as $item)
                    $finalResult[] = substr($item, 1, strlen($item) - 2);
            } else
                return false;
        }
        return $finalResult;
    }

    /**
     * Funcion para obtener las paginas donde nos encontramos
     * @return array
     */
    public function getPage() {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $pagina = (explode('/', $url));
        return $pagina;
    }

    /**
     * Devuelve la ip del visitante
     * @return string IP
     */
    public function getReal_ip() {
        if (isset($_SERVER["HTTP_CLIENT_IP"])) {
            return $_SERVER["HTTP_CLIENT_IP"];
        } elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
            return $_SERVER["HTTP_X_FORWARDED_FOR"];
        } elseif (isset($_SERVER["HTTP_X_FORWARDED"])) {
            return $_SERVER["HTTP_X_FORWARDED"];
        } elseif (isset($_SERVER["HTTP_FORWARDED_FOR"])) {
            return $_SERVER["HTTP_FORWARDED_FOR"];
        } elseif (isset($_SERVER["HTTP_FORWARDED"])) {
            return $_SERVER["HTTP_FORWARDED"];
        } else {
            return $_SERVER['REMOTE_ADDR'];
        }
    }

    /**
     * 
     * @param int $per_page
     * @param int $page
     * @param string $table (tabla a obtener el maximo de registros)
     * @param string $section (ruta del mvc a paginar)
     * @return string
     */
    public function mostrarPaginador($per_page, $page, $table, $section, $condicion = NULL) {
        if (!empty($condicion)) {
            $query = $this->db->select("SELECT COUNT(*) as totalCount $condicion");
        } else {
            $query = $this->db->select("SELECT COUNT(*) as totalCount FROM $table where estado = 1");
        }
        $total = $query[0]['totalCount'];
        $adjacents = "2";

        $page = ($page == 0 ? 1 : $page);
        $start = ($page - 1) * $per_page;

        $prev = $page - 1;
        $next = $page + 1;
        $setLastpage = ceil($total / $per_page);
        $lpm1 = $setLastpage - 1;

        $paging = "";
        if ($setLastpage > 1) {
            $paging .= "<ul class='m-pagination'>";
            $paging .= "<li class='active'>Página $page de $setLastpage</li>";
            if ($setLastpage < 7 + ($adjacents * 2)) {
                for ($counter = 1; $counter <= $setLastpage; $counter++) {
                    if ($counter == $page)
                        $paging .= "<li class='active'>$counter</li>";
                    else
                        $paging .= '<li><a class="m-btn" href="' . URL . $section . '/' . $counter . '" data-size="small" data-color="secondary" data-border>' . $counter . '</a></li>';
                }
            }
            elseif ($setLastpage > 5 + ($adjacents * 2)) {
                if ($page < 1 + ($adjacents * 2)) {
                    for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++) {
                        if ($counter == $page)
                            $paging .= '<li class="active">' . $counter . '</li>';
                        else
                            $paging .= '<li><a class="m-btn" href="' . URL . $section . '/' . $counter . '" data-size="small" data-color="secondary" data-border>' . $counter . '</a></li>';
                    }
                    $paging .= "<li class='dot'>...</li>";
                    $paging .= '<li><a class="m-btn" href="' . URL . $section . '/' . $lpm1 . '" data-size="small" data-color="secondary" data-border>' . $lpm1 . '</a></li>';
                    $paging .= '<li><a class="m-btn" href ="' . URL . $section . '/' . $setLastpage . '" data-size="small" data-color="secondary" data-border>' . $setLastpage . '</a></li>';
                }
                elseif ($setLastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2)) {
                    $paging .= '<li><a class="m-btn" href ="' . URL . $section . '/1' . '" data-size="small" data-color="secondary" data-border>1</a></li>';
                    $paging .= '<li><a class="m-btn" href ="' . URL . $section . '/2' . '" data-size="small" data-color="secondary" data-border>2</a></li>';
                    $paging .= "<li class = 'dot'>...</li>";
                    for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++) {
                        if ($counter == $page)
                            $paging .= "<li class='active'>$counter</li>"
                            ;
                        else
                            $paging .= '<li><a class="m-btn" href ="' . URL . $section . '/' . $counter . '" data-size="small" data-color="secondary" data-border>' . $counter . '</a></li>';
                    }
                    $paging .= "<li class='dot'>..</li>";
                    $paging .= '<li><a class="m-btn" href="' . URL . $section . '/' . $lpm1 . '" data-size="small" data-color="secondary" data-border>' . $lpm1 . '</a></li>';
                    $paging .= '<li><a class="m-btn" href="' . URL . $section . '/' . $setLastpage . '" data-size="small" data-color="secondary" data-border>' . $setLastpage . '</a></li>';
                }
                else {
                    $paging .= '<li><a class="m-btn" href ="' . URL . $section . '/1' . '" data-size="small" data-color="secondary" data-border>1</a></li>';
                    $paging .= '<li><a class="m-btn" href ="' . URL . $section . '/2' . '" data-size="small" data-color="secondary" data-border>2</a></li>';
                    $paging .= "<li class = 'dot'>..</li>";
                    for ($counter = $setLastpage - (2 + ($adjacents * 2)); $counter <= $setLastpage; $counter++) {
                        if ($counter == $page)
                            $paging .= "<li class='active'>$counter</li>"
                            ;
                        else
                            $paging .= '<li><a class="m-btn" href="' . URL . $section . '/' . $counter . '" data-size="small" data-color="secondary" data-border>' . $counter . '</a></li>';
                    }
                }
            }

            if ($page < $counter - 1) {
                $paging .= '<li><a class="m-btn" href="' . URL . $section . '/' . $next . '" data-size="small" data-color="secondary" data-border >Siguiente</a></li>';
                $paging .= '<li><a class="m-btn" href="' . URL . $section . '/' . $setLastpage . '" data-size="small" data-color="secondary" data-border>Ultima</a></li>';
            } else {
                $paging .= "<li class='active'>Siguiente</li>";
                $paging .= "<li class='active'>Ultima</li>";
            }

            $paging .= "</ul>";
        }

        return $paging;
    }

    function redimensionar($file, $nameFile, $ancho, $alto, $serverdir) {
        # se obtene la dimension y tipo de imagen 
        $datos = getimagesize($file);

        $ancho_orig = $datos[0]; # Anchura de la imagen original 
        $alto_orig = $datos[1];    # Altura de la imagen original 
        $tipo = $datos[2];

        if ($tipo == 1) { # GIF 
            if (function_exists("imagecreatefromgif"))
                $img = imagecreatefromgif($file);
            else
                return false;
        }
        else if ($tipo == 2) { # JPG 
            if (function_exists("imagecreatefromjpeg"))
                $img = imagecreatefromjpeg($file);
            else
                return false;
        }
        else if ($tipo == 3) { # PNG 
            if (function_exists("imagecreatefrompng"))
                $img = imagecreatefrompng($file);
            else
                return false;
        }

        # Se calculan las nuevas dimensiones de la imagen 
        if ($ancho_orig > $alto_orig) {
            $ancho_dest = $ancho;
            $alto_dest = ($ancho_dest / $ancho_orig) * $alto_orig;
        } else {
            $alto_dest = $alto;
            $ancho_dest = ($alto_dest / $alto_orig) * $ancho_orig;
        }

        // imagecreatetruecolor, solo estan en G.D. 2.0.1 con PHP 4.0.6+ 
        $img2 = @imagecreatetruecolor($ancho_dest, $alto_dest) or $img2 = imagecreate($ancho_dest, $alto_dest);

        // Redimensionar 
        // imagecopyresampled, solo estan en G.D. 2.0.1 con PHP 4.0.6+ 
        @imagecopyresampled($img2, $img, 0, 0, 0, 0, $ancho_dest, $alto_dest, $ancho_orig, $alto_orig) or imagecopyresized($img2, $img, 0, 0, 0, 0, $ancho_dest, $alto_dest, $ancho_orig, $alto_orig);

        // Crear fichero nuevo, según extensión. 
        if ($tipo == 1) // GIF 
            if (function_exists("imagegif"))
                imagegif($img2, $serverdir . $nameFile, 60);
            else
                return false;

        if ($tipo == 2) // JPG 
            if (function_exists("imagejpeg"))
                imagejpeg($img2, $serverdir . $nameFile, 60);
            else
                return false;

        if ($tipo == 3)  // PNG 
            if (function_exists("imagepng"))
                imagepng($img2, $serverdir . $nameFile, 6);
            else
                return false;

        return true;
    }

    /**
     * Funcion que envia un correo a travez de la funcion mail de PHP.
     * @param string $para
     * @param string $asunto
     * @param string $mensaje
     */
    public function sendMail($para, $asunto, $mensaje) {
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: Garden Intranet <noresponder@kia.com.py>' . "\r\n";
        $headers .= 'Reply-To: noresponder@kia.com.py' . "\r\n";
        mail($para, $asunto, $mensaje, $headers);
    }

    public function shortMonthDate($month) {
        switch ($month) {
            case 'Jan':
                $mes = 'Ene';
                break;
            case 'Feb':
                $mes = 'Feb';
                break;
            case 'Mar':
                $mes = 'Mar';
                break;
            case 'Apr':
                $mes = 'Abr';
                break;
            case 'May':
                $mes = 'May';
                break;
            case 'Jun':
                $mes = 'Jun';
                break;
            case 'Jul':
                $mes = 'Jul';
                break;
            case 'Aug':
                $mes = 'Ago';
                break;
            case 'Sept':
                $mes = 'Set';
                break;
            case 'Sep':
                $mes = 'Set';
                break;
            case 'Oct':
                $mes = 'Oct';
                break;
            case 'Nov':
                $mes = 'Nov';
                break;
            case 'Dec':
                $mes = 'Dic';
                break;
        }
        return $mes;
    }

    /**
     * Funcion que retorna los elementos del slide principal de la pagina
     * @return array
     */
    public function getHomeSlider() {
        $sql = $this->db->select("SELECT n.id,
                                        n.titulo,
                                        n.contenido,
                                        n.img,
                                        c.descripcion as categoria,
                                        m.descripcion as marca
                                FROM noticia n
                                LEFT JOIN marca m on m.id = n.id_marca
                                LEFT JOIN categoria c on c.id = n.id_categoria
                                where n.destacado = 'PRINCIPAL'
                                and n.estado = 1
                                ORDER BY n.orden ASC");
        return $sql;
    }

    /**
     * Funcion que retorna los registros destacados de las promociones
     * @return array
     */
    public function getHomePromociones() {
        $sql = $this->db->select("SELECT p.titulo, 
                                        p.contenido,
                                        p.img,
                                        m.descripcion as marca
                                FROM promocion p
                                LEFT JOIN marca m on m.id = p.id_marca
                                WHERE p.estado = 1
                                and p.destacado = 1
                                ORDER BY p.orden ASC");
        return $sql;
    }

    /**
     * Funcion que retorna los registros destacados de las publicaciones de recursos humanos
     * @return array
     */
    public function getHomeRRHH() {
        $sql = $this->db->select("SELECT n.titulo,
                                        n.contenido,
                                        n.img
                                FROM noticia n
                                WHERE n.destacado = 'RRHH'
                                and n.estado = 1
                                ORDER BY n.orden ASC");
        return $sql;
    }

    /**
     * Funcion que retorna los registros de las ultimas publicaciones sobre las marcas
     * que no estan marcadas como destacadas
     * @return array
     */
    public function getHomeMarcasNovedades() {
        $sql = $this->db->select("SELECT n.id,
                                        n.titulo,
                                        n.img,
                                        SUBSTRING(n.contenido,1,160) as contenido,
                                        m.descripcion as marca
                                FROM noticia n
                                LEFT JOIN marca m on m.id = n.id_marca
                                where n.id_categoria = 1
                                and ISNULL(n.destacado)
                                and n.estado = 1
                                ORDER BY fecha_visible DESC
                                LIMIT 5");
        return $sql;
    }

    /**
     * Funcion que retorna los registros destacados de videos
     * @return array
     */
    public function getHomeVideos() {
        $sql = $this->db->select("SELECT n.video
                                FROM noticia n
                                where n.destacado = 'VIDEO'
                                and n.estado = 1
                                ORDER BY orden ASC");
        return $sql;
    }

    /**
     * Funcion que retorna los registros destacados de la categoria varios
     * @return array
     */
    public function getHomeVarios() {
        $sql = $this->db->select("SELECT n.id,
                                        n.titulo,
                                        n.img,
                                        SUBSTRING(n.contenido,1,180) as contenido,
                                        n.tag
                                FROM noticia n
                                where n.destacado = 'VARIOS'
                                ORDER BY n.orden ASC");
        return $sql;
    }

    /**
     * Funcion que lista las noticas por fecha(sin destacar).
     * @return array
     */
    public function getHomeListadoPromociones() {
        $sql = $this->db->select("SELECT p.id,
                                        p.titulo,
                                        SUBSTRING(p.contenido,1,60) as contenido,
                                        p.img,
                                        m.descripcion as marca
                                FROM promocion p 
                                LEFT JOIN marca m on m.id = p.id_marca
                                WHERE p.destacado = 0
                                ORDER BY p.fecha_publicacion DESC 
                                LIMIT 4");
        return $sql;
    }

    public function getFooterNoticias() {
        $sql = $this->db->select("SELECT n.id,
                                        n.titulo,
                                        n.img
                                FROM noticia n
                                where n.id_categoria = 1
                                and n.estado = 1
                                ORDER BY n.fecha_visible DESC
                                LIMIT 4");
        return $sql;
    }

    public function getFooterPromociones() {
        $sql = $this->db->select("SELECT p.id,
                                        p.titulo,
                                        p.img
                                FROM promocion p
                                where p.estado = 1
                                ORDER BY p.fecha_publicacion DESC
                                LIMIT 4");
        return $sql;
    }

    public function getFooterRRHH() {
        $sql = $this->db->select("select n.id,
                                        n.titulo,
                                        n.img
                                from noticia n
                                where n.id_categoria = 3
                                and n.estado = 1
                                ORDER BY n.fecha_visible DESC
                                LIMIT 4");
        return $sql;
    }

    public function getFooterTags() {
        $sql = $this->db->select("select tag 
                                from noticia
                                ORDER BY fecha_visible DESC
                                LIMIT 10");
        $tags = array();
        foreach ($sql as $item) {
            $val = explode(',', $item['tag']);
            foreach ($val as $value) {
                array_push($tags, $value);
            }
        }
        return array_unique($tags);
    }

}
