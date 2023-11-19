<!--sidebar-->
<div class="sidebar collapsed position-fixed top-0 bottom-0 bg-light bg-white border-end">
    <div class="d-flex align-items-center p-3 pt-3">
        <h4 class="fw-semibold sidebar-logo">Paragon<b style="color:red; font-size:1.5rem;">+</b></h4>
        <i class="sidebar-toggle fa-solid fa-arrow-left ms-auto fs-5 d-none d-md-block"></i>
    </div>
            <ul class="sidebar-menu m-0 mb-0">
                <li class="sidebar-menu-item {{ 'home' == request()->path() ? 'active' : '' }}">
                    <a href="{{ route ('inicio') }}">
                    <i class="fa-brands fa-slack sidebar-menu-item-icon"></i>
                        Dashboard
                    </a>
                </li>
                <li class="sidebar-menu-divider text-uppercase">Componentes</li>
                <hr class="sidebar-menu-divider-hr">
                    <li class="sidebar-menu-item">
                        <a href="#">
                        <i class="fa-solid fa-newspaper sidebar-menu-item-icon"></i>
                            Consultas rapidas &nbsp;<span class="badge sp-rechazado">Nuevo</span></a>
                        </a>
                    </li>
                    <li class="sidebar-menu-item pt-1 has-dropdown ">
                        <a type="button" href="#">
                        <i class="fa-solid fa-gear sidebar-menu-item-icon"></i>
                            Configuración
                        <i class="fa-solid fa-chevron-down sidebar-menu-item-accordion ms-auto"></i>
                        </a>
                        <ul class="sidebar-dropdown-menu">
                            <li class="sidebar-dropdown-menu-item">
                                <a href="{{ route ('admin.permissions.index') }}">Permisos</a>
                            </li>
                            <li class="sidebar-dropdown-menu-item">
                                <a href="{{ route ('admin.roles.index') }}">Roles</a>
                            </li>
                            <li class="sidebar-dropdown-menu-item">
                                <a href="{{ route ('admin.users.index') }}">Usuarios</a>
                            </li>
                            <li class="sidebar-dropdown-menu-item">
                                <a href="#">Dependencias</a>
                            </li>
                            <li class="sidebar-dropdown-menu-item">
                                <a href="#">Sedes</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="sidebar-menu-item pt-1 has-dropdown">
                        <a href="#">
                        <i class="fa-solid fa-folder sidebar-menu-item-icon"></i>
                            Gestión de trámites
                        <i class="fa-solid fa-chevron-down sidebar-menu-item-accordion ms-auto"></i>
                        </a>
                        <ul class="sidebar-dropdown-menu">
                            <li class="sidebar-dropdown-menu-item">
                                <a href="#">Nuevo expediente &nbsp;<span class="badge sp-finalizado">Nuevo</span></a> 
                            </li>
                            <li class="sidebar-dropdown-menu-item">
                                <a href="#">Bandeja de entrada</a>
                            </li>
                        </ul>
                        
                    </li>
                    <li class="sidebar-menu-item pt-1">
                        <a href="#">
                        <i class="fa-solid fa-user-tie sidebar-menu-item-icon"></i>
                            Seguimiento de trámites
                        </a>
                    </li>
                    <li class="sidebar-menu-item pt-1 has-dropdown">
                        <a href="#">
                        <i class="fa-solid fa-circle-question sidebar-menu-item-icon"></i>
                            Ayuda
                        <i class="fa-solid fa-chevron-down sidebar-menu-item-accordion ms-auto"></i>
                        </a>
                        <ul class="sidebar-dropdown-menu">
                            <li class="sidebar-dropdown-menu-item">
                                <a href="#">Centro de ayuda</a>
                            </li>
                        </ul>
                    </li>
            </ul>
</div>
<div class="sidebar-overlay"></div>
<!--/sidebar-->