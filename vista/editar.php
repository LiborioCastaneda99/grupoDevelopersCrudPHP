<?php
require_once("layouts/header.php");
?>
<h2 class="text-center">Editar producto</h2>
<form action="" method="get">
    <?php
    foreach ($dato as $key => $value) :
        foreach ($value as $v) :
    ?>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="inputNombre">Nombre</label>
                    <input type="text" value="<?= $v['nombre'] ?>" name="nombre" class="form-control" required>
                </div>
                <div class="form-group col-md-5">
                    <label for="inputMarca">Marca</label>
                    <input type="text" value="<?= $v['marca'] ?>" name="marca" class="form-control" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputStock">Stock</label>
                    <input type="number" value="<?= $v['stock'] ?>" name="stock" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPrecioEntrada">Precio Entrada</label>
                    <input type="number" value="<?= $v['precioEntrada'] ?>" name="precioEntrada" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPrecioSalida">Precio Salida</label>
                    <input type="number" value="<?= $v['precioSalida'] ?>" name="precioSalida" class="form-control" required>
                </div>
            </div>
            <input type="hidden" value="<?= $v['id'] ?>" name="id"> <br>
            <input type="submit" class="btn  btn-success btn-block" name="btn" value="Actualizar">
            <input type="hidden" name="m" value="actualizar">
    <?php
        endforeach;
    endforeach;
    ?>
</form>

<?php
require_once("layouts/footer.php");
