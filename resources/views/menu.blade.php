<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto de Registro de Aerolinea</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        ul.navbar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: hsl(210, 88%, 3%);
            text-align: center; 
        }

        li.nav-item {
            display: inline-block; 
        }

        li.nav-item a {
            display: block;
            color: #fff;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li.nav-item a:hover {
            background-color: black;  /* Hover */
        }

        .dropdown {
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #d91e53;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Contenido principal */
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        a {
            color: #00ff95;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <ul class="navbar">
        <li class="nav-item"><a href="inicio">Inicio</a></li>
        <li class="nav-item dropdown">
            <a href="#" class="dropbtn">Vuelos</a>
            <div class="dropdown-content">
                <a href="vuelos">Nuevo Vuelo</a>
                <a href="{{ route('consulta') }}">Consulta Vuelos</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="dropbtn">Pasajeros</a>
            <div class="dropdown-content">
                <a href="pasajeros">Nuevo Pasajero</a>
                <a href="{{ route('consultap') }}">Consulta Pasajeros</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="dropbtn">Destinos</a>
            <div class="dropdown-content">
                <a href="destinos">Nuevo Destino</a>
                <a href="{{ route('consultade') }}">Consulta Destinos</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="dropbtn">Reservaciones</a>
            <div class="dropdown-content">
                <a href="reservaciones">Nueva Reservaciones</a>
                <a href="{{ route('consultarese') }}">Consulta Reservaciones</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a href="acerca" class="dropbtn">Acerca de</a>
            </div>
        </li>
    </ul>
    <div class="container">
        @yield("content")
    </div>
</body>
</html>
