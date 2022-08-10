@extends('layouts.plantilla')

@section('title', 'Inicio. SUAM')

@section('content')
    <br>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <br><br>
                @if (Auth::user()->role != 'admin')
                    <h5>Debido a la actual contingencia por COVID-19, la modalidad de estudios ser&aacute &uacutenicamente
                        virtual durante el presente calendario. Por lo tanto, es indispensable contar con un dispositivo
                        m&oacutevil y tener buen manejo del Whatsapp.
                        En caso de querer tomar cualquier curso de computaci&oacuten o smartphone es necesario que usted
                        cuente con el equipo adecuado: Computadora y conexi&oacuten a Internet</h5>
                @endif
                <div class="card">
                    @if (Auth::user()->role != 'admin')

                        <div class="card-header">
                            <strong>Alumno: </strong>{{ Auth::user()->name }}
                        </div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                                Bienvenido a su Tablero Personal
                            @endif
                            @if (session('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}

                                </div>
                            @endif
                            <br>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="3" scope="col">Menú</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><br>Expediente</th>
                                        <td><br>Le permite ver sus datos personales registrados y sus materias inscritas
                                        </td>
                                        <td><br><a
                                                href="{{ route('kardex-alumno', ['alumno_id' => Auth::user()->IdAlumno]) }}"
                                                class="btn btn-info btn-round">Expendiente</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><br>Inscribir Materias</th>
                                        <td><br>Permite inscribirse a las materias ofertadas en el semestre actual</td>
                                        <td><br><a class="btn btn-primary btn-round"
                                                href="{{ route('elegirCursos', ['alumno_id' => Auth::user()->IdAlumno, 'ciclo' => '2022A']) }}">Inscribir
                                                Materias</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><br>Imprimir Materias Inscritas</th>
                                        <td><br>Permite imprimir las materias inscritas en el ciclo escolar y le muestra su
                                            usuario y contraseña para el sistema</td>
                                        <td><br><a class="btn btn-primary btn-round"
                                                href="{{ route('print', ['alumno_id' => Auth::user()->IdAlumno]) }}"
                                                target="_blank">Imprimir Materias</a></td>
                                    </tr>
                                </tbody>
                            </table>


                        </div>
                </div>
            @else
                <div class="card card-plain">
                    <div class="card-header">
                        <h4 class="card-title"> Panel de Administración.</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">

                                    <tr>
                                        <th>
                                            <b> Menú </b>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>
                                            Listado de Cursos
                                        </th>
                                        <td>
                                            Permite gestionar los cursos para darlos de alta, eliminar y editar
                                        </td>
                                        <td colspan="3">
                                            <a class="btn btn-warning btn-round"
                                                href="{{ route('listadoCursos', ['ciclo' => '2022A']) }}">Listado
                                                de Cursos</a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Listado de Alumnos
                                        </th>
                                        <td>
                                            Permite capturar, modificar y eliminar Alumnos
                                        </td>
                                        <td colspan="3">
                                            <a class="btn btn-info btn-round" href="{{ route('listadoAlumnos') }}">Listado
                                                de
                                                Alumnos</a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Capturar Alumno
                                        </th>
                                        <td>
                                            Capturar un nuevo Alumno
                                        </td>
                                        <td colspan="3">
                                            <a href="{{ route('createAlumno') }}" class="btn btn-success btn-round">
                                                Capturar Alumno </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Estadísticas Generales
                                        </th>
                                        <td>
                                            Permite observar el número de personas que cuentan con internet, que
                                            tipo de
                                            equipo y si son jubilados
                                        </td>
                                        <td colspan="3">
                                            <a href="{{ route('estadisticas') }}" class="btn btn-primary btn-round">
                                                Estadísticas
                                                Generales
                                            </a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            @endif
                        </div>
                    </div>
                    <div class="card-footer">
                        @include('layouts.partials.footer')
                    </div>
                </div>
            </div>
        </div>


    </div>


@endsection
