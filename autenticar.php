<?php session_start();
include("conexion.php");
$correo = $_POST['Correo'];
$password = sha1($_POST['password']);
$stmt = $con->prepare('SELECT Correo,Nombre,nivel FROM personas WHERE Correo=? AND password=?');
$stmt->bind_param("ss", $correo, $password);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    echo "Usuario encontrado";
    $_SESSION['Correo'] = $correo;
    $_SESSION['nivel'] = $result->fetch_assoc()['nivel'];
    header("Location:pagina.php");

} else {
    echo "Error datos de autenticación incorrectos";
    ?>
    <meta http-equiv="refresh" content="1;url=index.html">
    <?php
}

?>