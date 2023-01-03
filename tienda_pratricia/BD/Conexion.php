
<?php
// declaramos las variables para la conexion de la bese de base de datos
$db="Tienda_Patricia";
$username="root";
$host="localhost";
$password="12345678";

// realizamos la conexion con las variables declaradas
$con = mysqli_connect("$host","$username","$password","$db");

// Check connection
if (mysqli_connect_errno()) // esta funcion, Devuelve un valor de código de error (si hay alguno)
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>