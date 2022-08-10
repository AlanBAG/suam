@extends('layouts.plantilla')

@section('title', 'Selección de Cursos. SUAM')
@section('content')
    <br>
    <div class="content">
        {{-- Quitar lo de admin --}}
        @if (Auth::check() && Auth::user()->role == 'admin')
            <div class="row">
                <div class="col-md-12">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <br>
                    <h3>Selección de Cursos {{ $ciclo }}</h3>

                    <h4><strong>Alumno: </strong>{{ $alumno->apellidoPaterno }} {{ $alumno->apellidoMaterno }}
                        {{ $alumno->nombre }}</h4>
                    <p><a href="{{ route('kardex-alumno', ['alumno_id' => $alumno->id]) }}" class="btn btn-success">Kardex</a>

                        <a href="{{ url()->previous() }}" class="btn btn-danger">
                            <i class="now-ui-icons arrows-1_minimal-left"></i> Atras</a>
                    </p>
                    <form action="#" method="post" enctype="multipart/form-data" class="col-md-12">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <input type="hidden" class="form-control" id="IdAlumno" name="IdAlumno"
                                value="{{ $alumno->id }}" readonly>
                            <input type="hidden" class="form-control" id="role" name="role"
                                value="{{ Auth::user()->role }}" readonly>
                        </div>
                        <div class="form-group">
                            @if ($cuentaMateriasInscritas == 0)
                                <label>
                                    <H5>EL ALUMNO NO ESTÁ INSCRITO A NINGÚN CURSO.</H5>
                                </label>
                            @else
                                <label>
                                    <H5>EL ALUMNO YA ESTÁ INSCRITO EN {{ $cuentaMateriasInscritas }} CURSO(S).</H5>
                                </label>
                            @endif
                            @if ($cuentaMateriasInscritas < 3)
                                <label>
                                    <H5>PUEDE INSCRIBIRSE EN {{ 3 - $cuentaMateriasInscritas }} CURSO(S)</H5>
                                </label>
                            @else
                                <label>
                                    <H5>YA NO SE PUEDE INSCRIBIR EN MÁS CURSOS</H5>
                                </label>
                            @endif
                            @if ($cuentaMateriasInscritas > 0)
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col" colspan="2">Materias Inscritas</th>
                                            <th scope="col">Horario</th>
                                            <th scope="col">Estatus:</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($MateriasInscritas as $MateriasInscrita)
                                            <tr>
                                                <th scope="row">{{ $MateriasInscrita->ciclo }}</th>
                                                <td>{{ $MateriasInscrita->nombreCurso }}</td>
                                                <td> {{ $MateriasInscrita->horario }}</td>
                                                <td> {{ $MateriasInscrita->status }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Ciclo</th>
                                    <th scope="col">Código Curso</th>
                                    <th scope="col">Curso</th>
                                    <th scope="col">Horario</th>
                                    <th scope="col">Inscripción</th>
                                    <th scope="col">Comentarios</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $cont = 0; ?>
                                @foreach ($cuentaCursos as $cuentaCurso)
                                    <tr>
                                        <th scope="row">{{ $cuentaCurso->ciclo }}</th>
                                        <th scope="row">{{ $cuentaCurso->id }}</th>

                                        <th scope="row">{{ $cuentaCurso->nombreCurso }}</th>
                                        <td>{{ $cuentaCurso->horario }}.</td>
                                        <?php $cont++; ?>
                                        <td align="center">
                                            <div class="form-group">

                                                <p><a href="{{ route('saveSeleccionCursos', ['alumno_id' => $alumno->id, 'curso_id' => $cuentaCurso->id, 'ciclo' => $ciclo]) }}"
                                                        class="btn btn-primary"> Inscribirse </a></p>

                                            </div>
                                        </td>
                                        <td>
                                            @if ($cuentaCurso->cupo - $cuentaCurso->inscritos <= 0)
                                                Sin Lugares Disponiles.
                                            @endif
                                            @if (Auth::user()->role == 'admin')
                                                Disponibles: {{ $cuentaCurso->cupo - $cuentaCurso->inscritos }}
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                        <a href="{{ route('home') }}" class="btn btn-primary">Regresar</a>
                        @if (Auth::user()->role == 'admin')
                            <a href="{{ route('listadoCursos', ['ciclo' => $ciclo]) }}" class="btn btn-success">Listado de
                                Cursos</a>
                        @endif
                    </form>
                    <br>
                @else
                    <br><br>
                    <h2> Inscripciones cerradas</h2>
                    <hr>
                    <p>CENTRO UNIVERSITARIO DE CIENCIAS SOCIALES Y HUMANIDADES.</p>
                    <p>Sistema Universitario del Adulto Mayor (SUAM)</p>
                    <p>Guanajuato 1047 Guadalajara (México)</p>
                    <p> En caso de tener alguna duda o desea que le apoyen en el registro puede contactar por teléfono o
                        whatsapp a
                        los
                        números 33-31-06-71-60 y 33-12-25-33-79</p>
        @endif
    </div>
    </div>
    </div>
@endsection
