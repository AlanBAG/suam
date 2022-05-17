<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use Carbon\Carbon;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumno.index')->with('alumnos', $alumnos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumno.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumnos = new Alumno();

        $alumnos->nombre = $request->get('nombre');
        $alumnos->apellidoPaterno = $request->get('apellidoPaterno');
        $alumnos->apellidoMaterno = $request->get('apellidoMaterno');
        $alumnos->fechaNacimiento = $request->get('fechaNacimiento');
        $alumnos->estadoCivil = $request->get('estadoCivil');
        $alumnos->domicilio = $request->get('domicilio');
        $alumnos->colonia = $request->get('colonia');
        $alumnos->sector = $request->get('sector');
        $alumnos->cp = $request->get('cp');
        $alumnos->estado = $request->get('estado');
        $alumnos->municipio = $request->get('municipio');
        $alumnos->ine = $request->get('ine');
        $alumnos->telCasa = $request->get('telCasa');
        $alumnos->telCelular = $request->get('telCelular');
        $alumnos->email = $request->get('email');
        $alumnos->escolaridad = $request->get('escolaridad');
        $alumnos->contacto = $request->get('contacto');
        $alumnos->jubilado = $request->get('jubilado');
        $alumnos->institucionJubilacion = $request->get('institucionJubilacion');
        $alumnos->equipo = $request->get('equipo');
        $alumnos->internet = $request->get('internet');

        $alumnos->save();

        return redirect('/alumnos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno = Alumno::find($id);

        return view('alumno.edit')->with('alumno', $alumno);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alumno = Alumno::find($id);

        $alumno->nombre = $request->get('nombre');
        $alumno->apellidoPaterno = $request->get('apellidoPaterno');
        $alumno->apellidoMaterno = $request->get('apellidoMaterno');
        $alumno->fechaNacimiento = $request->get('fechaNacimiento');
        $alumno->estadoCivil = $request->get('estadoCivil');
        $alumno->domicilio = $request->get('domicilio');
        $alumno->colonia = $request->get('colonia');
        $alumno->sector = $request->get('sector');
        $alumno->cp = $request->get('cp');
        $alumno->estado = $request->get('estado');
        $alumno->municipio = $request->get('municipio');
        $alumno->ine = $request->get('ine');
        $alumno->telCasa = $request->get('telCasa');
        $alumno->telCelular = $request->get('telCelular');
        $alumno->email = $request->get('email');
        $alumno->escolaridad = $request->get('escolaridad');
        $alumno->contacto = $request->get('contacto');
        $alumno->jubilado = $request->get('jubilado');
        $alumno->institucionJubilacion = $request->get('institucionJubilacion');
        $alumno->equipo = $request->get('equipo');
        $alumno->internet = $request->get('internet');

        $alumno->save();

        return redirect('/alumnos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumno = Alumno::find($id)->delete();
        $alumno->activo = '0';
        $alumno->save();

        return redirect()->route('alumnos.index')
            ->with('success', 'Alumno eliminado correctamente');
    }
}
