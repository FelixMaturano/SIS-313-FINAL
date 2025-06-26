<?php
if (!isset($_SESSION["Correo"]))
{
    echo "acceso no autorizado";
    ?>
    <meta http-equiv="refresh" content="3;url=index.html">
    <?php
    die();
}
?>