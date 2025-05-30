@extends('layouts.app')

@section('title', 'Show Training Center - ADMIN SENA')

@section('content')
    <div class="container mb-3">
        <h4 class="mb-3 fw-bold text-primary-emphasis">
            Detalles del Centro <span class="text-dark">#{{ $trainingcenter->id }}</span>
        </h4>

        <div class="table-responsive rounded-4 shadow-sm border border-2 border-light-subtle">
            <table class="table table-hover align-middle text-center mb-0">
                <thead class="table-primary text-white">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Ubicacion</th>
                        <th scope="col">Profesor Asigando</th>
                        <th scope="col">Curso Asigando</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr>
                        <td class="fw-semibold">{{ $trainingcenter['id'] }}</td>
                        <td class="fw-semibold">{{ $trainingcenter['name'] }}</td>
                        <td class="fw-semibold">{{ $trainingcenter['location'] }}</td>
                        <td>
                            @if ($trainingcenter->teachers->isNotEmpty())
                                @if ($trainingcenter->teachers->count() > 2)
                                    <button class="btn btn-sm btn-success rounded-pill px-3" data-bs-toggle="modal"
                                        data-bs-target="#teachersModal">
                                        <i class="bi bi-person-check-fill me-1"></i>
                                        {{ $trainingcenter->teachers->count() }} asignados
                                    </button>
                                @else
                                    @foreach ($trainingcenter->teachers as $teacher)
                                        <span
                                            class="badge bg-success-subtle text-success-emphasis border border-success-subtle rounded-pill px-3 py-2 fs-6 mb-1 d-inline-block">
                                            <i class="bi bi-person-check-fill me-1"></i> {{ $teacher->name }}
                                        </span>
                                    @endforeach
                                @endif
                            @else
                                <span
                                    class="badge bg-danger-subtle text-danger-emphasis border border-danger-subtle rounded-pill px-3 py-2 fs-6">
                                    <i class="bi bi-x-circle-fill me-1"></i> No asignado
                                </span>
                            @endif
                        </td>
                        <td>
                            @if ($trainingcenter->courses->isNotEmpty())
                                @if ($trainingcenter->courses->count() > 2)
                                    <button class="btn btn-sm btn-success rounded-pill px-3" data-bs-toggle="modal"
                                        data-bs-target="#coursesModal">
                                        <i class="bi bi-person-check-fill me-1"></i>
                                        {{ $trainingcenter->courses->count() }} asignados
                                    </button>
                                @else
                                    @foreach ($trainingcenter->courses as $course)
                                        <span
                                            class="badge bg-success-subtle text-success-emphasis border border-success-subtle rounded-pill px-3 py-2 fs-6 mb-1 d-inline-block">
                                            <i class="bi bi-person-check-fill me-1"></i> {{ $course->course_number }}
                                        </span>
                                    @endforeach
                                @endif
                            @else
                                <span
                                    class="badge bg-danger-subtle text-danger-emphasis border border-danger-subtle rounded-pill px-3 py-2 fs-6">
                                    <i class="bi bi-x-circle-fill me-1"></i> No asignado
                                </span>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-4 text-end">
            <a href="{{ route('trainingcenter.index') }}" class="btn btn-outline-primary rounded-pill px-4 py-2 shadow-sm">
                <i class="bi bi-arrow-left-circle me-2"></i> Volver al listado
            </a>
        </div>
    </div>
@if($trainingcenter->teachers->count() > 2)
<div class="modal fade" id="teachersModal" tabindex="-1" aria-labelledby="teachersModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content border border-success-subtle">
      <div class="modal-header">
        <h5 class="modal-title" id="teachersModalLabel">Profesores Asignados</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body" style="max-height: 60vh; overflow-y: auto;">
        <ul class="list-group list-group-flush">
          @foreach($trainingcenter->teachers as $teacher)
            <li class="list-group-item"><i class="bi bi-person-fill me-2 text-success"></i> {{ $teacher->name }}</li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>

@endif

@if($trainingcenter->courses->count() > 2)
<div class="modal fade" id="coursesModal" tabindex="-1" aria-labelledby="coursesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border border-success-subtle">
      <div class="modal-header">
        <h5 class="modal-title" id="coursesModalLabel">Cursos Asignados</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body" style="max-height: 60vh; overflow-y: auto;">
        <ul class="list-group list-group-flush">
          @foreach($trainingcenter->courses as $course)
            <li class="list-group-item"><i class="bi bi-book-fill me-2 text-success"></i> {{ $course->course_number }}</li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
@endif
@endsection
