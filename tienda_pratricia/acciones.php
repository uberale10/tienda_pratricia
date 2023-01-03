<?php
include('./BD/Conexion.php'); // incluimos la conexion a la base de datos
?>

<?php
// recibimos los datos del formulario (name)

// DATOS DEL PRODUCTO
$cod=$_POST['cod1'];
$des=$_POST['des1'];
$pre=$_POST['pre1'];
$pro=$_POST['proveedor'];

$foto=$_FILES['foto']['name'];
$ruta= $_FILES['foto']['tmp_name'];
$destino= "img/".$foto;
copy($ruta,$destino);

// DATOS DEL PROVEEDOR
$codProv=$_POST['codigo'];
$nomProv=$_POST['nombre'];
$telProv=$_POST['telefono'];
$dirProv=$_POST['direccion'];

///////////////////////////////// DATOS DEL PROVEEDOR //////////////////////////////////////////////////
if(isset($_POST['guardarProveedor'])){ //cuando el boton sea presionado

$sql="INSERT INTO `proveedor` (`id_prov`, `nom_prov`, `telefono`, `direcion`) 
              VALUES ($codProv, '$nomProv', '$telProv', '$dirProv')";         
         
  if($ejecutar=$con->query($sql)){
   header('Location: ./proveedor.php');

  }else{
    echo "Error No guardados". mysqli_connect_error();
  }
}

//////////////////////////////// GUARDAR DATOS DEL PRODUCTO /////////////////////////////////////////////////////

if(isset($_POST['guardarDatos'])){ //cuando el boton sea presionado

    $sql = "INSERT INTO producto (id , imagen, nom_prod, precio, id_prov) 
             VALUES ($cod, '$destino', '$des','$pre', '$pro')";
             
      if($ejecutar=$con->query($sql)){
       header('Location: ./inicio.php');
    
      }else{
        echo "Error No guardados".mysqli_connect_error();
      }
    }

    //////////////////////////////// ACTUALIZAR DATOS DEL PRODUCTO /////////////////////////////////////////////////////

    if(isset($_POST['Actualizar'])){ //cuando el boton sea presionado

      $cod=$_POST['cod1'];

      $sql = "UPDATE producto SET (id , imagen, nom_prod, precio, id_prov) 
               VALUES ($cod, '$destino', '$des','$pre', '$pro') WHERE id=$codProv ";

      $sql3= "UPDATE `producto` SET `id`=$cod,`imagen`=$destino,`nom_prod`=$des,
              `precio`=$pre,`id_prov`=$pro WHERE =$cod";  
              
               
        if($ejecutar=$con->query($sql3)){
         header('Location: ./inicio.php');
      
        }else{
          echo "Error No guardados". mysqli_connect_error();
          
        }
      }


///////////////////////////////////////////////////////////////////////////////////
// Eliminar Registro Productos
if(isset($_GET['id2'])){ //cuando el link de eliminar sea presionado
    $iduser=$_GET['id2'];
    $DELETE = "DELETE FROM producto WHERE `producto`.`id` = $iduser";
      mysqli_query($con,$DELETE);
      //echo "Registro eliminado";
      header('Location: ./inicio.php');    
    }

// Eliminar Registro Proveedor
if(isset($_GET['id1'])){ //cuando el link de eliminar sea presionado
    $iduser=$_GET['id1'];
    $DELETE = "DELETE FROM proveedor WHERE `proveedor`.`id_prov` = $iduser";
      mysqli_query($con,$DELETE);
      //echo "Registro eliminado";
      header('Location: ./proveedor.php');    
    }
  ?>