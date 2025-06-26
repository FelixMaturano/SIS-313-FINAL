<!-- <?php include("conexion.php");

$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Fecha_nacimiento = $_POST['Fecha_nacimiento'];
$Sexo = $_POST['Sexo'];
$Correo = $_POST['Correo'];
$id = $_POST['id'];

$stmt = $con->prepare('UPDATE personas SET Nombre = ?,Apellido=?, Fecha_nacimiento=?, Sexo=?, Correo=? WHERE id=?');
// Vincular parametros 
$stmt->bind_param("sssssi", $Nombre, $Apellido, $Fecha_nacimiento, $Sexo, $Correo, $id);

// Ejecutar la consulta
if ($stmt->execute()){
     echo "Registro Actualizado";
}else{
    echo "Error: ".$stmt->error;
}
$con->close();
?>

<meta http-equiv="refresh" content="3;url=read.php"> -->