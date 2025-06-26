<?php session_start();
require("verificarsesion.php");
?>
<button type="button" class="btn btn-warning" id="cerrar-sesion"style="margin-left:400px;position:absolute;"><a href="cerrar.php"
         style='text-decoration: none; color:white;'>Cerrar Sesión</a></button>
<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
include("conexion.php");
$sql = "SELECT id, Nombre, Apellido, Fecha_nacimiento, Sexo, Correo, nivel FROM personas";
$resultado = $con->query($sql);
?> <style>
    body {
        height: 581px;
        width: 100vw;
        background-image: repeating-linear-gradient(135deg, rgba(0, 0, 0, .1) 0px, rgba(0, 0, 0, 0.1) 2px, transparent 2px, transparent 4px), linear-gradient(45deg, #040404, rgb(238, 238, 238));
        display: grid;
        place-items: center;
        position: relative;
    }
    #table{
        position: absolute;
    }
    #cerrar-sesion {
        right: 30px;
        top: 27px;
        position: absolute;
        z-index: 10;
    }
    #btn-insertar{
        left: 200px;
        top:150px;
        position: absolute;
        z-index: 10;
    }
</style>
<table id="table"class="table table-success table-striped" style="max-width: 900px; margin: 20px 100px 10px 400px;">
    <thead style="background-color: green">
        <tr>
            <th width="100px">Nombres</th>
            <th width="150px">Apellidos</th>
            <th width="60px">Fecha_nacimiento</th>
            <th width="10px">Sexo</th>
            <th width="150px">Correo</th>
            <th width="10px">Nivel</th>
            <?php if ($_SESSION['nivel'] == 1) { ?>
                <th>Operaciones</th>
            <?php } ?>
        </tr>
    </thead>
    <?php
    while ($row = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Apellido']; ?></td>
            <td><?php echo $row['Fecha_nacimiento']; ?></td>
            <td><?php echo $row['Sexo']; ?></td>
            <td><?php echo $row['Correo']; ?></td>
            <td><?php echo $row['nivel']; ?></td>
            <!-- verificar 1 si es administrador me permita ver esto  de lo contrario no  -->
            <?php if ($_SESSION['nivel'] == 1) { ?>
                <td><button type="button" class="btn btn-success" style="margin-right: 10px;"><a
                            href="javascript:editar('<?php echo $row['id'];?>')"
                            style='text-decoration: none; color:white; '>Editar</a></button><button type="button"
                        class="btn btn-danger" onclick="eliminar('<?php echo $row['id']; ?>')">Eliminar</button></td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>

<?php if ($_SESSION['nivel'] == 1) { ?>
    <button type="button" class="btn btn-secondary" id="btn-insertar" style="margin-left:400px;position:absolute;"><a href="javascript:insertar()"
            style='text-decoration: none; color:white;'>Insertar</a></button>
<?php } ?>
<script src="js/bootstrap.min.js"></script>
<script src="script.js"></script>