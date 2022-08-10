@extends('layouts.plantilla')

@section('title', 'Editar Curso. SUAM')
@section('content')
    <br>
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-8 col-md-offset-6">
                <br>
                <div class="card border m-8 d-flex justify-content-center align-items-center">
                    <div class="card-header">
                        <h3>Editar Curso <strong>{{ $curso->nombreCurso }}</strong></h2>
                            <hr>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('update-curso', ['curso_id' => $curso->id]) }}" method="post"
                            enctype="multipart/form-data" class="col-lg-9">
                            {!! csrf_field() !!}
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        Debe de llenar todos los campos
                                    </ul>
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="codigoCurso">Código Curso</label>
                                <input type="text" class="form-control" id="codigoCurso" name="codigoCurso"
                                    value="{{ $curso->id }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="name">Nombre Curso</label>
                                <input type="text" class="form-control" id="nombreCurso" name="nombreCurso"
                                    value="{{ $curso->nombreCurso }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Instructor</label>
                                <input type="text" class="form-control" id="instructor" name="instructor"
                                    value="{{ $curso->instructor }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Aula</label>
                                <input type="text" class="form-control" id="aula" name="aula"
                                    value="{{ $curso->aula }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Cupo</label>
                                <input type="text" class="form-control" id="cupo" name="cupo"
                                    value="{{ $curso->cupo }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Día y Horario</label>
                                <input type="text" class="form-control" id="horario" name="horario"
                                    value="{{ $curso->horario }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Guía de Horas</label>
                                <img style="border: 1px solid; color: black;" src="../images/guiaHoras.jpg">
                            </div>
                            <div class="form-group">
                                <label for="name">Clave Hora 1</label>
                                <input type="text" class="form-control" id="hora1" name="hora1"
                                    value="{{ $curso->hora1 }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Clave Hora 2</label>
                                <input type="text" class="form-control" id="hora2" name="hora2"
                                    value="{{ $curso->hora2 }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Clave Hora 3</label>
                                <input type="text" class="form-control" id="hora3" name="hora3"
                                    value="{{ $curso->hora3 }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Ciclo</label>
                                <input type="text" class="form-control" id="ciclo" name="ciclo"
                                    value="{{ $curso->ciclo }}" readonly>
                            </div>
                            <button type="submit" class="btn btn-success">Guardar datos</button>
                            <a href="{{ route('listadoCursos', ['ciclo' => $curso->ciclo]) }}" class="btn btn-danger">
                                Cancelar
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
