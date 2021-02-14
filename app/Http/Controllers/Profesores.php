<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Profesor;

class Profesores extends Controller
{
    //
    public function index(){
    $profesores = DB::table('profesores')->get();
        return view('profesores.listado',['profesores'=>$profesores]);
    }
    public function formularioReg()
    {
        return view('profesores.form_registro');
    }


    public function registrar(Request $request)
    {
        $repetido = Profesor::where('cedulapro',$request->input('cedulapro'))->count();
        if($repetido == 0){
            $profesor = new Profesor();
            $profesor->nombrepro = $request->input('nombrepro');
            $profesor->apellidopro = $request->input('apellidopro');
            $profesor->cedulapro = $request->input('cedulapro');
            $profesor->direccionpro = $request->input('direccionpro');
            $profesor->telefonopro = $request->input('telefonopro');
            $profesor->generopro = $request->input('generopro');
            $profesor->correopro = $request->input('correopro');
            $profesor->save();
            return redirect()->route('listadoProfesores');
        }else{
            return view('carreras.repetido');
        }
    }
    public function formularioAct($id){
        $profesor = Profesor::findOrFail($id);
        return view('profesores.form_actualiza', compact('profesor'));
    }

    public function actualizar(Request $request, $id){
        // Realizar la actualizacion en la base de datos
        $profesor= Profesor::findOrFail($id);
        $profesor->nombrepro = $request->input('nombrepro');
        $profesor->apellidopro = $request->input('apellidopro');
        $profesor->cedulapro = $request->input('cedulapro');
        $profesor->direccionpro = $request->input('direccionpro');
        $profesor->telefonopro = $request->input('telefonopro');
        $profesor->generopro = $request->input('generopro');
        $profesor->correopro = $request->input('correopro');
        $profesor->save();
        return redirect()->route('listadoCarreras');
    }
    public function eliminarPro($id){
        $profesor = Profesor::find($id);
        $profesor->delete();
            return redirect()->route('listadoProfesores');
    }


 
    public function buscarPro(Request $request)
    {
        $nombre = $request->input('busqueda');
        $profesores = Profesor::where('nombrepro', 'like',$nombre)->first();
        if($profesores)
        return view('profesores.buscar', compact('profesores'));
         else
         return view('profesores.error');
 
    }
}
