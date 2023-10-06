@extends("menu")
@section("content")
<div class="pasajero-form">
    <h2>Editar Pasajero</h2>
    <form action="{{ route('updatep', $pasajero->id) }}" method="post">
        @csrf
        Nombre: <input type="text" name="nombre" value="{{ $pasajero->nombre }}" class="input-field"><br>
        Apellido: <input type="text" name="apellido" value="{{ $pasajero->apellido }}" class="input-field"><br>
        Fecha de Nacimiento: <input type="date" name="fecha_nacimiento" value="{{ $pasajero->fecha_nacimiento }}" class="input-field"><br>
        Email: <input type="email" name="email" value="{{ $pasajero->email }}" class="input-field"><br>
        Teléfono: <input type="tel" name="telefono" value="{{ $pasajero->telefono }}" class="input-field"><br>
        Nacionalidad: <input type="text" name="nacionalidad" value="{{ $pasajero->nacionalidad }}" class="input-field"><br>
        Tipos de Equipaje: <input type="text" name="tipos_equipajes" value="{{ $pasajero->tipos_equipajes }}" class="input-field"><br>
        <input type="submit" name="btn" value="Guardar" class="btn-submit">
    </form>
</div>

<style>
    .pasajero-form {
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
