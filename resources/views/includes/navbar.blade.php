<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold d-flex align-items-center gap-2 {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">ADMIN SENA</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link fw-semibold {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Inicio</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fw-semibold {{ request()->is('area*') || request()->is('teacher*') || request()->is('trainingcenter*') || request()->is('course*') || request()->is('apprentice*') || request()->is('computer*') ? 'active' : '' }}"
             href="#" id="gestionarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-table"></i> Tablas
          </a>
          <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="gestionarDropdown">
            <li><a class="dropdown-item {{ request()->is('area*') ? 'active' : '' }}" href="{{ route('area.index') }}"><i class="bi bi-diagram-3"></i> Áreas</a></li>
            <li><a class="dropdown-item {{ request()->is('teacher*') ? 'active' : '' }}" href="{{ route('teacher.index') }}"><i class="bi bi-person-fill"></i> Profesores</a></li>
            <li><a class="dropdown-item {{ request()->is('trainingcenter*') ? 'active' : '' }}" href="{{ route('trainingcenter.index') }}"><i class="bi bi-building"></i> Centros</a></li>
            <li><a class="dropdown-item {{ request()->is('course*') ? 'active' : '' }}" href="{{ route('course.index') }}"><i class="bi bi-journal-bookmark"></i> Cursos</a></li>
            <li><a class="dropdown-item {{ request()->is('apprentice*') ? 'active' : '' }}" href="{{ route('apprentice.index') }}"><i class="bi bi-people"></i> Aprendices</a></li>
            <li><a class="dropdown-item {{ request()->is('computer*') ? 'active' : '' }}" href="{{ route('computer.index') }}"><i class="bi bi-pc-display"></i> Computadores</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>


