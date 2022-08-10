<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Curso;
use App\Models\ListaPorCurso;
use App\Models\MateriaInscrita;
use App\Models\User;
use Barryvdh\DomPDF\Facade as PDF;

class PdfController extends Controller
{
    public function imprimir($alumno_id)
    {
        $alumno = Alumno::findOrFail($alumno_id);
        $materias = MateriaInscrita::where("IdAlumno", "=", $alumno_id)->get();
        $user1 = User::where('IdAlumno', '=', $alumno_id)->first();
        /*
    return view('alumno.kardexAlumno', array(
        'alumno' => $alumno,
        'materias' => $materias
    ));
    */

        $pdf = \PDF::loadView('pdf', compact('alumno', 'materias', 'user1'));
        return $pdf->stream('kardexAlumno' . $alumno->nombre . ' ' . $alumno->apellido . '.pdf');
        //$dompdf->stream("dompdf_out.pdf", array("Attachment" => false));

        //exit(0);
    }
    public function imprimirLista($curso_id)
    {
        $curso = Curso::findOrFail($curso_id);
        $listaPorGrupo = ListaPorCurso::where([['IdCurso', '=', $curso_id], ['status', '=', 'Inscrito']])->get();

        $pdfLista = \PDF::loadView('listaAsistenciaPDF', compact('curso', 'listaPorGrupo'));
        return $pdfLista->stream('Lista_Grupo' . $curso->nombreCurso . '.pdf');
    }
}
