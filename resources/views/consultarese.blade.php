@extends("menu")
@section("content")
<div class="container">
        <h2>Listado de Reservaciones</h2>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>IDVuelo</th>
                        <th>IDDestino</th>
                        <th>IDPasajero</th>
                        <th>Fecha de Reservación</th>
                        <th>Tipo de Clase</th>
                        <th>Número de Asiento</th>
                        <th>Costo</th>
                        <th>Nombre del Aeropuerto</th>
                        <th>Tipo de Pago</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservaciones as $reservacion)
                    <tr>
                        <td>{{ $reservacion->id }}</td>
                        <td>{{ $reservacion->id }}</td>
                        <td>{{ $reservacion->id }}</td>
                        <td>{{ $reservacion->id }}</td>
                        <td>{{ $reservacion->fecha_reservacion }}</td>
                        <td>{{ $reservacion->tipo_clase }}</td>
                        <td>{{ $reservacion->numero_asiento }}</td>
                        <td>{{ $reservacion->costo }}</td>
                        <td>{{ $reservacion->nombre_aeropuerto }}</td>
                        <td>{{ $reservacion->tipo_pago }}</td>
                        <td><a href="{{ route('actualizarrese', $reservacion->id) }}" class="btn btn-edit">Editar</a></td>
                        <td>
                            <form action="{{ route('eliminarese', $reservacion->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mensaje">
            {{ Session::get('mensaje') }}
        </div>
    </div><style>
    .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .reservaciones-table {
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 6px;
    }

    h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 10px;
        text-align: center;
        border-bottom: 2px solid #ccc;
    }

    th {
        background-color: #000000;
        color: #fff;
    }

    .btn {
        padding: 5px 10px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        cursor: pointer;
        transition: background-color 0.2s;
    }

    .btn-edit {
        background-color: #007bff;
        color: #fff;
    }

    .btn-delete {
        background-color: #dc3545;
        color: #fff;
    }

    .btn:hover {
        opacity: 0.8;
    }

    .mensaje {
        margin-top: 20px;
        padding: 10px;
        background-color: #4CAF50;
        color: #fff;
        border-radius: 5px;
        text-align: center;
    }
</style>
</div>
@endsection
