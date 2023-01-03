<?php include('./layout/header.php')  // traemos el menu de navegacion
?>

<div class="container-fluid">
    <form  action="" method="POST" enctype="multipart/form-data">

        <div class="col-md-4 position-relative">

            <div class="photo">
                <label for="foto">Foto</label>
                <div class="prevPhoto">
                    <span class="delPhoto notBlock">X</span>
                    <label for="foto"></label>
                </div>
                <div class="upimg">
                    <input type="file" name="foto" id="foto">
                </div>
                <div id="form_alert"></div>
            </div>

            <label for="validationTooltip01" class="form-label">Imagen del Producto</label>
            <input type="file" class="form-control" id="validationTooltip01" value="Mark" required>

            <label for="validationTooltip01" class="form-label">Nombre del Producto</label>
            <input type="text" class="form-control" id="validationTooltip01" placeholder="&#127852; ... nombre" required>

            <label for="validationTooltip02" class="form-label">Precio / compra</label>
            <input type="text" class="form-control" id="validationTooltip02" placeholder=" precio" required>

            <label for="validationTooltip02" class="form-label">Precio / venta</label>
            <input type="text" class="form-control" id="validationTooltip02" placeholder="nombre del producto..." required>

            <label for="validationTooltip01" class="form-label">Descripcion</label>
            <input type="number" class="form-control" id="validationTooltip01" placeholder="codigo del producto..." required>

            <label for="validationTooltip02" class="form-label">Proveedor</label>
            <select name="select" class="form-control">
                <option value="value1">Value 1</option>
                <option value="value2" selected>Value 2</option>
                <option value="value3">Value 3</option>
            </select>
        </div>

        <br>
        <!-- Boton de enviar datos -->
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Guardar Datos</button>
        </div>
    </form>

</div>

<?php
include('./layout/footer.php')  // traemos el pie de pagina
?>