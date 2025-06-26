<?php 
include("conexion.php");

$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Fecha_nacimiento = $_POST['Fecha_nacimiento'];
$Sexo = $_POST['Sexo'];
$Correo = $_POST['Correo'];
$id = $_POST['id'];


$stmt = $con->prepare('UPDATE personas SET Nombre = ?, Apellido=?, Fecha_nacimiento=?, Sexo=?, Correo=? WHERE id=?');
$stmt->bind_param("sssssi", $Nombre, $Apellido, $Fecha_nacimiento, $Sexo, $Correo, $id);

if ($stmt->execute()){
    echo json_encode(['success' => true,
                             'message' => 'Registro Actualizado']);
} else {
    echo json_encode(['success' => false, 
                            'message' => 'Error: '.$stmt->error]);
}

$con->close();
?>