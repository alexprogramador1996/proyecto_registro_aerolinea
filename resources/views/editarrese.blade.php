@extends("menu")
@section("content")
<div class="reservacion-form">
    <h2>Editar Reservación</h2>
    <form action="{{ route('updaterese', $reservacion->id) }}" method="post">
        @csrf
        Fecha de Reservación: <input type="date" name="fecha_reservacion" value="{{ $reservacion->fecha_reservacion }}" class="input-field"><br>
        Tipo de Clase: <input type="text" name="tipo_clase" value="{{ $reservacion->tipo_clase }}" class="input-field"><br>
        Número de Asiento: <input type="text" name="numero_asiento" value="{{ $reservacion->numero_asiento }}" class="input-field"><br>
        Costo: <input type="text" name="costo" value="{{ $reservacion->costo }}" class="input-field"><br>
        Nombre del Aeropuerto: <input type="text" name="nombre_aeropuerto" value="{{ $reservacion->nombre_aeropuerto }}" class="input-field"><br>
        Tipo de Pago: <input type="text" name="tipo_pago" value="{{ $reservacion->tipo_pago }}" class="input-field"><br>
        <input type="submit" name="btn" value="Guardar" class="btn-submit">
    </form>
</div>

<style>
    .reservacion-form {
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
