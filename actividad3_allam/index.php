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
    </style>
  </head>
  <body>
    <h1>Actividad 3</h1>
    <div class="list-group">
        <a href="" class="list-group-item list-group-item-action active" aria-current="true">Zonas</a>
        <a href="./private/noticias.php" class="list-group-item list-group-item-action">Noticias</a>
        <?php
        session_start();
        if(isset($_SESSION['token'])){
          echo '<a href="./auth/logout.php" class="list-group-item list-group-item-action">Salir</a>';
        }else{
          echo '<a href="./auth/login.php" class="list-group-item list-group-item-action">Acceso</a>
          <a href="./auth/register.php" class="list-group-item list-group-item-action">Registro</a>';
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>