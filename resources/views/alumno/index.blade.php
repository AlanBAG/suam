@extends('layouts.plantilla')

@section('title', 'Listado de Alumnos. SUAM')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" />
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 col-md-offset-1">
                <br>
                <p>
                    <a href="{{ route('home') }}" class="btn btn-primary">
                        < Regresar</a>
                </p>
                <h2>Listado de Alumnos</h2>
                <br>
                <hr>
                <table id="alumnos" class="table table-light table-striped table-bordered shadow-lg mt-4" style="width:100%">
                    <thead class="bg-primary text-black">
                        <tr>
                            <th scope="col">Apellido Paterno</th>
                            <th scope="col">Apellido Materno</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Fecha de Nacimiento</th>
                            <th scope="col">Domicilio</th>
                            <th scope="col">INE</th>
                            <th scope="col">Teléfonos</th>
                            <th scope="col">Email</th>
                            <th scope="col">Otros Datos</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alumnos as $alumno)
                            <tr>
                                <td>{{ $alumno->apellidoPaterno }}</td>
                                <td>{{ $alumno->apellidoMaterno }}</td>
                                <td>{{ $alumno->nombre }}</td>
                                <td>{{ $alumno->fechaNacimiento }}</td>
                                <td>{{ $alumno->domicilio }}</td>
                                <td>
                                    <!--{{ $alumno->ine }}-->
                                </td>
                                <td><b>Casa:</b> {{ $alumno->telCasa }} <b>Cel:</b> {{ $alumno->telCelular }}
                                </td>
                                <td>{{ $alumno->email }}</td>
                                <td>{{ $alumno->escolaridad }}</td>
                                <td>
                                    <p><a href="" class="btn btn-success">Kardex</a></p>
                                    <p><a href="/alumnos/{{ $alumno->id }}/edit" class="btn btn-primary"> Editar </a></p>
                                    <p><a class="btn btn-primary" href="">Asignar Cursos</a></p>

                                    <!-- Botón en HTML (lanza el modal en Bootstrap) -->
                                    <a href="#Modal8" role="button" class="btn btn-danger"
                                        data-bs-toggle="modal">Eliminar</a>

                                    <!-- Modal / Ventana / Overlay en HTML -->
                                    <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div id="Modal8" class="modal fade" tabindex="-1" aria-labelledby="Modal8"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h3>¿Seguro de Eliminar al Alumno?</h3>
                                                        <h3 class="text-warning"><small>{{ $alumno->nombre }}
                                                                {{ $alumno->apellidoPaterno }}
                                                                {{ $alumno->apellidoMaterno }}</small></h3>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Cancelar</button>
                                                        <a href="" type="button" class="btn btn-danger">Eliminar</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            @section('js')
                <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

                <script>
                    $(document).ready(function() {
                        $('#alumnos').DataTable({
                            "language": {
                                "info": "_TOTAL_ registros",
                                "search": "Buscar",
                                "paginate": {
                                    "next": "Siguiente",
                                    "previous": "Anterior",
                                },
                                "lengthMenu": 'Mostrar <select >' +
                                    '<option value="5">5</option>' +
                                    '<option value="10">10</option>' +
                                    '<option value="20">20</option>' +
                                    '<option value="-1">Todos</option>' +
                                    '</select> registros',
                                "loadingRecords": "Cargando...",
                                "processing": "Procesando...",
                                "emptyTable": "No hay datos",
                                "zeroRecords": "No hay coincidencias",
                                "infoEmpty": "",
                                "infoFiltered": ""
                            }
                        });

                    });
                </script>
            @endsection
        </div>
    </div>
</div>

@endsection
