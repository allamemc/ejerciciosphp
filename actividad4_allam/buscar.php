<?php
include('header.php');
?>
    <h1 style="text-align: center;">BUSCAR POR TITULO</h1>
    <!-- al ser un buscador se usa get -->
    <form action="" method="get" style="width:500px; margin:0 auto;"> 
        <label for="inputPassword5" class="form-label">Título</label>
        <input type="text" name="titulo" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock"> <br>
        <input type="submit" class="btn btn-primary" name="enviar" value="Enviar">
    </form>
    <br>
    <div id="flexi">
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        if(isset($_GET['titulo'])){
            $end_point = "https://dummyjson.com/products";
        $json_data = file_get_contents($end_point);

        $decoded_json = json_decode($json_data, true);//lee como matriz
        $productos = $decoded_json['products'];
        foreach($productos as $producto) {
            if($producto['title'] == $_GET['titulo']){
                echo '
            
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="'.$producto['thumbnail'].'" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">'.$producto['title'].'</h5>
              <p class="card-text">Stock: '.$producto['stock'].'</p>
              <p class="card-text">Marca: '.$producto['brand'].'</p>
              <p class="card-text">Precio: '.$producto['price'].'€</p>
            </div>
            </div>
            
            ';
            }
            
        } 
        }
    }
    ?>
    </div>
<?php
include('footer.php');
?>