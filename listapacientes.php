<?php
include_once('cnx/conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Laboratorio - Pacientes en Lista</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">LEÓN LABORATORIO</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Ajustes</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Salir</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Centro</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Menú
                            </a>
                            <div class="sb-sidenav-menu-heading">Laboratorio</div>
                            <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pacientes
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="registro.php">
                                        Registar nuevo paciente
                                    </a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Base de Datos</div>
                            <a class="nav-link" href="listapacientes.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Lista de Pacientes
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Añada, edite o elimine las pruebas de los pacientes aqui"</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="resultado.php">Menú</a></li>
                            <li class="breadcrumb-item active">Tabla</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Lista de pacientes
                                <p>Consejo: Para visualizar mejor la tabla minimize el panel lateral izquierdo.</p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Edad</th>
                                                <th>Cedula</th>
                                                <th>correo</th>
                                                <th>Examen</th>
                                                <th>Añadir Resultado</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Edad</th>
                                                <th>Cedula</th>
                                                <th>correo</th>
                                                <th>Examen</th>
                                                <th>Añadir Resultado</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php
                                            $QUERY = "SELECT * FROM pacientes";
                                            $rsQUERY = mysqli_query($con,$QUERY) or die('Error'. mysqli_error($con));
                                            while ($fileQUERY = mysqli_fetch_array($rsQUERY)){
                                            $ID = $fileQUERY['pacienteID'];
                                        ?>      
                                            <tr>
                                                <td><?php echo $fileQUERY['nombre'];?></td>
                                                <td><?php echo $fileQUERY['apellido'];?></td>
                                                <td><?php echo $fileQUERY['edad'];?></td>
                                                <td><?php echo $fileQUERY['cedula'];?></td>
                                                <td><?php echo $fileQUERY['correo'];?></td>
                                                <td><?php echo $fileQUERY['examen'];?></td>
                                                <td><a href="examen.php?id= <?php echo $fileQUERY['pacienteID'];?>">Añadir</a></td>
                                            </tr>
                                            <?php }?>
                                            </tr>     
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
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
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>