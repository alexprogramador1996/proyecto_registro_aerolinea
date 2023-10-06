@extends("menu")
@section("content")
<style>
    /* Estilos para la página principal */
    .page-header {
        background-color: black;
        color: #fff;
        text-align: center;
        padding: 10px;
        border-bottom: 12px solid red;
        animation: fadeInLeft 1s ease; 
    }
    @keyframes fadeInLeft  {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    /* Estilos para el contenido principal */
    .main-content {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center; 
    }
    /* Estilos para la galería de imágenes */
    .gallery {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        grid-gap: 20px;
        margin-top: 20px;
    }

    .gallery img {
        width: 100%;
        height: auto;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        animation: fadeIn 1s ease;
        transition: transform 0.3s ease;
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

    .gallery img:hover {
        transform: scale(1.1);
    }

    /* Estilos para el reproductor de música */
    .audio-container {
        margin-top: 18px;
        text-align: center;
    }

    #audioPlayer {
        width: 97%;
        margin-top: 8px;
        background-color: #f4f4f4;
        border-radius: 5px;
        padding: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    select {
        margin-top: 10px;
        padding: 8px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }

    select:hover {
        background-color: #0056b3;
    }

    /* Estilos para el footer */
    .footer {
        background-color: #d91e24;
        color: #fff;
        padding: 1px 0;
        text-align: center;
    }

    .footer p {
        margin: 2px 0;
    }

    .footer a {
        color: #fff;
        text-decoration: none;
    }

    .footer a:hover {
        text-decoration: underline;
    }

    /* Estilos mejorados para el reloj digital */
    #reloj-digital-card {
        background-color: #080101;
        border-radius: 5px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        display: inline-block;
    }

    #reloj-digital {
        font-size: 36px;
        color: #ffffff;
        font-family: 'Arial', sans-serif;
        letter-spacing: 2px;
        text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.3);
        margin: 0;
    }
</style>
<center>
    <div class="page-header">
        <h1>Bienvenido a la Página Principal</h1>
    </div>
    <!-- Reloj digital fuera del main content -->
    <div id="reloj-digital-card">
        <div id="reloj-digital"></div>
    </div>
     <!-- Reproductor de música -->
    <!-- 
    <div class="audio-container">
        <label for="musicSelect">Selecciona una canción:</label>
        <select id="musicSelect" onchange="cambiarCancion()">
            <option value="audios/Shadow of the Day.mp3">Canción 1</option>
            <option value="audios/Leave Out All The Rest.mp3">Canción 2</option>
            <option value="audios/Leave Out All The Rest.mp3">Canción 3</option>
        </select>
        <audio controls id="audioPlayer">
            <source id="audioSource" type="audio/mp3" src="{{ asset('audios/Shadow of the Day.mp3') }}">
            <source id="audioSource" type="audio/mp3" src="{{ asset('audios/Leave Out All The Rest.mp3') }}">
            Tu navegador no soporta el elemento de audio.
        </audio>
    </div>
 -->
    <!-- Galería de imágenes -->
    <div class="gallery">
        <img src="{{ asset('images/Aeropuerto-El-Salvador.jpg') }}" alt="Aeropuerto El Salvador">
        <img src="{{ asset('images/las-principales-aerolineas-del-mundo.jpg') }}" alt="Principales">
        <img src="{{ asset('images/Pasajeros.jpeg') }}" alt="Pasajeros">
        <img src="{{ asset('images/Salas.jpg') }}" alt="Salas">
        <img src="{{ asset('images/Mujer.jpg') }}" alt="Mujer">
        <img src="{{ asset('images/Vistas.jpg') }}" alt="Vistas">
    </div>
    <!-- Footer -->
    <div class="footer">
        <p>Claudia Arely Molina Mejia</p>
        <p>Brenda Lourdes Mena Campos</p>
        <p>Daniel Alexander Aguilar Hernández</p>
        <p>&copy; {{ date('Y') }} DSW23 - Todos los derechos reservados</p>
    </div>
</center>
<script>
    function cambiarCancion() {
        var select = document.getElementById("musicSelect");
        var audioPlayer = document.getElementById("audioPlayer");
        var audioSource = document.getElementById("audioSource");

        // Para actualizar la fuente de audio con la opción seleccionada
        audioSource.src = select.value;
        
        // Recargar y reproducir la nueva canción
        audioPlayer.load();
        audioPlayer.play();
    }

    // Función para obtener la hora actual y actualizar el reloj digital
    function actualizarRelojDigital() {
        var ahora = new Date();
        var horas = ahora.getHours();
        var minutos = ahora.getMinutes();
        var segundos = ahora.getSeconds();

        minutos = minutos < 10 ? '0' + minutos : minutos;
        segundos = segundos < 10 ? '0' + segundos : segundos;

        // Actualizar el contenido del elemento con id 'reloj-digital'
        document.getElementById('reloj-digital').innerHTML = horas + ':' + minutos + ':' + segundos;

        // Llamar a la función cada segundo para mantener actualizado el reloj digital
        setTimeout(actualizarRelojDigital, 1000);
    }

    // Llamar a la función para iniciar el reloj digital cuando la página se carga
    window.onload = function () {
        actualizarRelojDigital();
    };
</script>
@endsection
