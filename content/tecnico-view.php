<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?php echo company; ?></h1>
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
                                <th>Equipo</th>
                                <th>Propietario</th>
                                <th>Migración</th>
                                <th>Tipo de Equipo</th>
                                <th>Origen</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            Options
                                        </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item btn btn-warning" href="#"><img src="<?php SERVERURL; ?>view/img/svg/editar.svg " alt="Industrias Canaima" width="15" height="15"> Editar</a>
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
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            Options
                                        </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item btn btn-warning" href="#"><img src="<?php SERVERURL; ?>view/img/svg/editar.svg " alt="Industrias Canaima" width="15" height="15"> Editar</a>
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