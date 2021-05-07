<?php
setlocale(LC_TIME, 'es_ES');
/*
$db = 'pretty_bread';
$hostname = 'localhost';
$user = 'root';
$pass = '';

global $dbcon;
$dbcon = new mysqli($hostname, $user, $pass, $db) or die("Error al conectar con la base de datos");
mysqli_set_charset($dbcon, 'utf8');
*/
date_default_timezone_set("America/Mexico_City");

global $path_app;
$path_app = "http://" . $_SERVER['HTTP_HOST'];

