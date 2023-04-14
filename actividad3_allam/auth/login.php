<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body{
            margin: 20px;
        }
        h1{
            padding-bottom: 10px;
            text-align: center;
        }
        .list-group{
            width: 400px;
            margin: 0 auto;
            text-align: center;
        }
        form{
            width: 400px;
            margin:auto;
        }
    </style>
  </head>
  <body>
    <h1>Login de Usuario</h1>  
    <form method="post" action="">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">No compartiremos su email con nadie.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            <div id="emailHelp" class="form-text">Utilice una contraseña segura.</div>
        </div>
        <button type="submit" class="btn btn-primary" name="enviar">Inicia Sesión</button>
        <div id="emailHelp" class="form-text">Si no tiene usuario <a href="register.php">acceda a este link.</a></div>
        <div id="emailHelp" class="form-text">Volver al <a href="../index.php">Inicio.</a></div>
    </form>
    <?php
    require_once("../dbconfig/db.php");
    if(isset($_POST['enviar'])){
        $consulta = "SELECT * FROM usuarios WHERE email = '".$_POST['email']."' AND password = MD5('".$_POST['password']."')";
        $resultado_login = $conn->query($consulta);
        if($resultado_login->rowCount() == 1){
            echo "<h1>Sesion como User, Bienvenido</h1>";
            session_start();
            $_SESSION['token'] = 'user';
        }else{
            echo "<h1>Usuario incorrecto o no existe</h1>";
        }
    }


    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>