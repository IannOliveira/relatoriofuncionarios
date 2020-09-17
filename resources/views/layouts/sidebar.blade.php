
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fab fa-themeco"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PROGEO</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Projetos
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li @if($current=="index") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="#">
            <i class="fas fa-book fa-fw"></i>
            <span>BDGD</span></a>
    </li>

    <li @if($current=="projetista") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Projetista</span></a>
    </li>

    <li @if($current=="fiscalizacao") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="#">
            <i class="fas fa-wifi"></i>
            <span>Fiscalização</span></a>
    </li>

    <li @if($current=="cadastro") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="#">
            <i class="fas fa-database"></i>
            <span>Cadastro</span></a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li @if($current=="domicilio") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-home fa-fw"></i>
            <span>Domicílio</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/">Isolado</a>
                <a class="collapse-item" href="/">Não Eletrificado</a>
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
