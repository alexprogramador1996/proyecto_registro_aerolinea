@extends("menu")
@section("content")
<div class="pasajero-form">
    <h2>Información del Pasajero</h2>
    <form action="guardarp" method="post">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" class="form-control" name="apellido" required>
        </div>
        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" class="form-control" name="fecha_nacimiento" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nacionalidad">Nacionalidad:</label>
            <input type="text" name="nacionalidad" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tipos_equipajes">Tipos de Equipajes:</label>
            <input type="text" name="tipos_equipajes" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
</div>
<div class="mensaje">
        {{ Session::get('mensaje') }}
    </div>
    </div>
<style>
    .container {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }

    .pasajero-form h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="date"],
    input[type="time"] {
    width: 98%;
    padding: 6px; /* Aumenta el tamaño del relleno */
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-top: 4px; /* Agrega un pequeño espacio superior */
}
    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>
</div>
        </div>
    </div>
</div>
@endsection
