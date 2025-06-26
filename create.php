<?php
header('Content-Type: application/json');
error_reporting(0); // Evita warnings/notices en la respuesta
include("conexion.php");

$Nombre = $_POST['Nombre'] ?? '';
$Apellido = $_POST['Apellido'] ?? '';
$Fecha_nacimiento = $_POST['Fecha_nacimiento'] ?? '';
$Sexo = $_POST['Sexo'] ?? '';
$Correo = $_POST['Correo'] ?? '';

$stmt = $con->prepare('INSERT INTO personas(Nombre, Apellido, Fecha_nacimiento, Sexo, Correo) VALUES(?,?,?,?,?)');
$stmt->bind_param("sssss", $Nombre, $Apellido, $Fecha_nacimiento, $Sexo, $Correo);

if ($stmt->execute()) {
    echo json_encode([
        'success' => true,
        'message' => "Nuevo usuario ha sido creado."
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al insertar: ' . $stmt->error
    ]);
}
$stmt->close();
$con->close();
exit;
?>