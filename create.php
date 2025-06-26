<?php
include("conexion.php");

$Nombre = $_POST['Nombre'] ?? '';
$Apellido = $_POST['Apellido'] ?? '';
$Fecha_nacimiento = $_POST['Fecha_nacimiento'] ?? '';
$Sexo = $_POST['Sexo'] ?? '';
$Correo = $_POST['Correo'] ?? '';
$password = $_POST['password'] ?? '';
$nivel = $_POST['nivel'] ?? 0;

$hashed_password = sha1($password); // puedes cambiar a password_hash() si prefieres

$stmt = $con->prepare("INSERT INTO personas (Nombre, Apellido, Fecha_nacimiento, Sexo, Correo, password, nivel) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssi", $Nombre, $Apellido, $Fecha_nacimiento, $Sexo, $Correo, $hashed_password, $nivel);

if ($stmt->execute()) {
    echo "Nuevo registro creado con éxito";
} else {
    echo "Error: " . $stmt->error;
}
$con->close();
?>
<meta http-equiv="refresh" content="3;url=read.php">
