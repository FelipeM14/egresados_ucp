
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">
            <div class="img-fluid">
                <img src="{{ asset('img/fo-logo.png') }}" alt="">
            </div>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Inicio</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Pages Collapse Menu -->
    @can('Administrar usuarios')
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-user"></i>
                <span>Acceso</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('roles.index') }}">Roles y permisos</a>
                    <a class="collapse-item" href="{{ route('users.index') }}">Usuarios</a>
                </div>
            </div>
        </li>
    @endcan

    <!-- Nav Item - Utilities Collapse Menu -->
    @can('Realizar ajustes')
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Ajustes</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('categories.index') }}">Configurar categorías</a>
                    <a class="collapse-item" href="{{ route('columns.index') }}">Configurar columnas</a>
                </div>
            </div>
        </li>
    @endcan

    <!-- Nav Item - Pages Collapse Menu -->
    @can('Ver datos')
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-user-graduate"></i>
            <span>Graduados</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                @can('Administrar datos graduados')
                    <a class="collapse-item" href="{{ route('data.index') }}">Datos</a>
                    <a class="collapse-item" href="{{ route('data.import') }}">Importar</a>
                    <a class="collapse-item" href="{{ route('data.export') }}">Reportes</a>
                @endcan
                @can('Consultar datos graduados')
                    <a class="collapse-item" href="{{ route('data.update') }}">Actualización de datos</a>
                @endcan
            </div>
        </div>
    </li>
    @endcan








    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
