@extends('layouts.plantilla')

@section('title', 'Listado de Cursos. SUAM')


@section('content')
    <div class="main-panel ps" id="main-panel">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-11 col-md-offset-6">
                    <br>

                    {{-- <table cellpadding="3" cellspacing="0" border="0" style="width: 67%; margin: 0 auto 2em auto;">
                        <tbody>
                            <tr id="filter_col1" data-column="0">
                                <td align="right">Buscar por ciclo: </td>
                                <td align="left"><input type="text" class="column_filter" id="col0_filter"></td>
                            </tr>
                        </tbody>
                    </table> --}}
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-tittle">Listado de Cursos <a href="{{ route('cursos.create') }}""
                                    class="btn btn-warning btn-sm btn-round">
                                    <i class="now-ui-icons ui-1_simple-add"></i> Nuevo Curso
                                </a></h4>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                        <tr>
                                            <th>Ciclo</th>
                                            <th>Código</th>
                                            <th>Nombre</th>
                                            <th>Instructor</th>
                                            <th>Horario</th>
                                            <th>Cupo</th>
                                            <th>Inscritos</th>
                                            <th>Disponibles</th>
                                            <th>En espera</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $totalCupo = 0;
                                        $totalInscritos = 0;
                                        $totalDisponibles = 0;
                                        $sumaDisponibles = 0;
                                        $sumaEspera = 0; ?>
                                        @foreach ($cursos as $curso)
                                            <tr>
                                                <td>{{ $curso->ciclo }}</td>
                                                <td>{{ $curso->id }}</td>
                                                <td>{{ $curso->nombreCurso }}</td>
                                                <td>{{ $curso->instructor }}</td>
                                                <td>{{ $curso->horario }}</td>
                                                <td>{{ $curso->cupo }}</td>
                                                <td>{{ $curso->inscritos }} </td>
                                                @if ($curso->cupo - $curso->inscritos < 0)
                                                    <td>{{ $disponibles = 0 }}</td>
                                                @else
                                                    <td>{{ $disponibles = $curso->cupo - $curso->inscritos }}</td>
                                                @endif
                                                @if ($curso->inscritos - $curso->cupo < 0)
                                                    <td>{{ $espera = 0 }}</td>
                                                @else
                                                    <td>{{ $espera = $curso->inscritos - $curso->cupo }}</td>
                                                @endif

                                                <td class="td-actions text-right">

                                                    <div class="dropdown">
                                                        <button class="btn btn-info dropdown-toggle btn-round"
                                                            type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            Opciones
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                                            <a href=""{{ route('printLista', ['curso_id' => $cuentaCurso->id]) }}""
                                                                class=" dropdown-item" role="button" rel="tooltip">
                                                                <i class="now-ui-icons files_single-copy-04"></i> Lista de
                                                                Asistencias</a>


                                                            <a href=""{{ route('listadoPorGrupo', ['curso_id' => $cuentaCurso->id]) }}"
                                                                class="dropdown-item" role="button" rel="tooltip">
                                                                <i class="now-ui-icons ui-1_zoom-bold"></i>
                                                                Gestionar</a>


                                                            <a href="{{ route('info-alumnos', ['curso_id' => $cuentaCurso->id]) }}"
                                                                class="dropdown-item " role="button" rel="tooltip">
                                                                <i class="now-ui-icons users_single-02"></i> Datos de
                                                                Contacto</a>

                                                        </div>
                                                    </div>

                                                    <br>

                                                    <p>
                                                        <a href="{{ route('editar-curso', ['curso_id' => $cuentaCurso->id]) }}"
                                                            class="btn btn-primary btn-fab btn-icon btn-round"
                                                            role="button" rel="tooltip">
                                                            {{-- <img src="assets/icons/pen.svg"> --}}
                                                            <i class="now-ui-icons ui-1_settings-gear-63"></i></a>

                                                        <!-- Botón en HTML (lanza el modal en Bootstrap) -->
                                                        <button href="#Modal8" role="button"
                                                            class="btn btn-danger btn-fab btn-icon btn-round"
                                                            data-bs-toggle="modal" rel="tooltip">
                                                            <i class="   now-ui-icons ui-1_simple-remove"></i>
                                                        </button>
                                                    </p>



                                                    <!-- Modal / Ventana / Overlay en HTML -->
                                                    <form
                                                        action="{{ route('delete-curso', ['curso_id' => $cuentaCurso->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div id="Modal8" class="modal fade" tabindex="-1"
                                                            aria-labelledby="Modal8" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <h3>¿Seguro de Eliminar el Curso?</h3>
                                                                        <h3 class="text-warning"><small>{{ $curso->id }}
                                                                                {{ $curso->nombreCurso }}
                                                                                {{ $curso->instructor }}</small></h3>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <p><button type="button" class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Cancelar</button>
                                                                        </p>
                                                                        <button type="submit"
                                                                            class="btn btn-danger">Eliminar</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </td>
                                            </tr>


                                            <input type="hidden" value="{{ $totalCupo = $totalCupo + $curso->cupo }}"
                                                readonly>
                                            <input type="hidden"
                                                value="{{ $totalInscritos = $totalInscritos + $curso->inscritos }}"
                                                readonly>
                                            <input type="hidden"
                                                value="{{ $sumaDisponibles = $sumaDisponibles + $disponibles }}" readonly>
                                            <input type="hidden" value="{{ $sumaEspera = $sumaEspera + $espera }}"
                                                readonly>
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

                    {{-- @section('js')
                    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
                    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

                    <!-- SUM()  Datatables-->
                    <script src="https:////cdn.datatables.net/plug-ins/1.12.1/api/sum().js"></script>

                    <script>
                        /*function filterGlobal() {
                                                $('#cursos')
                                                    .DataTable()
                                                    .search($('#global_filter').val(), $('#global_regex').prop('checked'), $('#global_smart').prop('checked'))
                                                    .draw();
                                            }

                                            function filterColumn(i) {
                                                $('#cursos')
                                                    .DataTable()
                                                    .column(i)
                                                    .search(
                                                        $('#col' + i + '_filter').val(),
                                                        $('#col' + i + '_regex').prop('checked'),
                                                        $('#col' + i + '_smart').prop('checked')
                                                    )
                                                    .draw();
                                            }*/
                        $(document).ready(function() {
                            $('#cursos').DataTable({
                                drawCallback: function() {
                                    //alert("La tabla se está recargando"); 
                                    var api = this.api();
                                    $(api.column(5).footer()).html(
                                        'Total: ' + api.column(5, {
                                            page: 'current'
                                        }).data().sum()

                                    );
                                },
                                "language": {
                                    "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
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

                            /* $('input.global_filter').on('keyup click', function() {
                                 filterGlobal();
                             });

                             $('input.column_filter').on('keyup click', function() {
                                 filterColumn($(this).parents('tr').attr('data-column'));
                             });*/
                        });
                    </script>
                @endsection --}}
                </div>
            </div>
        </div>
    </div>
@endsection
