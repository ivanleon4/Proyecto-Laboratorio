<?php
/* $host = "sql103.epizy.com";
$user = "epiz_28242960";
$clave = "z4yL3ZxpVb";
$bd = "epiz_28242960_laboratorio";
$conectar = mysqli_connect($host,$user,$clave,$bd); */

$con = mysqli_connect("sql103.epizy.com","epiz_28242960","z4yL3ZxpVb","epiz_28242960_laboratorio");
// Check connection
if(mysqli_connect_errno()){
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
echo '';
} 
?>