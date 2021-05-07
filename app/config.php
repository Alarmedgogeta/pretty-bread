<?php
setlocale(LC_TIME, 'es_ES');

$db = 'pretty-bread';
$hostname = 'localhost';
$user = 'root';
$pass = '';

global $dbcon;
$dbcon = new mysqli($dbhost, $usuario, $contrasena, $base) or die("Error al conectar con la base de datos");
mysqli_set_charset($dbcon, 'utf8');
date_default_timezone_set("America/Mexico_City");

