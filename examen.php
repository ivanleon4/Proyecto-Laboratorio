<?php
include_once('cnx/conexion.php');
$ID = $_GET["id"];
$QUERY = "SELECT * from pacientes where pacienteID='$ID'";
$rsQUERY = mysqli_query($con, $QUERY) or die('Error: ' . mysqli_error($con));
$countQUERY = mysqli_num_rows($rsQUERY);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Laboratorio - Registro</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-9">
                                <div class="card shadow-lg border-0 rounded-lg mt-4">
                                 <?php while ($fileQUERY = mysqli_fetch_array($rsQUERY)){?> 
                                   <div class="card-header"><h3 class="text-center font-weight-light"><?php echo $fileQUERY['examen'];?></h3></div>
                                    <div class="card-body">
                                        <form  name="nuevopaciente" action="reporte.php" method="POST">
                                          <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-2" for="inputFirstName">Nombre:</label>
                                                        <textarea class="form-control py-2"  name="nombre" rows="1"><?php echo $fileQUERY['nombre'];?></textarea>
                                                        <label class="small mb-1" for="gender">Genero</label>
                                                        <select id="gender" name="genero" class="form-control selectpicker">
                                                        <option><?php echo $fileQUERY['genero'];?></option>
                                                        </select>
                                                        <label class="small mb-1" for="inputFirstName">Correo:</label>
                                                        <textarea class="form-control py-1"  name="correo" rows="1"><?php echo $fileQUERY['correo'];?></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label class="small mb-2" for="inputFirstName">Apellido:</label>
                                                        <textarea class="form-control py-2"  name="apellido" rows="1"><?php echo $fileQUERY['apellido'];?></textarea>
                                                        <label class="small mb-1" for="inputFirstName">Edad:</label>
                                                        <textarea class="form-control py-1"  name="edad" rows="1"><?php echo $fileQUERY['edad'];?></textarea>
                                                        <label class="small mb-1" for="inputFirstName">Cedula:</label>
                                                        <textarea class="form-control py-1"  name="cedula" rows="1"><?php echo $fileQUERY['cedula'];?></textarea>
                                                      </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-13">
                                                 <label class="small mb-1" for="address">Direccción</label>
                                                 <textarea class="form-control py-1"  name="direccion" rows="1"><?php echo $fileQUERY['direccion'];?></textarea>
                                                 <textarea hidden class="form-control py-1"  name="examen" rows="1"><?php echo $fileQUERY['examen'];?></textarea>

                                            </div>
                                            <div class="card-header"><h3 class="text-center font-weight-light">Resultados del Examen</h3></div>
                                            <div class="col-md-13">
                                                 <label class="small mb-1" for="address"></label>
                                                 <textarea class="form-control py-1" name="resultado" rows="5" placeholder="Ingrese aqui los resultados del examen..."></textarea>
                                            </div>
                                          <div class="form-group mt-4 mb-0">
                                              <button  id="imprimir" type="submit" class="btn btn-primary btn" onclick="alert('Documento descargado correctamente ya puede proceder a enviarlo al paciente')">Imprimir resultado</button>
                                              <a id="btncorreo" onclick="alert('Recuerde imprimir primero el resultado y luego enviarlo al paciente')" class="btn btn-success" href="phpmailer/correo.php"> Enviar resultado al paciente</a> 
                                                <script> 

                                                </script>
                                        </div>
                                          <?php } ?>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                      <div class="small"><a href="listapacientes.php">Ya tiene registro? ve a la lista de examenes</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Ivan León 2021</div>
                            <div>
                                <a href="#">Politicas de Privacidad</a>
                                &middot;
                                <a href="#">Terminos &amp; Condiciones</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>

