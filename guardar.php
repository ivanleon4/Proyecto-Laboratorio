<?php
include_once('cnx/conexion.php');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$cedula = $_POST['cedula'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
$direccion = $_POST['direccion'];
$examen = $_POST['examen'];

$insertar = "INSERT INTO pacientes (nombre, apellido, genero, edad, cedula, direccion, correo, examen)
VALUES ('$nombre','$apellido','$genero','$edad','$cedula','$direccion','$correo','$examen')";

$resultado = mysqli_query($con, $insertar);
 
if($resultado){
    header('Location: listapacientes.php');
}else{ 
echo "Failed to connect to MySQL: ". mysqli_connect_error();
}


?>