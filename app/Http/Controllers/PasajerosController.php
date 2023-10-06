<?php
namespace App\Http\Controllers;

use App\Models\pasajeros;
use App\Models\vuelos;
use Illuminate\Http\Request;

class PasajerosController extends Controller
{
    public function store(Request $request){
        $pasajero = new pasajeros();
        $pasajero->nombre=$request['nombre'];
        $pasajero->apellido=$request['apellido'];
        $pasajero->fecha_nacimiento=$request['fecha_nacimiento'];
        $pasajero->email=$request['email'];
        $pasajero->telefono=$request['telefono'];
        $pasajero->nacionalidad=$request['nacionalidad'];
        $pasajero->tipos_equipajes=$request['tipos_equipajes'];
        $pasajero->save();
        $mensaje = "Datos del pasajero guardados";
        return view("pasajeros")->with(compact("mensaje"));
    }

    public function index()
    {
        $pasajeros = pasajeros::paginate();
        return view("consultap", compact("pasajeros"));
    }

    public function editarp($id)
    {
        $pasajero = pasajeros::find($id);
        return view("editarp", compact("pasajero"));
    }

    public function updatep(Request $request, pasajeros $pasajero)
    {
        $pasajero->nombre=$request['nombre'];
        $pasajero->apellido=$request['apellido'];
        $pasajero->fecha_nacimiento=$request['fecha_nacimiento'];
        $pasajero->email=$request['email'];
        $pasajero->telefono=$request['telefono'];
        $pasajero->nacionalidad=$request['nacionalidad'];
        $pasajero->tipos_equipajes=$request['tipos_equipajes'];
        $pasajero->save();
        $mensaje = "Datos del pasajero actualizados";
        return redirect()->route("consultap")->with('mensaje', 'Se actualizó correctamente');
    }

    public function deletep($id)
    {
        $pasajero = pasajeros::find($id);
        $pasajero->delete();
        return redirect()->route("consultap")->with('mensaje', 'Se borró el registro');
    }
}
