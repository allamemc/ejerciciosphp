<?php
include('header.php')
?>

<h1>ACTIVIDAD 2</h1>

<!-- para enviar información se utiliza post -->
<form action="act2_mostrar.php" method="post"> 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo</label>
    <input type="email" class="form-control" name="correo" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fecha de Hoy</label>
    <input type="date" class="form-control" name="fecha" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check">
    <label class="form-check-label" for="exampleCheck1">Aceptar las condiciones</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>






<?php
include('footer.php')
?>