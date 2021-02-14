<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Profesor;
use App\Models\Estudiante;
use App\Models\Carrera;
use App\Models\Nota;

class Notas extends Controller
{
    //
    public function index(){
        $producto = DB::table('notas as not')
                ->join('carreras as cat','not.cursos','=','cat.id')
                ->join('estudiantes as es','not.estudiante','=','es.id')
                ->join('profesores as pro','not.profesor','=','pro.id')
                ->select('not.id','not.nota','cat.nombrecar','es.nombreEstudiante','es.apellidoEstudiante','pro.nombrepro','pro.apellidopro')
        ->get();
        return view('notas.listado',['notas'=>$producto]);
    }
    public function formularioReg(){
        $carreras = Carrera::all();
        $estudiantes = Estudiante::all();
        $profesores = Profesor::all();
        return view('notas.form_registro',compact('carreras','estudiantes','profesores'));
    }

    public function registrar( Request $request){
        $producto = new Nota();
        $producto->estudiante = $request->input('estudiante');
        $producto->cursos = $request->input('materia');
        $producto->profesor = $request->input('profesor');
        $producto->nota = $request->input('nota');
        $producto->save();
        return redirect()->route('listadoNotas');

    }
    public function formularioAct($id){
        $notas = Nota::findOrFail($id);
        $carreras = Carrera::all();
        $estudiantes = Estudiante::all();
        $profesores = Profesor::all();
        return view('notas.form_actualiza', compact('notas','carreras','estudiantes','profesores'));
    }

    public function actualizar(Request $request, $id){
        // Realizar la actualizacion en la base de datos
        $producto = Nota::findOrFail($id);
        $carreras = Carrera::all();
        $estudiantes = Estudiante::all();
        $profesores = Profesor::all();
        $producto->estudiante = $request->input('estudiante');
        $producto->cursos = $request->input('materia');
        $producto->profesor = $request->input('profesor');
        $producto->nota = $request->input('nota');
        $producto->save();
        return redirect()->route('listadoNotas');
    }
    public function eliminarNot($id){
        $profesor = Nota::find($id);
        $profesor->delete();
            return redirect()->route('listadoNotas');
    }
}
