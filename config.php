<?php

/**
 * ARCHIVO DE CONFIGURACIONES
 * @author "Raul Ramirez" <raul.chuky@gmail.com>
 * @version 1 2017-07-17
 */
// Always provide a TRAILING SLASH (/) AFTER A PATH
$host = getHost();
switch ($host) {
    case '192.168.10.99':
        define('URL', '192.168.10.99/infonews/');
        define('DB_USER', 'root');
        define('DB_PASS', 'G@rdenMKTWS3rv3r');
        define('DB_NAME', 'infonews');
        break;
    case 'localhost':
        define('URL', 'http://localhost/infonews/');
        define('DB_USER', 'root');
        define('DB_PASS', '');
        define('DB_NAME', 'infonews');
        break;
    default :
        define('URL', 'http://192.168.90.195/infonews/');
        define('DB_USER', 'root');
        define('DB_PASS', '');
        define('DB_NAME', 'infonews');
        break;
}
define('LIBS', 'libs/');

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');

// The sitewide hashkey, do not change this because its used for passwords!
// This is for other hash keys... Not sure yet
define('HASH_GENERAL_KEY', 'MixitUp200');

// This is for database passwords only
define('HASH_PASSWORD_KEY', '!@123456789ABCDEFGHIJKLMNOPRSTWYZ[¿]{?}<->');

//Constantes varias
define('SITE_TITLE', 'Info-news :: ');
define('ADMIN_TITLE', 'Administrador :: ');
define('CANT_REG', 9);


function getHost() {
    $host = $_SERVER['HTTP_HOST'];
    return $host;
}
