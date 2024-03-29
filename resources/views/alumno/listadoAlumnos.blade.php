@extends('layouts.plantilla')

@section('title', 'Listado de Alumnos. SUAM')

@section('css')
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <br><br><br>
                <h2>Listado de Alumnos</h2>
                <br>
                <hr>
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr>

                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Nombre</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Domicilio</th>
                            <th>INE</th>
                            <th>Teléfonos</th>
                            <th>Email</th>
                            <th>Otros Datos</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alumnos as $alumno)
                            <tr>
                                <td>{{ $alumno->apellidoPaterno }} </td>
                                <td>{{ $alumno->apellidoMaterno }} </td>
                                <td>{{ $alumno->nombre }}</td>
                                <td>{!! \Carbon\Carbon::parse($alumno->fechaNacimiento)->format('d-m-Y') !!}</td>
                                <td>{{ $alumno->domicilio }}, {{ $alumno->colonia }}, {{ $alumno->sector }}. CP
                                    {{ $alumno->cp }}. {{ $alumno->municipio }}. {{ $alumno->estado }}</td>
                                <td>
                                    @if ($alumno->ine != null)
                                        Si
                                    @else
                                        No
                                    @endif
                                </td>
                                <td><strong>Casa:</strong> {{ $alumno->telCasa }} <br><strong>Cel:</strong>
                                    {{ $alumno->telCelular }}</td>
                                <td>{{ $alumno->email }}</td>
                                <td>Escolaridad: {{ $alumno->escolaridad }}, Estado Civil: {{ $alumno->estadoCivil }},
                                    Jubilidado: {{ $alumno->jubilado }} Institución:
                                    {{ $alumno->institucionJubilacion }}. Matrícula: {{ $alumno->id }}</td>
                                <td>
                                    <p><a href="{{ route('kardex-alumno', ['alumno_id' => $alumno->id]) }}"
                                            class="btn btn-info btn-round"> Kardex</a></p>
                                    <p><a href="{{ route('editar-alumno', ['alumno_id' => $alumno->id]) }}"
                                            class="btn btn-primary btn-round"> Editar </a></p>
                                    <p><a class="btn btn-primary btn-round"
                                            href="{{ route('elegirCursos', ['alumno_id' => $alumno->id, 'ciclo' => '2022A']) }}">Asignar
                                            Cursos</a></p>

                                    <!-- Botón en HTML (lanza el modal en Bootstrap) -->
                                    <a href="#Modal8{{ $alumno->id }}" role="button" class="btn btn-danger btn-round"
                                        data-toggle="modal">Eliminar</a>

                                    <!-- Modal / Ventana / Overlay en HTML -->
                                    <div id="Modal8{{ $alumno->id }}" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">
                                                        <h6>X</h6>
                                                    </button>

                                                </div>
                                                <div class="modal-body">
                                                    <h3>¿Seguro de Eliminar al Alumno?</h3>
                                                    <h3 class="text-warning"><small>{{ $alumno->apellidoPaterno }}
                                                            {{ $alumno->apellidoMaterno }}
                                                            {{ $alumno->nombre }}</small></h3>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Cancelar</button>
                                                    <a href="{{ route('delete-alumno', ['alumno_id' => $alumno->id]) }}"
                                                        type="button" class="btn btn-danger">Eliminar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach






                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Nombre</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Domicilio</th>
                            <th>INE</th>
                            <th>Teléfonos</th>
                            <th>Email</th>
                            <th>Otros Datos</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>




            </div>
        </div>
    </div>
@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>


    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>

    <script>
        jQuery.extend(jQuery.fn.dataTableExt.oSort, {
            "portugues-pre": function(data) {
                var a = 'a';
                var e = 'e';
                var i = 'i';
                var o = 'o';
                var u = 'u';
                var c = 'c';
                var special_letters = {
                    "Á": a,
                    "á": a,
                    "Ã": a,
                    "ã": a,
                    "À": a,
                    "à": a,
                    "É": e,
                    "é": e,
                    "Ê": e,
                    "ê": e,
                    "Í": i,
                    "í": i,
                    "Î": i,
                    "î": i,
                    "Ó": o,
                    "ó": o,
                    "Õ": o,
                    "õ": o,
                    "Ô": o,
                    "ô": o,
                    "Ú": u,
                    "ú": u,
                    "Ü": u,
                    "ü": u,
                    "ç": c,
                    "Ç": c
                };
                for (var val in special_letters)
                    data = data.split(val).join(special_letters[val]).toLowerCase();
                return data;
            },
            "portugues-asc": function(a, b) {
                return ((a < b) ? -1 : ((a > b) ? 1 : 0));
            },
            "portugues-desc": function(a, b) {
                return ((a < b) ? 1 : ((a > b) ? -1 : 0));
            }
        });
        $(document).ready(function() {
            $('#example').DataTable({
                "columnDefs": [{
                    type: 'portugues',
                    targets: "_all"
                }],
                "order": [
                    [0, 'asc'],
                    [1, 'asc']
                ],
                "language": {
                    "sProcessing": "Procesando...",
                    "sLengthMenu": "Mostrar _MENU_ registros",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "Ningún dato disponible en esta tabla",
                    "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Último",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    },

                    "oAria": {
                        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                },
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel',
                    {
                        extend: 'pdfHtml5',
                        orientation: 'landscape',
                        pageSize: 'LETTER',
                    }

                ]
            });
        });
    </script>
@endsection

@endsection
