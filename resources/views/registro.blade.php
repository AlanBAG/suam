<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Continua el Registro. SUAM</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="css/stylelogin.css">
    <!-- Datapicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

</head>

<body>
    <div class="container">
        <div class="card">
            <div class="form">
                <div class="left-side">
                    <div class="left-heading">
                        <h3>Registro al SUAM</h3>
                    </div>
                    <div class="steps-content">
                        <h3>Paso <span class="step-number">2</span></h3>
                        <p class="step-number-content d-none">Ingresa los datos de tu perfil.</p>
                        <p class="step-number-content active">Ingresa tus datos personales.</p>
                        <p class="step-number-content d-none">Ingresa información adicional.</p>
                        <p class="step-number-content d-none">Ingresa información adicional.</p>
                    </div>
                    <ul class="progress-bar">
                        <li>Datos de Usuario</li>
                        <li class="active">Información Personal</li>
                        <li>Datos adicionales</li>
                        <li>Datos adicionales</li>
                    </ul>


                    {{-- Usar campos requeridos por cada entrada --}}
                </div>
                <div class="right-side">
                    <form action="{{ route('saveAlumno') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="main active">


                            <small><i class="fa fa-smile-o"></i></small>
                            <div class="text">
                                <h2>Información Personal</h2>
                                <p>Ingresa tus datos personales.</p>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" id="nombre" name="nombre" value=""
                                        class="form-control" required>
                                    <span>Nombre(s)*</span>
                                </div>
                                <div class="input-div">
                                    <input type="text" id="apellidoPaterno" name="apellidoPaterno" value=""
                                        class="form-control" required>
                                    <span>Apellido Paterno</span>
                                </div>
                                <div class="input-div">
                                    <input type="text" id="apellidoMaterno" name="apellidoMaterno" value=""
                                        class="form-control" required>
                                    <span>Apellido Materno</span>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <select class="form-control" id="nacimiento_dia" name="nacimiento_dia" required>
                                        <option disabled selected>Elegir día</option>
                                        @for ($i = 1; $i <= 31; $i++)
                                            @if ($i <= 9)
                                                <option value="0{{ $i }}">{{ $i }}</option>
                                            @else
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endif
                                        @endfor
                                    </select>
                                </div>
                                <div class="input-div">
                                    <select class="form-control" id="nacimiento_mes" name="nacimiento_mes" required>
                                        <option disabled selected>Elegir Mes</option>
                                        <option value="01">Enero</option>
                                        <option value="02">Febrero</option>
                                        <option value="03">Marzo</option>
                                        <option value="04">Abril</option>
                                        <option value="05">Mayo</option>
                                        <option value="06">Junio</option>
                                        <option value="07">Julio</option>
                                        <option value="08">Agosto</option>
                                        <option value="09">Septiembre</option>
                                        <option value="10">Octubre</option>
                                        <option value="11">Noviembre</option>
                                        <option value="12">Diciembre</option>
                                    </select>
                                </div>
                                <div class="input-div">
                                    <select class="form-control" id="nacimiento_anio" name="nacimiento_anio" required>
                                        <option disabled selected>Año</option>
                                        @for ($i = 1930; $i <= 1970; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <select id="estadoCivil" name="estadoCivil" class="form-control" required>
                                        <option disabled="disabled" selected="selected">Estado
                                            Civil</option>
                                        <option>Soltero(a)</option>
                                        <option>Casado(a)</option>
                                        <option>Divorciado(a)</option>
                                        <option>Viudez</option>
                                        <option>Unión Libre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="buttons button_space">
                                <button class="next_button">Siguiente</button>
                            </div>

                        </div>
                        <div class="main">
                            <small><i class="fa fa-smile-o"></i></small>
                            <div class="text">
                                <h2>Datos adicionales</h2>
                                <p>Ingresa los siguientes datos</p>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" id="domicilio" name="domicilio" value=""
                                        class="form-control" required>
                                    <span>Domicilio: Calle y número</span>
                                </div>
                                <div class="input-div">
                                    <input type="text" id="colonia" name="colonia" value=""
                                        class="form-control" required>
                                    <span>Colonia</span>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <select id="sector" name="sector" class="form-control" required>
                                        <option disabled="disabled" selected="selected">Sector</option>
                                        <option>Hidalgo</option>
                                        <option>Libertad</option>
                                        <option>Juárez</option>
                                        <option>Reforma</option>
                                        <option>Fuera de Guadalajara</option>
                                    </select>
                                </div>
                                <div class="input-div">
                                    <input type="text" id="cp" name="cp" value=""
                                        class="form-control" required>
                                    <span>CP</span>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <select id="estado" name="estado" class="form-control" required>
                                        <option disabled="disabled" selected="selected">Estado</option>
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
                                        <option value="Jalisco">Jalisco</option>
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
                                </div>
                                <div class="input-div">
                                    <select id="municipio" name="municipio" class="form-control" require>
                                        <option disabled="disabled" selected="selected">Municipio</option>
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
                                </div>
                            </div>
                            <div class="buttons button_space">
                                <button class="back_button">Atras</button>
                                <button class="next_button">Siguiente</button>
                            </div>
                        </div>



                        <div class="main">

                            <div class="input-text">
                                <div class="input-div">
                                    <button
                                        style="display:block;width:100%; height:40px; border-radius:5px; border:1px solid;"
                                        onclick="document.getElementById('ine').click()">INE: En formato de imagen
                                        JPG</button>


                                    <input type='file' id="ine" style="display:none" name="ine"
                                        value="" class="form-control" required>
                                </div>
                                <div class="input-div">
                                    <input type="text" id="telCasa" name="telCasa" value=""
                                        class="form-control" required>
                                    <span>Teléfono Casa</span>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" id="telCelular" name="telCelular" value=""
                                        class="form-control" required>
                                    <span>Teléfono Celular</span>
                                </div>
                                <div class="input-div">
                                    <input type="email" id="email" name="email" value=""
                                        class="form-control" required>
                                    <span>Correo Electrónico</span>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <select id="escolaridad" name="escolaridad" value="" class="form-control"
                                        required>
                                        <option disabled="disabled" selected="selected">Escolaridad</option>
                                        <option>Primaria</option>
                                        <option>Secundaria</option>
                                        <option>Bachillerato</option>
                                        <option>Bachillerato Técnico</option>
                                        <option>Licenciatura</option>
                                        <option>Maestría</option>
                                        <option>Doctorado</option>
                                    </select>
                                </div>
                                <div class="input-div">
                                    <input type="text" id="contacto" name="contacto" value=""
                                        class="form-control" required placeholder="Contacto en Caso de Emergencia">
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <select id="jubilado" name="jubilado" class="form-control" required>
                                        <option disabled="disabled" selected="selected">¿Es Jubilado?</option>
                                        <option>Si</option>
                                        <option>No</option>
                                    </select>
                                </div>
                                <div class="input-div">
                                    <input type="text" id="institucionJubilacion" name="institucionJubilacion"
                                        value="" class="form-control" required>
                                    <span>Institución de Jubilación</span>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <select id="equipo" name="equipo" class="form-control" required>
                                        <option disabled="disabled" selected="selected">Con que equipo de cómputo
                                            cuenta</option>
                                        <option>Computadora</option>
                                        <option>Tablet</option>
                                        <option>Computadora y Tablet</option>
                                    </select>
                                </div>
                                <div class="input-div">
                                    <select id="internet" name="internet" class="form-control" required>
                                        <option disabled="disabled" selected="selected">¿Cuenta con Internet?</option>
                                        <option>Si</option>
                                        <option>No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="buttons button_space">
                                <button class="back_button">Regresar</button>
                                <button type="submit" class="submit_button">Finalizar</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $(".datepicker").datepicker({
                dateFormat: 'yy-mm-dd',
                changeMonth: true,
                changeYear: true,
                //yearRange: "-15:+0" // Previous 15 years 
                yearRange: "1950:2030"
            });
        });
    </script>
    <script src="js/login.js"></script>

</body>

</html>
