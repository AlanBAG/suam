@extends('layouts.plantilla')

@section('title', 'Listado de Inscritos. SUAM')
@section('content')
    @if (Auth::user()->role == 'admin')

        <div class="container-fluid col-12 col-md-10 col-xl-9 py-md-5 pl-md-7 bd-content">
            <div class="row">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            <div class="row">
                <hr>
                <h2>Lista de Alumnos Inscritos en el Curso</h2>
                <br>
                <hr>


                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Instructor</th>
                            <th scope="col">Horario</th>
                            <th scope="col">Cupo</th>
                            <th scope="col">Ciclo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{ $curso->id }}</th>
                            <td>{{ $curso->nombreCurso }}</td>
                            <td>{{ $curso->instructor }}</td>
                            <td>{{ $curso->horario }}</td>
                            <td>{{ $curso->cupo }}</td>
                            <td>{{ $curso->ciclo }}</td>
                        </tr>
                    </tbody>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">Núm.</th>
                                <th scope="col">Código</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido Paterno</th>
                                <th scope="col">Apellido Materno</th>
                                <th scope="col">Tel. Celular</th>
                                <th scope="col">Email</th>
                                <th scope="col">Estatus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $cont = 0; ?>
                            @foreach ($listaPorGrupo as $listaPorGrup)
                                <tr>
                                    <th scope="row">{{ $cont = $cont + 1 }}</th>
                                    <th scope="row">{{ $listaPorGrup->id }}</th>
                                    <td>{{ $listaPorGrup->apellidoPaterno }}</td>
                                    <td>{{ $listaPorGrup->apellidoMaterno }}</td>
                                    <td>{{ $listaPorGrup->nombre }}</td>
                                    <td>{{ $listaPorGrup->telCelular }}</td>
                                    <td>{{ $listaPorGrup->email }}</td>
                                    <td>{{ $listaPorGrup->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>


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
                $(document).ready(function() {
                    $('#example').DataTable({
                        "order": [
                            [7, "desc"],
                            [2, "asc"]
                        ],
                        pageLength: 100,
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
                            'copy', 'excel', 'pdf'
                        ]
                    });
                });
            </script>
        @endsection
    @else
        Acceso No válido
    @endif

@endsection
