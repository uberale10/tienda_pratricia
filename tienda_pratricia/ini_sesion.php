<?php
// redireciona a login si no ha iniciado sesion
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }


$now = time();   
  if($now > $_SESSION['expire']) { //si el tiempo ya espiro
  session_destroy();
   
echo "Su sesion a terminado,
  <a href='login.php'>Necesitas iniciar sesion</a>";
  exit;
  }
