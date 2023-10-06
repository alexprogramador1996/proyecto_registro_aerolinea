@extends("menu")
@section("content")
<div class="container pasajeros-table">
    <h2>Listado de Pasajeros</h2>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            
                            <th>ID</th>
                            <th>IDVuelo</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Nacionalidad</th>
                            <th>Tipos de Equipaje</th>
                            <th>Editar</th>
                            <th>Borrar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pasajeros as $pasajero)
                        <tr>
                            <td>{{ $pasajero->id }}</td>
                            <td>{{ $pasajero->id }}</td>
                            <td>{{ $pasajero->nombre }}</td>
                            <td>{{ $pasajero->apellido }}</td>
                            <td>{{ $pasajero->fecha_nacimiento }}</td>
                            <td>{{ $pasajero->email }}</td>
                            <td>{{ $pasajero->telefono }}</td>
                            <td>{{ $pasajero->nacionalidad }}</td>
                            <td>{{ $pasajero->tipos_equipajes }}</td>
                            <td><a href="{{ route('actualizarp', $pasajero->id) }}" class="btn btn-edit">Editar</a></td>
                            <td>
                                <form action="{{ route('eliminarp', $pasajero->id) }}" method="post">
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

<style>
    .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .pasajeros-table {
        margin: 40px auto;
    }

    h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .card {
        width: 100%;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 6px;
        margin: 0 auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 10px;
        text-align: center;
        border-bottom: 1px solid #ccc;
    }

    th {
        background-color: #000000;
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
@endsection
