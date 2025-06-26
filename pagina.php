<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <nav class="nav nav-pills flex-column flex-sm-row fixed-top  shadow-sm" style="width:80%; margin-top: 100px;">
        <a class=" text-sm-center nav-link active" aria-current="page" style="width: 200px; margin-left: 700px;"
            href="javascript:cargarContenido('read.php')">Ver lista</a>
    </nav>
    <div class="container" class="nav nav-pills flex-column flex-sm-row">
        <button type="button" class="btn btn-warning" id="cerrar-sesion" style="margin-left:400px;position:absolute;"><a
                href="cerrar.php" style='text-decoration: none; color:white;'>Cerrar Sesión</a></button>


        <div id="contenido">

        </div>

    </div>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 id="titulo-modal">Título del Modal</h2>
            <div id="contenido-modal">

            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>