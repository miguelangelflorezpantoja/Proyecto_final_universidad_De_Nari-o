<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Estudiante;

class Estudiantes extends Controller
{
    //
    public function index(){

        $estudiantes = DB::table('estudiantes')->get();
        return view('estudiantes.listado',['estudiantes'=>$estudiantes]);
    }
    public function formularioReg(){
        $estudiantes = Estudiante::all();
        return view('estudiantes.form_registro',compact('estudiantes'));
    }

    public function registrar( Request $request){
        $repetido = Estudiante::where('cedulaEstudiante',$request->input('cedulaEst'))->count();
        if($repetido == 0){
                    $estudiante = new Estudiante();
                    $estudiante->nombreEstudiante = $request->input('nombreEst');
                    $estudiante->apellidoEstudiante = $request->input('apellidoEst');
                    $estudiante->tipoCedula = $request->input('tipoEst');
                    $estudiante->cedulaEstudiante = $request->input('cedulaEst');
                    $estudiante->direccionEstudiante = $request->input('direccionEst');
                    $estudiante->telefonoEstudiante = $request->input('telefonoEst');
                    $estudiante->generoEstudiante = $request->input('generoEst');
                    $estudiante->correoEstudiante = $request->input('correoEst');
                    $estudiante->save();
                    return redirect()->route('listadoEstudiantes');
        }else{
                    return view('estudiantes.repetido');
        }
    }
    public function detalle($id) {
        $estudiantes = Estudiante:: findOrFail($id);
        return view('estudiantes.detalle', compact('estudiantes'));

    }
    public function formularioAct($id){
        $estudiantes = Estudiante::findOrFail($id);
        return view('estudiantes.form_actualiza', compact('estudiantes'));
    }


    public function actualizar(Request $request, $id){
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->nombreEstudiante = $request->input('nombreEst');
        $estudiante->apellidoEstudiante = $request->input('apellidoEst');
        $estudiante->tipoCedula = $request->input('tipoEst');
        $estudiante->cedulaEstudiante = $request->input('cedulaEst');
        $estudiante->direccionEstudiante = $request->input('direccionEst');
        $estudiante->telefonoEstudiante = $request->input('telefonoEst');
        $estudiante->generoEstudiante = $request->input('generoEst');
        $estudiante->correoEstudiante = $request->input('correoEst');

        $estudiante->save();
        return redirect()->route('listadoEstudiantes');
    }
    public function eliminar($id){
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();
        return redirect()->route('listadoEstudiantes');
    }
    public function form_buscar(){
        return view('clientes.form_consultar');
    }
 
    public function buscar(Request $request)
    {
        $nombre = $request->input('busqueda');
        $estudiantes = Estudiante::where('cedulaEstudiante', 'like',$nombre)->first();
        if($estudiantes)
        return view('estudiantes.busqueda', compact('estudiantes'));
         else
         return view('estudiantes.error');
 
    }
}
