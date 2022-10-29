<?php
require_once("layouts/header.php");
?>
<h2 class="text-center">Nuevo producto</h2>
<form action="" method="get">
    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="inputNombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="form-group col-md-5">
            <label for="inputMarca">Marca</label>
            <input type="text" name="marca" class="form-control" required>
        </div>
        <div class="form-group col-md-2">
            <label for="inputStock">Stock</label>
            <input type="number" name="stock" class="form-control" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputPrecioEntrada">Precio Entrada</label>
            <input type="number" name="precioEntrada" class="form-control" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputPrecioSalida">Precio Salida</label>
            <input type="number" name="precioSalida" class="form-control" required>
        </div>
    </div>
    <input type="submit" class="btn btn-success btn-block" name="btn" value="Guardar"> <br>
    <input type="hidden" name="m" value="guardar">
</form>

<?php
require_once("layouts/footer.php");
