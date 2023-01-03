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
<form action="acciones.php" method="post" class="form-control" enctype="multipart/form-data">
<div class="input-group mb-8">

<input type="number" name="cod1" placeholder="Codigo"
required autofocus placeholder style="width: 100px">

<input type="text" name="des1" placeholder="Descripcion" 
required autofocus placeholder style="width: 300px">

<input type="number" name="pre1" placeholder="Precio" 
required autofocus placeholder style="width: 150px">

<select name="proveedor">
<?php 
$sql1= "SELECT * FROM proveedor";
$query=mysqli_query($con,$sql1);
while ($a = mysqli_fetch_array($query)) {
  $idprov=$a['id_prov'];
  $nomprov=$a['nom_prov'];
?>
  <option value="<?php echo $idprov?>"><?php echo $nomprov?></option>
  <?php
    }
  ?>
</select>

<input type="file" class="form-control" name="foto">

<input type="submit" name="guardarDatos" class="btn btn-success" value="Guardar Datos">

</div>
</form>
</div>
<!------------------------------  TABLA   ---------------------------------------->
  <!-- Tabla de productos -->
  <br>
  <table>
    <tr>
      <th>Codigo</th>
      <th>Descripcion</th>
      <th>Precio</th>
      <th>Proveedor</th>
      <th>Imagen</th>
      <th>Accion</th>
    </tr>

    <?php
// unimos las 2 tablas con inner join para poder mostrar el nobre del proveedor en lugar del codigo
    $sql= "SELECT * FROM producto INNER JOIN proveedor on producto.id_prov = proveedor.id_prov ";

    $result = mysqli_query($con, $sql);

    while ($mostar = mysqli_fetch_array($result)) {

    ?>
      <tr>
        <td><?php echo $mostar['id'] ?></td>
        <td><?php echo $mostar['nom_prod'] ?></td>
        <td><?php echo $mostar['precio'] ?></td>
        <td><?php echo $mostar['nom_prov'] ?></td>
        <td><?php echo '<img  height="80px" width="80px" src="' . $mostar['imagen'] . '" >' ?></td>
        <td>
          <!--se envian por medodo get, la variable la creamos ( (? id= ) , puede ser cualquier variable)-->
          <a class="link_edit"  href="./editar_productos.php?id=<?php echo $mostar['id'] ?>">Editar</a>
          |
          <a class="link_delete"  href="./acciones.php?id2=<?php echo $mostar['id'] ?>">Eliminar</a>

          
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