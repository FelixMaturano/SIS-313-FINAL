<?php 
header('Content-Type: application/json');
error_reporting(0); // Evita warnings/notices en la respuesta

include("conexion.php");

$id = $_GET['id'];

$stmt = $con->prepare('DELETE FROM personas WHERE id=?');
$stmt->bind_param("i",$id);


//Ejecutar la consulta
if($stmt->execute()){
    echo json_encode(['success' => true, 'message'=>"Registro Elinado"
]);
}else{
    echo json_encode(['success'=> false, 'message'=>"Error:".$stmt->error]);
}
$stmt->close();
$con->close();
exit;
?>