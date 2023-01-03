<?php
require('./ini_sesion.php');
// redireciona a login si no ha iniciado sesion
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/e10be12ced.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
  <script src="./js/funtions.js"></script>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Tienda Patricia</title>
</head>

<body>

  <?php session_start(); // iniciamos sesion con el usuario logeado  
  ?>
  

  <br>
  <!-- menu principal -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      
      <a href="./inicio.php">
        <img class="login__img" src="./img/logo2.png" width="100">
      </a>

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" aria-current="page" href="./inicio.php">Inicio</a>
          <a class="nav-link" href="./proveedor.php">Proveedor</a>
          <a class="nav-link" href="fin_sesion.php"> salir</a>

        </div>
      </div>
    </div>
  </nav>

  <div class="container-fluid" id="user" >

          <h4>Usuario:  <?php echo utf8_decode($_SESSION["username"]) ///nombre de ususario logeado ?> </h4> 
          
          <?php 
               //  date_default_timezone_set('America/Bogota');
                // echo date("Y-m-d")."<br>";
                // echo date("h:i:a")  // h(hora)- i(minutos) - s(segundos) a(horario "am-pm")
          ?> 
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>