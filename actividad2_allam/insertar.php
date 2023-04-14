<?php
include ('header.php');
include ('config.php');
?>
    <h1>Añadir Pedidos</h1>
    <form action="" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Producto</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre del producto" name="nombre">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Unidades</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Unidades del producto" name="uni">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Fecha del pedido</label>
            <input type="date" class="form-control" id="exampleFormControlInput1" name="fecha">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" name="enviar">
        </div>
    </form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    try {
        $resultado = $connmysql->prepare("insert into productos(nombre,unidades,fecha) values (?,?,?)");
        $resultado->bindParam(1, $_POST['nombre']);
        $resultado->bindParam(2, $_POST['uni']);
        $resultado->bindParam(3, $_POST['fecha']);
        $resultado->execute();
        echo '<div class="alert alert-success" role="alert">
          Se añadio correctamente
        </div>';
        header('refresh:2; consultar.php');
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

}

?>
<?php
include ('footer.php');
?>