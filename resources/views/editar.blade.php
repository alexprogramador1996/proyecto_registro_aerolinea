@extends("menu")
@section("content")
<div class="vuelo-form">
    <h2>Editar Vuelo</h2>
    <form action="{{ route('update', $vuelo->id) }}" method="post">
        @csrf
        Número de Vuelo: <input type="text" name="numero_vuelo" value="{{ $vuelo->numero_vuelo }}" class="input-field"><br>
        Nombre de Aerolínea: <input type="text" name="nombre_aerolinea" value="{{ $vuelo->nombre_aerolinea }}" class="input-field"><br>
        Origen: <input type="text" name="origen" value="{{ $vuelo->origen }}" class="input-field"><br>
        Destino: <input type="text" name="destino" value="{{ $vuelo->destino }}" class="input-field"><br>
        Fecha de Salida: <input type="date" name="fecha_salida" value="{{ $vuelo->fecha_salida }}" class="input-field"><br>
        Hora de Salida: <input type="time" name="hora_salida" value="{{ $vuelo->hora_salida }}" class="input-field"><br>
        Fecha de Llegada: <input type="date" name="fecha_llegada" value="{{ $vuelo->fecha_llegada }}" class="input-field"><br>
        Hora de Llegada: <input type="time" name="hora_llegada" value="{{ $vuelo->hora_llegada }}" class="input-field"><br>
        Precio: <input type="text" name="precio" value="{{ $vuelo->precio }}" class="input-field"><br>
        <input type="submit" name="btn" value="Guardar" class="btn-submit">
    </form>
</div>

<style>
    .vuelo-form {
        max-width: 400px;
        margin: 0 auto;
        padding: 60px;
        background-color: #f4f4f4;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    h2 {
        font-size: 24px;
        text-align: center;
        margin-bottom: 20px;
    }

    .input-field {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .btn-submit {
        background-color: #e74c3c;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-submit:hover {
        background-color: #c0392b;
    }
</style>
@endsection
