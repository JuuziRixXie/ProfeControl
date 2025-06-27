<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Solicitudes</title>
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

        .container {
            max-width: 800px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .solicitud-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }

        .solicitud-card p {
            margin: 8px 0;
        }

        .cancelar-btn {
            margin-top: 10px;
            padding: 8px 16px;
            background-color: var(--rojo-vivo);
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .cancelar-btn:hover {
            background-color: var(--rojo-anaranjado);
        }
    </style>
</head>
<body>

    <header class="navbar">
        <img src="logo.png" alt="Logo de la Escuela">
        <a class="logout-button" href="index.html">Cerrar Sesión</a>
    </header>

    <div class="container">
        <h2 style="text-align:center; color: var(--rojo-vivo); margin-bottom: 30px;">Mis Solicitudes</h2>

        <!-- EJEMPLO DE SOLICITUD -->
        <div class="solicitud-card">
            <p><strong>Tipo:</strong> Curso</p>
            <p><strong>Descripción:</strong> Taller de innovación educativa</p>
            <p><strong>Estado:</strong> Pendiente</p>
            <form method="POST" action="cancelar_solicitud.php" onsubmit="return confirmarCancelacion();">
                <!-- <input type="hidden" name="id_solicitud" value="123"> -->
                <button type="submit" class="cancelar-btn">Cancelar</button>
            </form>
        </div>

        <div class="solicitud-card">
            <p><strong>Tipo:</strong> Préstamo</p>
            <p><strong>Descripción:</strong> Préstamo económico por $3000</p>
            <p><strong>Estado:</strong> Aceptada</p>
        </div>

        <div class="solicitud-card">
            <p><strong>Tipo:</strong> Equipo</p>
            <p><strong>Descripción:</strong> Solicitud de proyector para salón</p>
            <p><strong>Estado:</strong> Rechazada</p>
        </div>

        <?php
        /*
        include 'conexion.php';
        $id_maestro = $_SESSION['id']; // suponiendo sesión ya iniciada

        $query = "SELECT id, tipo, descripcion, estado FROM solicitudes WHERE id_maestro = $1 ORDER BY id DESC";
        $result = pg_query_params($conn, $query, array($id_maestro));

        while ($row = pg_fetch_assoc($result)) {
            echo "<div class='solicitud-card'>";
            echo "<p><strong>Tipo:</strong> " . htmlspecialchars($row['tipo']) . "</p>";
            echo "<p><strong>Descripción:</strong> " . htmlspecialchars($row['descripcion']) . "</p>";
            echo "<p><strong>Estado:</strong> " . htmlspecialchars($row['estado']) . "</p>";
            if ($row['estado'] == 'pendiente') {
                echo "<form method='POST' action='cancelar_solicitud.php' onsubmit='return confirmarCancelacion();'>";
                echo "<input type='hidden' name='id_solicitud' value='" . $row['id'] . "'>";
                echo "<button type='submit' class='cancelar-btn'>Cancelar</button>";
                echo "</form>";
            }
            echo "</div>";
        }

        pg_close($conn);
        */
        ?>
    </div>

    <script>
        function confirmarCancelacion() {
            return confirm("¿Estás seguro de que deseas cancelar esta solicitud?");
        }
    </script>

</body>
</html>
