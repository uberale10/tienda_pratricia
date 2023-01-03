<?php
include('./layout/header.php')  // traemos el menu de navegacion
?>

<?php
session_start(); // iniciamos sesion con el usuario logeado  
?>

<?php
include('./BD/Conexion.php'); // incluimos la conexion a la base de datos
?>

<?php
// recibimos el (id) que llega del formulario principal 
$iduser=$_GET['id'];
$sql= mysqli_query($con, "SELECT * FROM producto INNER JOIN proveedor 
                           on producto.id_prov = proveedor.id_prov WHERE id=$iduser ");
                       
$resul_sql = mysqli_fetch_assoc($sql);
?>

<h2>Editar Usuario</h2>

<div class="container">
<form action="acciones.php" method="post" class="form-control" enctype="multipart/form-data">
<div class="input-group mb-3">

<input type="number" name="cod1" placeholder="Codigo"  disabled
required autofocus placeholder style="width: 100px" value="<?php echo $resul_sql['id']; ?>">

<input type="text" name="des1" placeholder="Descripcion" 
required autofocus placeholder style="width: 300px" value="<?php echo $resul_sql['nom_prod']; ?>">

<input type="number" name="pre1" placeholder="Precio" value="<?php echo $resul_sql['precio']; ?>"
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

<input type="file" class="form-control" name="foto"  >

<input type="submit" name="Actualizar" class="btn btn-success" value="Actualizar Datos">
</div>
</form>
</div>



<?php
include('./layout/footer.php')  // traemos el pie de pagina
?>