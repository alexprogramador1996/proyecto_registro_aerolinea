@extends("menu")
@section("content")
<div class="container destinos-table">
    <h2>Listado de Destinos</h2>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>IDVuelo</th>
                    <th>Lugar del Destino</th>
                    <th>País</th>
                    <th>Ciudad</th>
                    <th>Clima</th>
                    <th>Idioma Principal</th>
                    <th>Moneda</th>
                    <th>Estado</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($destinos as $destino)
                <tr>
                    <td>{{ $destino->id }}</td>
                    <td>{{ $destino->id }}</td>
                    <td>{{ $destino->lugar_destino }}</td>
                    <td>{{ $destino->pais }}</td>
                    <td>{{ $destino->ciudad }}</td>
                    <td>{{ $destino->clima }}</td>
                    <td>{{ $destino->idioma_principal }}</td>
                    <td>{{ $destino->moneda }}</td>
                    <td>{{ $destino->estado == 1 ? 'Cancelado' : 'En Espera' }}</td>
                    <td><a href="{{ route('actualizarde', $destino->id) }}" class="btn btn-edit">Editar</a></td>
                    <td>
                        <form action="{{ route('eliminarde', $destino->id) }}" method="post">
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
</div>

<style>
    .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .destinos-table {
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
@endsection
