<?php
    require_once("layouts/header.php");
?>

<center>
    <a href="index.php?m=nuevo" class="btn btn-success btn-block text-center">
        <i class="fa fa-plus-square" aria-hidden="true"></i>
        Agregar nuevo producto
    </a><br>
</center>
<table class="table table-hover mt-4" id="Listar">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Stock</th>
            <th>Precio Entrada</th>
            <th>Precio Salida</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (!empty($dato)) :
            foreach ($dato as $key => $value)
                foreach ($value as $v) : ?>
                <tr>
                    <td><?= $v['id']; ?> </td>
                    <td><?= $v['nombre']; ?> </td>
                    <td><?= $v['marca']; ?> </td>
                    <td><?= $v['stock']; ?> </td>
                    <td><?= $v['precioEntrada']; ?> </td>
                    <td><?= $v['precioSalida']; ?> </td>
                    <td>
                        <a class="btn btn-warning" href="index.php?m=editar&id=<?= $v['id'] ?>">Editar</a>
                        <a class="btn btn-danger" href="index.php?m=eliminar&id=<?= $v['id'] ?>" onclick="return confirm('¿estás seguro que quieres eliminar este registro?'); false">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="3" class="text-center">NO HAY REGISTROS</td>
            </tr>
        <?php endif ?>
    </tbody>
</table>
<p class="text-center"><b><?= $_REQUEST['msj']?></b></p>

<?php
require_once("layouts/footer.php");
