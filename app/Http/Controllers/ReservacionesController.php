<?php

namespace App\Http\Controllers;
use App\Models\reservaciones;
use App\Models\vuelos;
use App\Models\pasajeros;
use App\Models\destinos;
use Illuminate\Http\Request;

class ReservacionesController extends Controller
{
    public function store(Request $request)
    {
        $reservacion = new reservaciones();
        $reservacion->fecha_reservacion = $request['fecha_reservacion'];
        $reservacion->tipo_clase = $request['tipo_clase'];
        $reservacion->numero_asiento = $request['numero_asiento'];
        $reservacion->costo = $request['costo'];
        $reservacion->nombre_aeropuerto = $request['nombre_aeropuerto'];
        $reservacion->tipo_pago = $request['tipo_pago'];
        $reservacion->save();
        $mensaje = "Datos de la reservación guardados";
        return view("reservaciones")->with(compact("mensaje"));
    }

    public function index()
    {
        $reservaciones = reservaciones::paginate();
        return view("consultarese", compact("reservaciones"));
    }

    public function editarrese($id)
    {
        $reservacion = reservaciones::find($id);
        return view("editarrese", compact("reservacion"));
    }

    public function updaterese(Request $request, reservaciones $reservacion)
    {
        $reservacion->fecha_reservacion = $request['fecha_reservacion'];
        $reservacion->tipo_clase = $request['tipo_clase'];
        $reservacion->numero_asiento = $request['numero_asiento'];
        $reservacion->costo = $request['costo'];
        $reservacion->nombre_aeropuerto = $request['nombre_aeropuerto'];
        $reservacion->tipo_pago = $request['tipo_pago'];
        $reservacion->save();
        return redirect()->route("consultarese")->with('mensaje', 'Se actualizó correctamente');
    }

    public function deleterese($id)
    {
        $reservacion = reservaciones::find($id);
        $reservacion->delete();
        return redirect()->route("consultarese")->with('mensaje', 'Se borró el registro');
    }
}
