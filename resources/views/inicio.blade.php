@extends('layouts.plantilla')

@section('title', 'Inicio')

@section('content')    
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>Panel de Administración.</strong></div> 
                    
                <div class="panel-body"><br> 
                    <table class="table">
                        <thead>
                            <tr>
                                <th colspan="5" scope="col">Menú</th>
                            </tr>
                        </thead> 
                        <tbody>
                            <tr>
                                <th scope="row">Listado de Cursos</th> 
                                <td>Permite gestionar los cursos para darlos de alta, eliminar y editar</td> 
                                
                                <td>
                                    <p>
                                        <a href="" class="btn btn-success">Cursos 2020B</a>
                                    </p> 
                                    <p>
                                        <a href="" class="btn btn-success">Cursos 2021A</a>
                                    </p>
                                </td> 
                                <td>
                                    <p>
                                        <a href="" class="btn btn-success">Cursos 2021B</a>
                                    </p> 
                                    <p>
                                        <a href="" class="btn btn-success">Cursos 2022A </a>
                                    </p>
                                </td>
                            </tr> 
                            
                            <tr>
                                <th scope="row">Listado de Alumnos</th> <td>Permite capturar, modificar y eliminar Alumnos</td> 
                                <td colspan="3"><a href="" class="btn btn-primary"> Listado de Alumnos </a>
                                </td>
                            </tr> 

                            <tr>
                                <th scope="row">Capturar Alumno</th> <td>Capturar un nuevo Alumno</td> 
                                <td colspan="3"><a href="" class="btn btn-success"> Capturar Alumno </a>
                                </td>
                            </tr> 
                            
                            <tr>
                                <th scope="row">Estadísticas Generales</th> 
                                <td>Permite observar el número de personas que cuentan con internet, que tipo de equipo y si son jubilados</td> 
                                <td colspan="3"><a href="" class="btn btn-primary"> Estadísticas Generales </a>
                                </td>
                            </tr>
                            
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> 
        
    <p>
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="btn btn-primary">
        Salir
        </a>
    </p> 
        <h4>En caso de tener alguna duda o desea que le apoyen en el registro puede contactar por teléfono o whatsapp a los números 33-31-06-71-60 y 33-12-25-33-79</h4> 
        <div class="row"><br> <hr> <p>CENTRO UNIVERSITARIO DE CIENCIAS SOCIALES Y HUMANIDADES.</p> 
            <p>Sistema Universitario del Adulto Mayor (SUAM)</p> 
            <p>Guanajuato 1047 Guadalajara (México) Tel.: 33 3819 3300 Ext 23653</p>
        </div>
    </div>

@endsection