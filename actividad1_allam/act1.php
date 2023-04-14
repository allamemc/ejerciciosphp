<?php
include('header.php')
?>

<h1>ACTIVIDAD 1</h1>
<?php

$datos = array('allam',true,4,4.5); //creamos array

echo "<h5>Primer array</h5>";
echo"<div class='caja'>";
foreach($datos as $dato){ //recorremos
    echo "<h6>$dato</h6>";
}
echo"</div>";
echo "<h5>Array elemento añadido</h5>";
array_push($datos,'nuevo elemento'); //añade elemento al final del array
echo"<div class='caja'>";
foreach($datos as $dato){
    echo "<h6>$dato</h6>";
}
echo"</div>";

unset($datos[2]); //elimina un elemento en la tercera posicion
echo"</div>";
echo "<h5>Array elemento 3 eliminado</h5>";
echo"<div class='caja'>";
foreach($datos as $dato){
    echo "<h6>$dato</h6>";
}
echo"</div>";
?>







<?php
include('footer.php')
?>