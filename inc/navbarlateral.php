<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="principal.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="img/Canaima.png " alt="Industrias Canaima" width="42" height="42">
        </div>
        <div class="sidebar-brand-text mx-3"><?php echo company; ?></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="principal.php">
            <img src="img/svg/house.svg " alt="Industrias Canaima" width="22" height="22">
            <span>Home</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Administrar
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <img src="img/svg/setting.svg " alt="Industrias Canaima" width="22" height="22">
            <span>Admin</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Administrar</h6>
                <a class="collapse-item" href="#">Lista de Usuarios</a>
                <a class="collapse-item" href="dispositivosEntrada.php">Lista de Dispositivos</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <img src="img/svg/grafica.svg " alt="Industrias Canaima" width="22" height="22">
            <span>Graficas</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Dispositivos:</h6>
                <a class="collapse-item" href="#">Recibidas</a>
                <a class="collapse-item" href="">En la linea</a>
                <a class="collapse-item" href="">Verificados</a>
                <a class="collapse-item" href="">Entregadas</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <img src="img/svg/table.svg " alt="Industrias Canaima" width="22" height="22">
            <span>Tablas</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tablas de Dispositivos:</h6>
                <a class="collapse-item" href="dispositivosRecibidos.php">Tablas de Recibidos</a>
                <a class="collapse-item" href="dispositivosdeSalida.php">Tabla en la Linea</a>
                <a class="collapse-item" href="dispositivosVerificados.php">Tala de Verificados</a>
                <a class="collapse-item" href="dispositivosEntregados.php">Tabla de Entregados</a>

            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->