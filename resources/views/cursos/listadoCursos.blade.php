@extends('layouts.plantilla')

@section('title', 'Listado de Cursos. SUAM')

@section('content')
    <br>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="card">
                    <div class="card-header">
                        <h2>Listado de Cursos {{ $ciclo }}</h2>
                        <a href="{{ route('createCurso', ['ciclo' => '2022A']) }}" class="btn btn-warning btn-sm btn-round">
                            <i class="now-ui-icons ui-1_simple-add"></i> Nuevo Curso
                        </a>

                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Código</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Instructor</th>
                                        <th scope="col">Horario</th>
                                        <th scope="col">Cupo</th>
                                        <th scope="col">Inscritos</th>
                                        <th scope="col">Disponibles</th>
                                        <th scope="col">En Espera</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $totalCupo = 0;
                                    $totalInscritos = 0;
                                    $totalDisponibles = 0;
                                    $sumaDisponibles = 0;
                                    $sumaEspera = 0; ?>
                                    @foreach ($cuentaCursos as $cuentaCurso)
                                        <tr>
                                            <th scope="row">{{ $cuentaCurso->id }}</th>
                                            <td>{{ $cuentaCurso->nombreCurso }}</td>
                                            <td>{{ $cuentaCurso->instructor }}</td>
                                            <td>{{ $cuentaCurso->horario }}</td>
                                            <td>{{ $cuentaCurso->cupo }}</td>
                                            <td>{{ $cuentaCurso->inscritos }}</td>
                                            @if ($cuentaCurso->cupo - $cuentaCurso->inscritos < 0)
                                                <td>{{ $disponibles = 0 }}</td>
                                            @else
                                                <td>{{ $disponibles = $cuentaCurso->cupo - $cuentaCurso->inscritos }}
                                                </td>
                                            @endif
                                            @if ($cuentaCurso->inscritos - $cuentaCurso->cupo < 0)
                                                <td>{{ $espera = 0 }}</td>
                                            @else
                                                <td>{{ $espera = $cuentaCurso->inscritos - $cuentaCurso->cupo }}</td>
                                            @endif
                                            <td>

                                                <div class="btn-group dropstart">
                                                    <button type="button" class="btn btn-info btn-round dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Opciones
                                                    </button>
                                                    <ul class="dropdown-menu">

                                                        <a href="{{ route('printLista', ['curso_id' => $cuentaCurso->id]) }}"
                                                            class=" dropdown-item" role="button" rel="tooltip">
                                                            <i class="now-ui-icons files_single-copy-04"></i> Lista de
                                                            Asistencias</a>


                                                        <a href="{{ route('listadoPorGrupo', ['curso_id' => $cuentaCurso->id]) }}"
                                                            class="dropdown-item" role="button" rel="tooltip">
                                                            <i class="now-ui-icons ui-1_zoom-bold"></i>
                                                            Gestionar</a>


                                                        <a href="{{ route('info-alumnos', ['curso_id' => $cuentaCurso->id]) }}"
                                                            class="dropdown-item " role="button" rel="tooltip">
                                                            <i class="now-ui-icons users_single-02"></i> Datos de
                                                            Contacto</a>

                                                    </ul>
                                                </div>
                                                <br>
                                                <br>

                                                <p>
                                                    <a href="{{ route('editar-curso', ['curso_id' => $cuentaCurso->id]) }}"
                                                        class="btn btn-primary btn-fab btn-icon btn-round" role="button"
                                                        rel="tooltip">
                                                        {{-- <img src="assets/icons/pen.svg"> --}}
                                                        <i class="now-ui-icons ui-1_settings-gear-63"></i></a>

                                                    <!-- Botón en HTML (lanza el modal en Bootstrap) -->
                                                    <a href="{{ route('delete-curso', ['curso_id' => $cuentaCurso->id]) }}"
                                                        role="button" class="btn btn-danger btn-fab btn-icon btn-round"
                                                        rel="tooltip">
                                                        <i class="   now-ui-icons ui-1_simple-remove"></i>
                                                    </a>
                                                </p>
                                            </td>
                                        </tr>


                                        <input type="hidden" value="{{ $totalCupo = $totalCupo + $cuentaCurso->cupo }}"
                                            readonly>
                                        <input type="hidden"
                                            value="{{ $totalInscritos = $totalInscritos + $cuentaCurso->inscritos }}"
                                            readonly>
                                        <input type="hidden"
                                            value="{{ $sumaDisponibles = $sumaDisponibles + $disponibles }}" readonly>
                                        <input type="hidden" value="{{ $sumaEspera = $sumaEspera + $espera }}" readonly>
                                    @endforeach
                                    <td colspan="4"></td>
                                    <td>{{ $totalCupo }}</td>
                                    <td>{{ $totalInscritos }}</td>
                                    <td>{{ $sumaDisponibles }}</td>
                                    <td>{{ $sumaEspera }}</td>
                                    <td colspan="4"></td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
