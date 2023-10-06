@extends("menu")
@section("content")
<div class="container">
    <div class="vuelos-table">
        <h2>Listado de Vuelos</h2>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Número de Vuelo</th>
                                <th>Nombre de Aerolínea</th>
                                <th>Origen</th>
                                <th>Destino</th>
                                <th>Fecha de Salida</th>
                                <th>Hora de Salida</th>
                                <th>Fecha de Llegada</th>
                                <th>Hora de Llegada</th>
                                <th>Precio</th>
                                <th>Editar</th>
                                <th>Borrar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vuelos as $vuelo)
                            <tr>
                                <td>{{ $vuelo->id }}</td>
                                <td>{{ $vuelo->numero_vuelo }}</td>
                                <td>{{ $vuelo->nombre_aerolinea }}</td>
                                <td>{{ $vuelo->origen }}</td>
                                <td>{{ $vuelo->destino }}</td>
                                <td>{{ $vuelo->fecha_salida }}</td>
                                <td>{{ $vuelo->hora_salida }}</td>
                                <td>{{ $vuelo->fecha_llegada }}</td>
                                <td>{{ $vuelo->hora_llegada }}</td>
                                <td>{{$vuelo->precio }}</td>
                                <td><a href="{{ route('actualizar', $vuelo->id) }}" class="btn btn-edit">Editar</a></td>
                                <td>
                                    <form action="{{ route('eliminar', $vuelo->id) }}" method="post">
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
            </div>
        </div>
        <div class="mensaje">
            {{ Session::get('mensaje') }}
        </div>
    </div>
</div>

<style>
    .container {
        max-width: 1200px; /* Ajusta según tus necesidades */
        margin: 0 auto;
    }

    .vuelos-table {
        margin: 20px 0;
    }

    h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .card {
        width: 100%;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ccc;
    }

    th {
        background-color: #333;
        color: #fff;
    }

    .btn {
        padding: 8px 12px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        cursor: pointer;
        transition: background-color 0.2s;
    }

    .btn-edit {
        background-color: #28a745;
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
@endsection
