<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel del Maestro</title>
    <style>
        :root {
            --rojo-oscuro: #8B0000;
            --rojo-vivo: #B22222;
            --rojo-anaranjado: #FF4500;
            --naranja-fuerte: #FF6347;
            --naranja-claro: #FFA500;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #fff5f0;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: linear-gradient(to right, var(--rojo-oscuro), var(--naranja-claro));
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .navbar img {
            height: 50px;
        }

        .logout-button {
            background-color: white;
            color: var(--rojo-oscuro);
            border: 2px solid var(--rojo-oscuro);
            padding: 8px 16px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .logout-button:hover {
            background-color: var(--rojo-oscuro);
            color: white;
        }

        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: calc(100vh - 80px);
            text-align: center;
        }

        .action-button {
            background-color: var(--rojo-vivo);
            color: white;
            border: none;
            padding: 20px 40px;
            margin: 20px;
            font-size: 24px;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 250px;
        }

        .action-button:hover {
            background-color: var(--rojo-anaranjado);
        }
    </style>
</head>
<body>

    <header class="navbar">
        <img src="logo.png" alt="Logo de la Escuela">
        <a class="logout-button" href="index.html">Cerrar Sesión</a>
    </header>

    <div class="content">
        <button class="action-button" onclick="window.location.href='solicitar.php'">Solicitar</button>
        <button class="action-button" onclick="window.location.href='verSolicitudes.php'">Mis Solicitudes</button>
    </div>

</body>
</html>
