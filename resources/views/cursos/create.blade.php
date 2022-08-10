@extends('layouts.plantilla')

@section('title', 'Capturar Alumno. SUAM')

@section('content')
    <div class="main-panel ps" id="main-panel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <div class="card">
                        <div class="card-header">
                            <p class="h2">Capturar Nuevo Curso</p>
                            <hr>
                        </div>

                        <div class="card-body">
                            <form action="/cursos" method="post"">
                                @csrf
                                <div class=" row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="name">Ciclo</label>
                                            <input type="text" id="ciclo" name="ciclo" value="2022A"
                                                class="form-control">
                                            @error('ciclo')
                                                <br>
                                                <small>*{{ $message }}</small>
                                                <br>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="name">Nombre Curso</label>
                                            <input type="text" id="nombreCurso" name="nombreCurso" value=""
                                                class="form-control">
                                            @error('nombreCurso')
                                                <br>
                                                <small>*{{ $message }}</small>
                                                <br>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="name">Instructor</label>
                                            <input type="text" id="instructor" name="instructor" value=""
                                                class="form-control">
                                            @error('instructor')
                                                <br>
                                                <small>*{{ $message }}</small>
                                                <br>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="name">Aula</label>
                                            <input type="text" id="aula" name="aula" value=""
                                                class="form-control">
                                            @error('aula')
                                                <br>
                                                <small>*{{ $message }}</small>
                                                <br>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="name">Cupo</label>
                                            <input type="text" id="cupo" name="cupo" value=""
                                                class="form-control">
                                            @error('cupo')
                                                <br>
                                                <small>*{{ $message }}</small>
                                                <br>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="name">Día y hora</label>
                                            <input type="text" id="horario" name="horario" value=""
                                                class="form-control">
                                            @error('horario')
                                                <br>
                                                <small>*{{ $message }}</small>
                                                <br>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="name">Guía de Horas</label>
                                            <img src="/images/guiaHoras.jpg" class="img-fluid">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="name">Clave Hora 1</label>
                                            <input type="text" id="hora1" name="hora1" value=""
                                                class="form-control">
                                            @error('hora1')
                                                <br>
                                                <small>*{{ $message }}</small>
                                                <br>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="name">Clave Hora 2</label>
                                            <input type="text" id="hora2" name="hora2" value=""
                                                class="form-control">
                                            @error('hora2')
                                                <br>
                                                <small>*{{ $message }}</small>
                                                <br>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="name">Clave Hora 3</label>
                                            <input type="text" id="hora3" name="hora3" value=""
                                                class="form-control">
                                            @error('hora3')
                                                <br>
                                                <small>*{{ $message }}</small>
                                                <br>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">Guardar datos</button>
                                            <a href="/cursos" class="btn btn-danger">Cancelar</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @section('js')
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="{{ asset('datePicker/js/bootstrap-datepicker.js') }}"></script>
            <!-- Languaje -->
            <script src="{{ asset('datePicker/locales/bootstrap-datepicker.es.min.js') }}"></script>

            <script>
                $('.datepicker').datepicker({
                    format: "yyyy/mm/dd",
                    language: "es",
                    autoclose: true
                });
            </script>
        @endsection
    </div>
</div>

@endsection
