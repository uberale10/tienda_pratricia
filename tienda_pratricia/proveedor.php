<?php
include('./layout/header.php')  // traemos el menu de navegacion
?>

<?php
include('./BD/Conexion.php'); // incluimos la conexion a la base de datos
?>

<?php
session_start(); // iniciamos sesion con el usuario logeado  
?>


<div class="container">
<form action="acciones.php" method="post" class="form-control">
<div class="input-group mb-3">

<input type="number" name="codigo" placeholder="Codigo"
required autofocus placeholder style="width: 100px">

<input type="text" name="nombre" placeholder="Descripcion" 
required autofocus placeholder style="width: 300px">

<input type="text" name="telefono" placeholder="Telefono" 
required autofocus placeholder style="width: 150px">

<input type="text" name="direccion" placeholder="Direccion" 
required autofocus placeholder style="width: 300px">

<input type="submit" name="guardarProveedor" class="btn btn-success" value="Guardar Datos">

</div>
</form>
</div>
<!------------------------------  TABLA   ---------------------------------------->
  <!-- Tabla de productos -->
  <br>
  <table>
    <tr>
      <th>Codigo</th>
      <th>Nombre</th>
      <th>Telefono</th>
      <th>Direccion</th>
      <th>Accion</th>
    </tr>

    <?php

    $sql= "SELECT * FROM proveedor ";

    $result = mysqli_query($con, $sql);

    while ($mostar = mysqli_fetch_array($result)) {

    ?>
      <tr>
        <td><?php echo $mostar['id_prov'] ?></td>
        <td><?php echo $mostar['nom_prov'] ?></td>
        <td><?php echo $mostar['telefono'] ?></td>
        <td><?php echo $mostar['direcion'] ?></td>
        <td>
          <!--se envian por medodo get, la variable la creamos ( (? id= ) , puede ser cualquier variable)-->
          <a class="link_edit"  href="./editar_productos.php?id=<?php echo $mostar['id_prov'] ?>">Editar</a>
          |
          <a class="link_delete"  href="./acciones.php?id1=<?php echo $mostar['id_prov'] ?>">Eliminar</a>

        </td>
      </tr>
    <?php
    }
    ?>
  </table>
</div>


<?php
include('./layout/footer.php')  // traemos el pie de pagina
?>