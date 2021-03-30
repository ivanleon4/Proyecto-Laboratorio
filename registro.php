<?php
include_once('cnx/conexion.php');
$pacientes = "SELECT * FROM pacientes";
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
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-4">
                                    <div class="card-header"><h3 class="text-center font-weight-light">Nuevo Paciente</h3></div>
                                    <div class="card-body">
                                        <form  name="nuevopaciente" action="guardar.php" method="POST">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Nombre</label>
                                                        <input class="form-control py-2" id="inputFirstName" name="nombre" type="text" placeholder="Juan..." />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Apellido</label>
                                                        <input class="form-control py-2" id="inputLastName" name="apellido" type="text" placeholder="Medina..." />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputEmailAddress">Gmail</label>
                                                    <input class="form-control " id="inputEmailAddress" name="correo" type="email" aria-describedby="emailHelp" placeholder="juanmedina@gmail.com"/>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="id">Numero de Cedula</label>
                                                    <input class="form-control" id="id" name="cedula" type="text" aria-describedby="" placeholder="15.689.905"/>
                                                </div>
                                           </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="age">Edad</label>
                                                        <input class="form-control" id="age" name="edad" type="number" placeholder="39 años" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="gender">Genero</label>
                                                        <select id="gender" name="genero" class="form-control selectpicker">
                                                            <option>Masculino</option>
                                                            <option>Femenino</option>
                                                          </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-13">
                                                <label class="small mb-1" for="address">Direccción</label>
                                                <input class="form-control" id="direccion" name="direccion" rows="3" placeholder="Urb Soler, Lote 3 casa 123-4..."></input>
                                            </div>
                                            <div class="col-md-13">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="examen">Examen a Solicitar</label>
                                                    <select id="exam" name="examen" class="form-control selectpicker">
                                                        <option>PRUEBA COVID-19 </option>
                                                        <option>HEMATOLOGIA  </option>
                                                        <option>TRIGLICERIDOS </option>
                                                        <option>BIPOSIA </option>
                                                      </select>
                                                </div>
                                            </div>
                                          <div class="form-group mt-4 mb-0">
                                              <button type="submit" class="btn btn-primary btn-block">Registar </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="listapacientes.php">Ya tiene registro? Ve a la lista de examenes</a></div>
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
                                <a href="#">Política de privacidad</a>
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
