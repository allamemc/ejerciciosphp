<?php
include('header.php');
?>
    <h1>TODOS NUESTROS PRODUCTOS</h1>
  
  <div id="flexi">
    <?php
        $end_point = "https://dummyjson.com/products";
        $json_data = file_get_contents($end_point);

        $decoded_json = json_decode($json_data, true);//lee como matriz
        $productos = $decoded_json['products'];
        foreach($productos as $producto) {
            echo '
            
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="'.$producto['thumbnail'].'" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">'.$producto['title'].'</h5>
              <p class="card-text">Categoría: '.$producto['category'].'</p>
            </div>
            </div>
            
            ';
        } 
    ?>
    </div>
<?php
include('footer.php');
?>
    
        