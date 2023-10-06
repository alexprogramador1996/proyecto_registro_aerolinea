@extends("menu")
@section("content")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body form-container">
    <form action="guardar" method="post">
        @csrf
        <div class="form-group">
            <label for="numero_vuelo">Número de Vuelo:</label>
            <input type="text" class="form-control" name="numero_vuelo" required>
        </div>

        <div class="form-group">
            <label for="nombre_aerolinea">Nombre de Aerolínea:</label>
            <input type="text" class="form-control" name="nombre_aerolinea" required>
        </div>

        <div class="form-group">
            <label for="origen">Origen:</label>
            <input type="text" class="form-control" name="origen" required>
        </div>

        <div class="form-group">
            <label for="destino">Destino:</label>
            <input type="text" class="form-control" name="destino" required>
        </div>

        <div class="form-group">
            <label for="fecha_llegada">Fecha de Llegada:</label>
            <input type="date" class="form-control" name="fecha_llegada" required>
        </div>

        <div class="form-group">
            <label for="fecha_salida">Fecha de Salida:</label>
            <input type="date" class="form-control" name="fecha_salida" required>
        </div>

        <div class="form-group">
            <label for="hora_salida">Hora de Salida:</label>
            <input type="time" class="form-control" name="hora_salida" required>
        </div>

        <div class="form-group">
            <label for="hora_llegada">Hora de Llegada:</label>
            <input type="time" class="form-control" name="hora_llegada" required>
        </div>

        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="text" class="form-control" name="precio" required>
        </div>

        <div class="text-center">
        <input type="submit" name="bte" value="Guardar" class="btn-submit">
        </div>
    </form>
</div>
<div class="mensaje">
        {{ Session::get('mensaje') }}
    </div>
    </div>
<style>
    .form-container {
    max-width: 100%; /* Reduce el ancho máximo del formulario */
    margin: 0 auto; /* Centra el formulario horizontalmente */
    padding: 12px; /* Reduce el espaciado interior */
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #f9f9f9;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px; /* Aumenta el espacio entre grupos de campos */
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 8px; /* Aumenta el espacio bajo las etiquetas */
}

input[type="text"],
input[type="date"],
input[type="time"] {
    width: 98%;
    padding: 6px; /* Aumenta el tamaño del relleno */
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-top: 4px; /* Agrega un pequeño espacio superior */
}

.btn-submit {
    background-color: hsl(356, 100%, 50%);
    color: #fff;
    padding: 12px 24px; /* Aumenta el tamaño del botón */
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 20px; /* Agrega espacio superior al botón */
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
        </div>
    </div>
</div>
@endsection
