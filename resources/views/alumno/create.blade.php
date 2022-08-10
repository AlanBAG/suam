@extends('layouts.plantilla')

@section('title', 'Capturar Alumno. SUAM')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="card">
                    <div class="card-header">
                        <p class="h2">Registro al SUAM</p>

                        <h4>IMPORTANTE: Si ya fue alumno nuestro, por favor acceda con su nombre de usuario y
                            contraseña, de no
                            recordarlos comuníquese con administración a los siguientes números 33-31-06-71-60 o al
                            33-14-08-43-24
                        </h4>
                        <hr>
                    </div>

                    <div class="card-body">
                        <form action="/alumnos" method="post"">
                            @csrf
                            <p>* Campos Obligatorios</p>
                            <div class=" row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">Nombre(s)*</label>
                                        <input type="text" id="nombre" name="nombre" value=""
                                            class="form-control">
                                        @error('nombre')
                                            <br>
                                            <small>*{{ $message }}</small>
                                            <br>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">Apellido Paterno*</label>
                                        <input type="text" id="apellidoPaterno" name="apellidoPaterno" value=""
                                            class="form-control">
                                        @error('apellidoPaterno')
                                            <br>
                                            <small>*{{ $message }}</small>
                                            <br>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">Apellido Materno*</label>
                                        <input type="text" id="apellidoMaterno" name="apellidoMaterno" value=""
                                            class="form-control">
                                        @error('apellidoMaterno')
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
                                        <label for="date">Fecha de Nacimiento</label>
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <i class="now-ui-icons ui-1_calendar-60"></i>
                                            </div>
                                            <input type="text" id="fechaNacimiento" class="form-control datepicker"
                                                name="fechaNacimiento">
                                            <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                        </div>
                                        @error('fechaNacimiento')
                                            <br>
                                            <small>*{{ $message }}</small>
                                            <br>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="estadoCivil">Estado
                                            Civil*</label>
                                        <select id="estadoCivil" name="estadoCivil" class="form-control">
                                            <option>Soltero(a)</option>
                                            <option>Casado(a)</option>
                                            <option>Divorciado(a)</option>
                                            <option>Viudez</option>
                                            <option>Unión Libre</option>
                                        </select>
                                        @error('estadoCivil')
                                            <br>
                                            <small>*{{ $message }}</small>
                                            <br>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group"><label for="name">Domicilio: Calle y número*</label>
                                        <input type="text" id="domicilio" name="domicilio" value=""
                                            class="form-control">
                                        @error('domicilio')
                                            <br>
                                            <small>*{{ $message }}</small>
                                            <br>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group"><label for="name">Colonia*</label>
                                        <input type="text" id="colonia" name="colonia" value=""
                                            class="form-control">
                                        @error('colonia')
                                            <br>
                                            <small>*{{ $message }}</small>
                                            <br>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group"><label for="name">Sector*</label>
                                        <select id="sector" name="sector" class="form-control">
                                            <option selected="selected">No Definido</option>
                                            <option>Hidalgo</option>
                                            <option>Libertad</option>
                                            <option>Juárez</option>
                                            <option>Reforma</option>
                                            <option>Fuera de Guadalajara</option>
                                        </select>
                                        @error('sector')
                                            <br>
                                            <small>*{{ $message }}</small>
                                            <br>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group"><label for="cp">CP*</label>
                                        <input type="text" id="cp" name="cp" value=""
                                            class="form-control">
                                        @error('cp')
                                            <br>
                                            <small>*{{ $message }}</small>
                                            <br>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group"><label for="estado">Estado*</label>
                                        <select id="estado" name="estado" class="form-control">
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
                                        </select>
                                        @error('estado')
                                            <br>
                                            <small>*{{ $message }}</small>
                                            <br>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group"><label for="municipio">Municipio*</label>
                                        <select id="municipio" name="municipio" class="form-control">
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
                                        </select>
                                        @error('municipio')
                                            <br>
                                            <small>*{{ $message }}</small>
                                            <br>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group"><label for="ine">Subir imagen de frente de
                                            INE</label>
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="now-ui-icons design_image"></i>
                                            </div>
                                        </div>
                                        <input type="file" id="ine" name="ine" value=""
                                            class="form-control" placeholder="En formato de imagen JPG">
                                        @error('ine')
                                            <br>
                                            <small>*{{ $message }}</small>
                                            <br>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group"><label for="telCasa">Teléfono Casa</label> <input
                                            type="text" id="telCasa" name="telCasa" value=""
                                            class="form-control">
                                        @error('telCasa')
                                            <br>
                                            <small>*{{ $message }}</small>
                                            <br>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group"><label for="telCelular">Teléfono Celular*</label> <input
                                            type="text" id="telCelular" name="telCelular" value=""
                                            class="form-control">
                                        @error('telCelular')
                                            <br>
                                            <small>*{{ $message }}</small>
                                            <br>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group"><label for="email">Correo Electrónico</label>
                                        <input type="email" id="email" name="email" value=""
                                            class="form-control">
                                        @error('email')
                                            <br>
                                            <small>*{{ $message }}</small>
                                            <br>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group"><label for="escolaridad">Escolaridad*</label>
                                        <select id="escolaridad" name="escolaridad" value="" class="form-control">
                                            <option disabled="disabled" selected="selected">Seleccionar</option>
                                            <option>Primaria</option>
                                            <option>Secundaria</option>
                                            <option>Bachillerato</option>
                                            <option>Bachillerato Técnico</option>
                                            <option>Licenciatura</option>
                                            <option>Maestría</option>
                                            <option>Doctorado</option>
                                        </select>
                                        @error('escolaridad')
                                            <br>
                                            <small>*{{ $message }}</small>
                                            <br>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group"><label for="contacto">Contacto en Caso de
                                            Emergencia*</label>
                                        <input type="text" id="contacto" name="contacto" value=""
                                            class="form-control">
                                        @error('contacto')
                                            <br>
                                            <small>*{{ $message }}</small>
                                            <br>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group"><label for="jubilado">¿Es Jubilado?*</label>
                                        <select id="jubilado" name="jubilado" class="form-control">
                                            <option>Si</option>
                                            <option>No</option>
                                        </select>
                                        @error('jubilado')
                                            <br>
                                            <small>*{{ $message }}</small>
                                            <br>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="institucionJubilacion">Institución de Jubilación</label>
                                        <input type="text" id="institucionJubilacion" name="institucionJubilacion"
                                            value="" class="form-control">
                                        @error('institucionJubilacion')
                                            <br>
                                            <small>*{{ $message }}</small>
                                            <br>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group"><label for="equipo">Con que equipo de cómputo
                                            cuenta*</label>
                                        <select id="equipo" name="equipo" class="form-control">
                                            <option>Ninguno</option>
                                            <option>Computadora</option>
                                            <option>Tablet</option>
                                            <option>Computadora y Tablet</option>
                                        </select>
                                        @error('equipo')
                                            <br>
                                            <small>*{{ $message }}</small>
                                            <br>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"><label for="internet">Cuenta con Internet*</label> <select
                                            id="internet" name="internet" class="form-control">
                                            <option>No</option>
                                            <option>Si</option>
                                        </select>
                                        @error('internet')
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

    @include('layouts.partials.footer')
</div>


@endsection
