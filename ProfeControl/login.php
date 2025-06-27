<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Colores base */
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

        .login-container {
            max-width: 400px;
            margin: 80px auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        .login-container h2 {
            color: var(--rojo-vivo);
            margin-bottom: 20px;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .login-container button {
            background-color: var(--rojo-vivo);
            color: white;
            border: none;
            padding: 10px 20px;
            margin-top: 10px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-container button:hover {
            background-color: var(--rojo-anaranjado);
        }
    </style>
</head>
<body>

    <header class="navbar">
        <img src="logo.png" alt="Logo de la Escuela">
    </header>

    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form action="procesar_login.php" method="POST">
            <input type="text" name="usuario" placeholder="Usuario" required><br>
            <input type="password" name="contrasena" placeholder="Contraseña" required><br>
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>

</body>
</html>
