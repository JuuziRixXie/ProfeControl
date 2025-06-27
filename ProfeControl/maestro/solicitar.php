<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud del Maestro</title>
    <style>
        :root {
            --rojo-oscuro: #8B0000;
            --rojo-vivo: #B22222;
            --rojo-anaranjado: #FF4500;
            --naranja-claro: #FFA500;
            --naranja-fondo: #fff5f0;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: var(--naranja-fondo);
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

        .form-container {
            max-width: 600px;
            margin: 60px auto;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            color: var(--rojo-vivo);
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
            height: 100px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: var(--rojo-vivo);
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: var(--rojo-anaranjado);
        }
    </style>
</head>
<body>

    <header class="navbar">
        <img src="logo.png" alt="Logo de la Escuela">
        <a class="logout-button" href="index.html">Cerrar Sesión</a>
    </header>

    <div class="form-container">
        <h2>Realizar una Solicitud</h2>
        <form action="procesar_solicitud.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre del Maestro:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="tipo">Tipo de Solicitud:</label>
                <select id="tipo" name="tipo" required>
                    <option value="">-- Selecciona una opción --</option>
                    <option value="curso">Inscripción a Curso</option>
                    <option value="prestamo">Préstamo Económico</option>
                    <option value="permiso">Permiso Personal</option>
                    <option value="equipo">Solicitud de Equipo</option>
                    <option value="otro">Otro</option>
                </select>
            </div>

            <div class="form-group">
                <label for="descripcion">Especifica tu solicitud:</label>
                <textarea id="descripcion" name="descripcion" required placeholder="Describe los detalles de tu solicitud..."></textarea>
            </div>

            <button type="submit">Enviar Solicitud</button>
        </form>
    </div>

</body>
</html>
