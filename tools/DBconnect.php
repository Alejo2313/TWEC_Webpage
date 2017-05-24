<?php
    // datos para la conexion a mysql
    define('DB_SERVER','localhost');
    define('DB_NAME','Tienda');
    define('DB_USER','root');
    define('DB_PASS','2313');

$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASS,DB_NAME);
if ( mysqli_connect_errno() ) {
    echo "<h1> Error de conexión a la BD: ".mysqli_connect_error()."</h1>";
    exit();
};
?>