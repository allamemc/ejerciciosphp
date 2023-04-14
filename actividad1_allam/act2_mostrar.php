<?php
include('header.php')
?>

<h1>ACTIVIDAD 2</h1>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "
    <h5>Datos del Cliente</h5>
    <div class='caja'>
    <ul>
        <li>Nombre: ".$_POST['nombre']."</li>
        <li>Correo: ".$_POST['correo']."</li>
        <li>Fecha: ".$_POST['fecha']."</li>
        <li>Acepta condiciones: "; if(isset($_POST['check'])){
            echo "Si";
        }else{
            echo "No";
        }
        
        
        echo "
        </li>
    </ul>
    </div>
    
    ";
}


?>






<?php
include('footer.php')
?>