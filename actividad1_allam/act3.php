<?php
include('header.php')
?>

<h1>ACTIVIDAD 3</h1>

<?php

function salariopre($salario1,$irpf1 = 0.95){//irpf de default va a ser 5% en caso de que a la funcion le entre un parametro nuevo sera el nuevo
    echo "<div class='caja'>Descontando el IRPF su salario son ".$salario1 * $irpf1."€</div>";
}
salariopre(1000,0.80); //salario para 1000 euros al colocar 1000 solo da el irpf como default que es 5% si colocamos 0.8 nos dara un irpf del 20%



function salario($salario,$irpf = null){
    if($irpf == null){
        $irpf = 0.95;
        echo "<div class='caja'>Descontando el IRPF su salario son ".$salario * $irpf."€</div>";
    }else{
        echo "<div class='caja'>Descontando el IRPF su salario son ".$salario * $irpf."€</div>";
    }
    
}
salario(1000,0.80) //salario para 1000 euros al colocar 1000 solo da el irpf como default que es 5% si colocamos 0.8 nos dara un irpf del 20%

?>






<?php
include('footer.php')
?>