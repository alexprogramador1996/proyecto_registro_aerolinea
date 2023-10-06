@extends("menu")
@section("content")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('guardarrese') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="fecha_reservacion">Fecha de Reservación:</label>
                            <input type="date" class="form-control" name="fecha_reservacion" required>
                        </div>

                        <div class="form-group">
                            <label for="tipo_clase">Tipo de Clase:</label>
                            <input type="text" class="form-control" name="tipo_clase" required>
                        </div>

                        <div class="form-group">
                            <label for="numero_asiento">Número de Asiento:</label>
                            <input type="text" class="form-control" name="numero_asiento" required>
                        </div>

                        <div class="form-group">
                            <label for="costo">Costo:</label>
                            <input type="number" class="form-control" name="costo" step="0.01" required>
                        </div>

                        <div class="form-group">
                            <label for="nombre_aeropuerto">Nombre del Aeropuerto:</label>
                            <input type="text" class="form-control" name="nombre_aeropuerto" required>
                        </div>

                        <div class="form-group">
                            <label for="tipo_pago">Tipo de Pago:</label>
                            <input type="text" class="form-control" name="tipo_pago" required>
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
input[type="number"],
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

/* Estilo para el elemento select */
select.form-control {
    width: 14%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #fff;
    color: #333;
    font-size: 16px;
    cursor: pointer;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

/* Cambiar el color del borde cuando se enfoca el elemento */
select.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

/* Cambiar el estilo del cursor cuando se pasa por encima del elemento */
select.form-control:hover {
    background-color: #f8f9fa;
}

/* Cambiar el estilo del cursor cuando se despliegan las opciones */
select.form-control option:hover {
    background-color: #007bff;
    color: #fff;
}

/* Estilo para las opciones del select cuando se seleccionan */
select.form-control option:checked {
    background-color: #007bff;
    color: #fff;
}


</style>
            </div>
        </div>
    </div>
</div>

            </style>
        </div>
    </div>
</div>
@endsection
