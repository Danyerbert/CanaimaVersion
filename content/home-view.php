
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo company; ?></h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal"> Registrar Usuario</a>
    </div>

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i> Direct
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-success"></i> Social
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-info"></i> Referral
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.container-fluid -->
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Lista de Dispositivos</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Cedula</th>
                                <th>Password</th>
                                <th>Correo</th>
                                <th>Perfil</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            Options
                                        </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item btn btn-warning" data-toggle="modal" data-target="#ModalEditar" href="#"><img src="<?php SERVERURL; ?>view/img/svg/editar.svg " alt="Industrias Canaima" width="15" height="15"> Editar</a>
                                        <a class="dropdown-item btn btn-danger" href="#"><img src="<?php SERVERURL; ?>view/img/svg/eliminar.svg " alt="Industrias Canaima" width="15" height="15"> Eliminar</a>
                                    </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            Options
                                        </button>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item btn btn-warning" data-toggle="modal" data-target="#ModalEditar" href="#"><img src="<?php SERVERURL; ?>view/img/svg/editar.svg " alt="Industrias Canaima" width="15" height="15"> Editar</a>
                                        <a class="dropdown-item btn btn-danger" href="#"><img src="<?php SERVERURL; ?>view/img/svg/eliminar.svg " alt="Industrias Canaima" width="15" height="15"> Eliminar</a>
                                    </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
         <!-- Modal de registro -->

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-titlen text-dark mx-auto" id="exampleModalLabel">Registrar Usuario</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form name="crearusuario" action="<?php // echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="">
                                        <div class="form-group">
                                            <label for="exampleInputUser1">Nombre</label>
                                            <input type="text" class="form-control" id="exampleInputUser1" aria-describedby="nameHelp" name="nombre">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUser1">Apellido</label>
                                            <input type="text" class="form-control" id="exampleInputUser1" aria-describedby="nameHelp" name="apellido">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Contraseña</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Cédula</label>
                                            <input type="text" class="form-control" id="exampleInputCedula1" name="cedula">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Correo</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correo">
                                        </div>
                                        <div class="form-group">
                                            <label for="perfil">Perfil</label>
                                            <select name="perfil" id="" class="form-control form-control-lg">
                                                <option value="1">Administrador</option>
                                                <option value="2">Presidencia</option>
                                                <option value="3">Director de Area</option>
                                                <option value="4">Gerente</option>
                                                <option value="5">Supervisor de Linea</option>
                                                <option value="6">Analista</option>
                                                <option value="7">Técnico</option>
                                                <option value="8">Verificador</option>
                                            </select>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-primary" name="registrar">Enviar</button>
                                        <button type="reset" class="btn btn-secondary">Refrescar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal del Dispositivo -->
        <!-- Modal de editar información del usuario -->
        <div class="modal fade" id="ModalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-titlen text-dark mx-auto" id="exampleModalLabel">Registrar Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form name="crearusuario" action="" method="POST" class="FormularioAjax" autocomplete="off" data-form="save">
                            <div class="form-group">
                                <label for="exampleInputUser1">Nombre</label>
                                <input type="text" class="form-control" id="exampleInputUser1" aria-describedby="nameHelp" name="nombre">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUser1">Apellido</label>
                                <input type="text" class="form-control" id="exampleInputUser1" aria-describedby="nameHelp" name="apellido">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Contraseña</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Cédula</label>
                                <input type="text" class="form-control" id="exampleInputCedula1" name="cedula">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Correo</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correo">
                            </div>
                            <div class="form-group">
                                <label for="perfil">Perfil</label>
                                <select name="perfil" id="" class="form-control form-control-lg">
                                    <option value="1">Administrador</option>
                                    <option value="2">Presidencia</option>
                                    <option value="3">Director de Area</option>
                                    <option value="4">Gerente</option>
                                    <option value="5">Supervisor de Linea</option>
                                    <option value="6">Analista</option>
                                    <option value="7">Técnico</option>
                                    <option value="8">Verificador</option>
                                </select>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-success">Enviar</button>
                            <button type="reset" class="btn btn-danger">Refrescar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
