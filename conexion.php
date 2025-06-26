<?php
$con = mysqli_connect("localhost", "root", "","bd_personas");
if (mysqli_connect_errno()) {
    echo "Error al conectarse con MySQL: " . mysqli_connect_error();
}
?>