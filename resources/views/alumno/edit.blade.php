@extends('layouts.plantilla')

@section('title', 'Editar Alumno. SUAM')

@section('content')
    <div class="main-panel ps" id="main-panel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <div class="card">
                        <div class="card-header">
                            <h2>Editar Información del Alumno: {{ $alumno->nombre }} {{ $alumno->apellidoPaterno }}
                                {{ $alumno->apellidoMaterno }}</h2>
                            <hr>
                        </div>

                        <div class="card-body">
                            <form action="/alumnos/{{ $alumno->id }}" method="post">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="name">Nombre(s)</label>
                                            <input type="text" id="nombre" name="nombre" value="{{ $alumno->nombre }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="name">Apellido Paterno</label>
                                            <input type="text" id="apellidoPaterno" name="apellidoPaterno"
                                                value="{{ $alumno->apellidoPaterno }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="name">Apellido Materno</label>
                                            <input type="text" id="apellidoMaterno" name="apellidoMaterno"
                                                value="{{ $alumno->apellidoMaterno }}" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="date">Fecha de Nacimiento</label>
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="now-ui-icons ui-1_calendar-60"></i>
                                                </div>
                                                <input type="text" id="fechaNacimiento"
                                                    value="{{ $alumno->fechaNacimiento }}" class="form-control datepicker"
                                                    name="fechaNacimiento">
                                                <div class="input-group-addon">
                                                    <span class="glyphicon glyphicon-th"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="estadoCivil">Estado
                                                Civil</label>
                                            <select id="estadoCivil" name="estadoCivil" value="{{ $alumno->estadoCivil }}"
                                                class="form-control">
                                                <option>Soltero(a)</option>
                                                <option>Casado(a)</option>
                                                <option>Divorciado(a)</option>
                                                <option>Viudez</option>
                                                <option>Unión Libre</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group"><label for="name">Domicilio: Calle y número</label>
                                            <input type="text" id="domicilio" name="domicilio"
                                                value="{{ $alumno->domicilio }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group"><label for="name">Colonia</label> <input type="text"
                                                id="colonia" name="colonia" value="{{ $alumno->colonia }}"
                                                class="form-control"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group"><label for="name">Sector</label> <select id="sector"
                                                name="sector" value="{{ $alumno->sector }}" class="form-control">
                                                <option selected="selected">No Definido</option>
                                                <option>Hidalgo</option>
                                                <option>Libertad</option>
                                                <option>Juárez</option>
                                                <option>Reforma</option>
                                                <option>Fuera de Guadalajara</option>
                                            </select></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group"><label for="cp">CP</label> <input type="text" id="cp"
                                                name="cp" value="{{ $alumno->cp }}" class="form-control"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group"><label for="estado">Estado</label> <select id="estado"
                                                name="estado" value="{{ $alumno->estado }}" class="form-control">
                                                <option disabled="disabled">Seleccione uno...</option>
                                                <option value="Aguascalientes">Aguascalientes</option>
                                                <option value="Baja California">Baja California</option>
                                                <option value="Baja California Sur">Baja California Sur</option>
                                                <option value="Campeche">Campeche</option>
                                                <option value="Chiapas">Chiapas</option>
                                                <option value="Chihuahua">Chihuahua</option>
                                                <option value="CDMX">Ciudad de México</option>
                                                <option value="Coahuila">Coahuila</option>
                                                <option value="Colima">Colima</option>
                                                <option value="Durango">Durango</option>
                                                <option value="Estado de México">Estado de México</option>
                                                <option value="Guanajuato">Guanajuato</option>
                                                <option value="Guerrero">Guerrero</option>
                                                <option value="Hidalgo">Hidalgo</option>
                                                <option value="Jalisco" selected="selected">Jalisco</option>
                                                <option value="Michoacán">Michoacán</option>
                                                <option value="Morelos">Morelos</option>
                                                <option value="Nayarit">Nayarit</option>
                                                <option value="Nuevo León">Nuevo León</option>
                                                <option value="Oaxaca">Oaxaca</option>
                                                <option value="Puebla">Puebla</option>
                                                <option value="Querétaro">Querétaro</option>
                                                <option value="Quintana Roo">Quintana Roo</option>
                                                <option value="San Luis Potosí">San Luis Potosí</option>
                                                <option value="Sinaloa">Sinaloa</option>
                                                <option value="Sonora">Sonora</option>
                                                <option value="Tabasco">Tabasco</option>
                                                <option value="Tamaulipas">Tamaulipas</option>
                                                <option value="Tlaxcala">Tlaxcala</option>
                                                <option value="Veracruz">Veracruz</option>
                                                <option value="Yucatán">Yucatán</option>
                                                <option value="Zacatecas">Zacatecas</option>
                                            </select></div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group"><label for="municipio">Municipio</label> <select
                                                id="municipio" name="municipio" value="{{ $alumno->municipio }}"
                                                class="form-control">
                                                <option disabled="disabled" selected="selected">Seleccionar</option>
                                                <option>Guadalajara</option>
                                                <option>Zapopan</option>
                                                <option>Tlaquepaque</option>
                                                <option>Tlajomulco</option>
                                                <option>Tonalá</option>
                                                <option>El Salto</option>
                                                <option>Chapala</option>
                                                <option>Tala</option>
                                                <option>Tuxpan</option>
                                                <option>Poncitlán</option>
                                                <option>Ciudad Guzmán</option>
                                                <option>Puerto Vallarta</option>
                                                <option>Fuera de Jalisco</option>
                                            </select></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group"><label for="ine">Subir imagen de frente de INE</label>
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="now-ui-icons design_image"></i>
                                                </div>
                                            </div>
                                            <input type="file" id="ine" name="ine" value="{{ $alumno->ine }}"
                                                class="form-control" placeholder="En formato de imagen JPG">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group"><label for="telCasa">Teléfono Casa</label> <input
                                                type="text" id="telCasa" name="telCasa" value="{{ $alumno->telCasa }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group"><label for="telCelular">Teléfono Celular</label> <input
                                                type="text" id="telCelular" name="telCelular"
                                                value="{{ $alumno->telCelular }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group"><label for="email">Correo Electrónico</label> <input
                                                type="email" id="email" name="email" value="{{ $alumno->email }}"
                                                class="form-control"></div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group"><label for="escolaridad">Escolaridad</label> <select
                                                id="escolaridad" name="escolaridad" value="{{ $alumno->escolaridad }}"
                                                class="form-control">
                                                <option disabled="disabled" selected="selected">Seleccionar</option>
                                                <option>Primaria</option>
                                                <option>Secundaria</option>
                                                <option>Bachillerato</option>
                                                <option>Bachillerato Técnico</option>
                                                <option>Licenciatura</option>
                                                <option>Maestría</option>
                                                <option>Doctorado</option>
                                            </select></div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group"><label for="contacto">Contacto en Caso de
                                                Emergencia</label>
                                            <input type="text" id="contacto" name="contacto"
                                                value="{{ $alumno->contacto }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group"><label for="jubilado">¿Es Jubilado?</label> <select
                                                id="jubilado" name="jubilado" value="{{ $alumno->jubilado }}"
                                                class="form-control">
                                                <option>Si</option>
                                                <option>No</option>
                                            </select></div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group"><label for="institucionJubilacion">Institución de
                                                Jubilación</label> <input type="text" id="institucionJubilacion"
                                                name="institucionJubilacion" value="{{ $alumno->institucionJubilacion }}"
                                                class="form-control"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><label for="equipo">Con que equipo de cómputo
                                                cuenta</label>
                                            <select id="equipo" name="equipo" value="{{ $alumno->equipo }}"
                                                class="form-control">
                                                <option>Ninguno</option>
                                                <option>Computadora</option>
                                                <option>Tablet</option>
                                                <option>Computadora y Tablet</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label for="internet">Cuenta con Internet</label>
                                            <select id="internet" name="internet" value="{{ $alumno->internet }}"
                                                class="form-control">
                                                <option>No</option>
                                                <option>Si</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">Guardar datos</button>
                                            <a href="/alumnos" class="btn btn-danger">Cancelar</a>
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
