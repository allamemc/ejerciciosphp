<?php
//conexion a mysql
$ruta = 'mysql:host=localhost;dbname=examen_allam';

try {
    $connmysql = new PDO($ruta, 'root', '');
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
