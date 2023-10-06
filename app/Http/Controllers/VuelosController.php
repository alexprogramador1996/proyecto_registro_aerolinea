<?php

namespace App\Http\Controllers;
use App\Models\vuelos;
use App\Models\pasajeros;
use Illuminate\Http\Request;


class VuelosController extends Controller
{
    // 
    public function store(Request $request){
    $vuelo = new vuelos();
    $vuelo->numero_vuelo=$request['numero_vuelo'];
    $vuelo->nombre_aerolinea=$request['nombre_aerolinea'];
    $vuelo->origen=$request['origen'];
    $vuelo->destino=$request['destino'];
    $vuelo->fecha_llegada=$request['fecha_llegada'];
    $vuelo->fecha_salida=$request['fecha_salida'];
    $vuelo->hora_salida=$request['hora_salida'];
    $vuelo->hora_llegada=$request['hora_llegada'];
    $vuelo->precio=$request['precio'];
    $vuelo->save();
    $mensaje = "Datos de vuelo guardados";
    return view("vuelos")->with(compact("mensaje"));
}
    //funcion para mostrar los datos
    public function index()
{
    $vuelos=vuelos::paginate();
    return view("consulta",compact("vuelos"));
}    
    public function editar($id){ //consultar registro para mostrarlo al editar
    $vuelo=vuelos::find($id);
    return view("editar",compact("vuelo"));
}   
    public function update(Request $request,vuelos $vuelo){
    //obtener los datos a modificar hacer la actualización
    $vuelo->numero_vuelo=$request['numero_vuelo'];
    $vuelo->nombre_aerolinea=$request['nombre_aerolinea'];
    $vuelo->origen=$request['origen'];
    $vuelo->destino=$request['destino'];
    $vuelo->fecha_llegada=$request['fecha_llegada'];
    $vuelo->fecha_salida=$request['fecha_salida'];
    $vuelo->hora_salida=$request['hora_salida'];
    $vuelo->hora_llegada=$request['hora_llegada'];
    $vuelo->precio=$request['precio'];
    $vuelo->save();
    $mensaje = "Datos de vuelo actualizados";
    return redirect()->route("consulta")->with('mensaje','Se actualizó correctamente');
} 
    //borrar un registro
    public function delete($id)
{   $vuelo=vuelos::find($id);
    $vuelo->delete();
    return redirect()->route("consulta")->with('mensaje','se borro el registro');
}
}
