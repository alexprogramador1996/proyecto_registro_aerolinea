@extends("menu")
@section("content")
<div class="destino-form">
    <h2>Editar Destino</h2>
    <form action="{{ route('updatede', $destino->id) }}" method="post">
        @csrf
        Lugar del Destino: <input type="text" name="lugar_destino" value="{{ $destino->lugar_destino }}" class="input-field"><br>
        País: <input type="text" name="pais" value="{{ $destino->pais }}" class="input-field"><br>
        Ciudad: <input type="text" name="ciudad" value="{{ $destino->ciudad }}" class="input-field"><br>
        Clima: <input type="text" name="clima" value="{{ $destino->clima }}" class="input-field"><br>
        Idioma Principal: <input type="text" name="idioma_principal" value="{{ $destino->idioma_principal }}" class="input-field"><br>
        Moneda: <input type="text" name="moneda" value="{{ $destino->moneda }}" class="input-field"><br>
        Estado:
        <select name="estado" class="input-field">
            <option value="1" {{ $destino->estado == 1 ? 'selected' : '' }}>Cancelado</option>
            <option value="0" {{ $destino->estado == 0 ? 'selected' : '' }}>Retrasado</option>
        </select><br>
        <input type="submit" name="btn" value="Guardar" class="btn-submit">
    </form>
</div>

<style>
    .destino-form {
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
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-submit:hover {
        background-color: #0056b3;
    }
</style>
@endsection
