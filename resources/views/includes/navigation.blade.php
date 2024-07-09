<ul class="navbar-nav">
    <li class="nav-item {{ Request::route()->named('dashboard') ? 'active' : '' }}">
        <a class="nav-link {{ Request::route()->named('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
            <i class="ni ni-tv-2 text-primary"></i> Dashboard
        </a>
    </li>
</ul>
<!-- Divider -->
<hr class="my-3">
<!-- Heading -->
<h6 class="navbar-heading text-muted">Panel de Administración</h6>
<ul class="navbar-nav">
    <li class="nav-item {{ Request::route()->named('ejemplo.index') ? 'active' : '' }}">
        <a class="nav-link {{ Request::route()->named('ejemplo.index') ? 'active' : '' }}"
            href="{{ route('ejemplo.index') }}">
            <i class="fas fa-book text-green"></i> Ejemplo
        </a>
    </li>
</ul>

<!-- Divider -->
<hr class="my-3">
<!-- Heading -->
<h6 class="navbar-heading text-muted">Otras Acciones</h6>
<!-- Navigation -->
<ul class="navbar-nav mb-md-3">
    <li class="nav-item {{ Request::route()->named('centers.index') ? 'active' : '' }}">
        <a class="nav-link {{ Request::route()->named('centers.index') ? 'active' : '' }}"
            href="{{ route('centers.index') }}">
            <i class="ni ni-single-02 text-red"></i> Centros
        </a>
    </li>
    <li class="nav-item {{ Request::route()->named('sectors.index') ? 'active' : '' }}">
        <a class="nav-link {{ Request::route()->named('sectors.index') ? 'active' : '' }}"
            href="{{ route('sectors.index') }}">
            <i class="ni ni-single-02 text-red"></i> Sectores
        </a>
    </li>
    <li class="nav-item {{ Request::route()->named('careers.index') ? 'active' : '' }}">
        <a class="nav-link {{ Request::route()->named('careers.index') ? 'active' : '' }}"
            href="{{ route('careers.index') }}">
            <i class="ni ni-single-02 text-red"></i> Carreras
        </a>
    </li>
    <li class="nav-item {{ Request::route()->named('specialties.index') ? 'active' : '' }}">
        <a class="nav-link {{ Request::route()->named('specialties.index') ? 'active' : '' }}"
            href="{{ route('specialties.index') }}">
            <i class="ni ni-single-02 text-red"></i> Especialidades
        </a>
    </li>
    <li class="nav-item {{ Request::route()->named('subjects.index') ? 'active' : '' }}">
        <a class="nav-link {{ Request::route()->named('subjects.index') ? 'active' : '' }}"
            href="{{ route('subjects.index') }}">
            <i class="ni ni-single-02 text-red"></i> Materias
        </a>
    </li>
    <li class="nav-item {{ Request::route()->named('students.index') ? 'active' : '' }}">
        <a class="nav-link {{ Request::route()->named('students.index') ? 'active' : '' }}"
            href="{{ route('students.index') }}">
            <i class="ni ni-single-02 text-red"></i> Estudiantes
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt text-gray"></i> Cerrar Sesión
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>
</ul>
