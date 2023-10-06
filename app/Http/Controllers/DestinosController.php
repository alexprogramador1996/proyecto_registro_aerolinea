<?php

namespace App\Http\Controllers;

use App\Models\destinos;
use App\Models\pasajeros;
use App\Models\vuelos;
use Illuminate\Http\Request;

class DestinosController extends Controller
{
    public function store(Request $request)
    {
        $destino = new destinos();
        $destino->lugar_destino = $request['lugar_destino'];
        $destino->pais = $request['pais'];
        $destino->ciudad = $request['ciudad'];
        $destino->clima = $request['clima'];
        $destino->idioma_principal = $request['idioma_principal'];
        $destino->moneda = $request['moneda'];
        $destino->estado = $request['estado'] ?? 1;
        $destino->save();
        $mensaje = "Datos del destino guardados";
        return view("destinos")->with(compact("mensaje"));
    }

    public function index()
    {
        $destinos = destinos::paginate();
        return view("consultade", compact("destinos"));
    }

    public function editarde($id)
    {
        $destino = destinos::find($id);
        return view("editarde", compact("destino"));
    }

    public function updatede(Request $request, destinos $destino)
    {
        $destino->lugar_destino = $request['lugar_destino'];
        $destino->pais = $request['pais'];
        $destino->ciudad = $request['ciudad'];
        $destino->clima = $request['clima'];
        $destino->idioma_principal = $request['idioma_principal'];
        $destino->moneda = $request['moneda'];
        $destino->estado = $request['estado'] ?? 1;
        $destino->save();
        $mensaje = "Datos del destino actualizados";
        return redirect()->route("consultade")->with('mensaje', 'Se actualizó correctamente');
    }

    public function eliminarde($id)
    {
        $destino = destinos::find($id);
        $destino->delete();
        return redirect()->route("consultade")->with('mensaje', 'Se borró el registro');
    }
}
