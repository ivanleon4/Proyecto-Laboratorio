<?php
include_once('cnx/conexion.php');
 ob_start();


$result= $_POST['resultado'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$cedula = $_POST['cedula'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
$direccion = $_POST['direccion'];
$examen = $_POST['examen'];             
?>

<div class="card-header"><h3 class="text-center font-weight-light"><?php echo $examen= $_POST['examen'];?></h3></div>
    <form>
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="small mb-2" for="inputFirstName">Nombre:</label>
                        <textarea class="form-control py-2"  name="nombre" rows="1"><?php echo $nombre= $_POST['nombre'];?></textarea>
                        <label class="small mb-1" for="gender">Genero</label>
                        <textarea class="form-control py-1"  name="genero" rows="1"><?php echo $correo= $_POST['genero'];?></textarea>
                        <label class="small mb-1" for="inputFirstName">Correo:</label>
                        <textarea class="form-control py-1"  name="correo" rows="1"><?php echo $correo= $_POST['correo'];?></textarea>
                </div>
                    </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="small mb-2" for="inputFirstName">Apellido:</label>
                                    <textarea class="form-control py-2"  name="apellido" rows="1"><?php echo $apellido= $_POST['apellido'];?></textarea>
                                        <label class="small mb-1" for="inputFirstName">Edad:</label>
                                            <textarea class="form-control py-1"  name="edad" rows="1"><?php echo $edad= $_POST['edad'];?></textarea>
                                                <label class="small mb-1" for="inputFirstName">Cedula:</label>
                                                    <textarea class="form-control py-1"  name="cedula" rows="1"><?php echo $cedula= $_POST['cedula'];?></textarea>
                                                    
                                </div>
                            </div>
                        </div>
                            <div class="col-md-13">
                                <label class="small mb-1" for="address">Direccción</label>
                                <textarea class="form-control py-1"  name="direccion" rows="1"><?php echo $direccion= $_POST['direccion'];?></textarea>
                            </div>
                                <div class="card-header"><h3 class="text-center font-weight-light">Resultados del Examen</h3></div>
                                    <div class="col-md-13">
                                        <label class="small mb-1" for="address"></label>
                                        <textarea class="form-control py-1" name="resultado" rows="5"><?php echo $result= $_POST['resultado'];?></textarea>
                                    </div>
<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = "examen.pdf";
file_put_contents($filename, $pdf);
$dompdf->stream($filename);


?>
</form>
</div>
                                    
