@extends("menu")
@section("content")
<style>
    /* Estilos para la página de "Acerca de" */
    .about-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center; 
    }

    .developer-container {
        display: flex;
        justify-content: space-between; /* Para distribuir las tarjetas uniformemente */
        flex-wrap: wrap; /* Para que las tarjetas se envuelvan a la siguiente fila cuando no haya suficiente espacio */
    }

    .developer {
        width: calc(30.33% - 20px); /* Ancho de cada tarjeta (30.33% con 20px de espacio entre ellas) */
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        animation: fadeIn 1s ease; /* Animación de desvanecimiento al cargar */
        transition: transform 0.3s ease; /* Transición suave para el efecto al pasar el cursor */
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .developer:hover {
        transform: scale(1.05); /* Hacer que la tarjeta se agrande un poco al pasar el cursor */
    }

    .developer img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 10px;
    }

    .developer h3 {
        color: #333;
    }

    .developer p {
        color: #555;
    }
</style>
<div class="about-container">
    <h2>Acerca de los Desarrolladores</h2>
    <div class="developer-container">
        <div class="developer">
            <img src="{{ asset('images/programador.png') }}" alt="Desarrollador 1">
            <h3>Daniel Alexander Aguilar Hernández</h3>
            <p>Estudiante de Desarrollo de Software</p>
        </div>
        <div class="developer">
            <img src="{{ asset('images/desarrollador.png') }}" alt="Desarrollador 2">
            <h3>Claudia Arely Molina Mejia</h3>
            <p>Estudiante de Desarrollo de Software</p>
        </div>
        <div class="developer">
            <img src="{{ asset('images/programador (1).png') }}" alt="Desarrollador 3">
            <h3>Brenda Lourdes Mena Campos</h3>
            <p>Estudiante de Desarrollo de Software</p>
        </div>
    </div>
</div>
@endsection
