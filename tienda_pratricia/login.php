<!DOCTYPE html>
<html lang="es">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
      <link rel="stylesheet" href="./css/style.css">
      <title>Login</title>
</head>

<body>

      <?php
      require('./BD/Conexion.php');
      session_start();
      // If form submitted, insert values into the database.
      if (isset($_POST['username'])) {
            // removes backslashes
            $username = stripslashes($_REQUEST['username']);
            //escapes special characters in a string
            $username = mysqli_real_escape_string($con, $username);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $password);
            //Checking is user existing in the database or not

            $query = "SELECT * FROM `usuario` WHERE user ='$username' and pass='$password'";

            $result = mysqli_query($con, $query) or die(mysqli_connect_error());
            $rows = mysqli_num_rows($result);
            if ($rows == 1) {
                  $_SESSION['username'] = $username;
                  $_SESSION['start'] = time();
                  $_SESSION['expire'] = $_SESSION['start'] + (60 * 10);
                  // Redirect user to el programa
                  header("Location: inicio.php");
            } else {
                  echo "<div class='form'>
                               <h2>Usuario/password incorrectos.
                               <br/>Click aquí <a href='login.php'>Login</a></div> </h2>";
            }
      } else {
      ?>

            <div class="login__container" style="text-align: center;">
                  <div class="login__top">
                        <img class="login__img" src="./img/logo2.png" alt="">
                        <h2 class="login__title">Inicio <span>Sesion</span></h2>
                  </div>

                  <form class="login__form" method="post" name="login" autocomplete="off">
                        <!-- (autocomplete="off") no guarda informacion de usuario-->
                        <input type="text" name="username" placeholder="&#128100; username" required autofocus style="width: 300px"><br><br>
                        <input type="password" name="password" placeholder="&#x1F512; password" required style="width: 300px"><br><br>
                        <input class="btn__submit" type="submit" value="ENTRAR">

                  </form>
            </div>

      <?php } ?>


</body>

</html>