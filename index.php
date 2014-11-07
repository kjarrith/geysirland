<?php
session_start('');
ob_start();
//CONNECT TO THE DATABASE
include_once 'includes/scripts/connect_to_mysql.php';
$cssVersion = 1;
$faviconVersion = 1;
$javaVersion = 1;

    define('APPDIR' ,dirname(__FILE__));
    $parts = explode('/', $_SERVER['REQUEST_URI']);

    //Get rid of empty item
    array_shift($parts);

    $system       = array_shift($parts);
    $flokkur      = array_shift($parts);
    $page         = array_shift($parts);
    $u1           = array_shift($parts);
    $u2           = array_shift($parts);

    switch ($system) {
        case 'ajax':
            require_once(APPDIR . '/includes/ajax.php');
            break;
        case 'matsedill':
            require_once(APPDIR . '/views/matsedill.php');
            break;
        default:
            require_once(APPDIR . '/views/workes.php');
            break;
    }
    exit;

?>
