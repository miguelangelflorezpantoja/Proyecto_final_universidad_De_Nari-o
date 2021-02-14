<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Carrera;
class Carreras extends Controller
{
    //
    public function index(){

        $carreras = Carrera::all();
        return view('carreras.listado', ['carreras' => $carreras]);   
    }
    public function formularioReg()
    {
        return view('carreras.form_registro');
    }


    public function registrar(Request $request)
    {
        $repetido = Carrera::where('nombrecar',$request->input('nombrecar'))->count();
        if($repetido == 0){
            $carrera = new Carrera();
            $carrera->nombrecar = $request->input('nombrecar');
            $carrera->save();
            return redirect()->route('listadoCarreras');
        }else{
            return view('carreras.repetido');
        }
    }
    public function formularioAct($id){
        $carrera = Carrera::findOrFail($id);
        return view('carreras.form_actualiza', compact('carrera'));
    }

    public function actualizar(Request $request, $id){
        // Realizar la actualizacion en la base de datos
        $carrera= Carrera::findOrFail($id);
        $carrera->nombrecar = $request->input('nombrecar');

        $carrera->save();
        return redirect()->route('listadoCarreras');
    }
    public function eliminarCar($id){
        $carrera = Carrera::find($id);
        $carrera->delete();
            return redirect()->route('listadoCarreras');
    }


 
    public function buscarCar(Request $request)
    {
        $nombre = $request->input('busqueda');
        $carreras = Carrera::where('nombreCar', 'like',$nombre)->first();
        if($carreras)
        return view('carreras.busqueda', compact('carreras'));
         else
         return view('carreras.error');
 
    }
}
