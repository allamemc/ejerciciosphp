<?php
include ('header.php');
include ('config.php');
?>
    <h1>Consultar Pedidos</h1>
    <form action="" method="post">
        <button type="submit" class="btn btn-secondary" name="mostrar" style="display:flex; margin:0 auto;">MOSTRAR LOS PRODUCTOS</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_COOKIE['aceptar'])){
            echo '<table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">PRODUCTO</th>
                <th scope="col">UNIDADES</th>
                <th scope="col">FECHA</th>
            </tr>
            </thead>
            <tbody>';
            $consulta = "select * from productos";
        $resultado = $connmysql->query($consulta);

        while ($row = $resultado->fetch()){
            echo "<tr>
            <th scope='row'>".$row[0]."</th>
            <td>".$row[1]."</td>
            <td>".$row[2]."</td>
            <td>".$row[3]."</td>
        </tr>";
        }
        echo '</tbody>
        </table>';

        }else{
            echo "<br><h4 style='text-align:center;'>No se pueden mostrar los datos hasta que aceptes la política de privacidad</h4>";
        }
    }
    ?>


        
<?php
include ('footer.php');
?>