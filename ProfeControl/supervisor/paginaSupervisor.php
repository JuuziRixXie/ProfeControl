<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel del Supervisor</title>
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

        .container {
            padding: 40px;
            text-align: center;
        }

        .section {
            margin-bottom: 50px;
        }

        .section h2 {
            color: var(--rojo-vivo);
            margin-bottom: 20px;
        }

        .main-button {
            background-color: var(--rojo-vivo);
            color: white;
            padding: 15px 30px;
            font-size: 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            margin: 20px;
            transition: background-color 0.3s ease;
        }

        .main-button:hover {
            background-color: var(--rojo-anaranjado);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            margin-top: 20px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: var(--rojo-oscuro);
            color: white;
        }

        select {
            padding: 6px;
            border-radius: 5px;
        }

        .solicitud-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            margin: 20px auto;
            width: 90%;
            max-width: 600px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
            text-align: left;
        }

        .solicitud-card p {
            margin: 10px 0;
        }

        .solicitud-card button {
            margin-right: 10px;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
            font-size: 14px;
        }

        .aceptar-btn {
            background-color: var(--naranja-fuerte);
        }

        .rechazar-btn {
            background-color: var(--rojo-vivo);
        }
    </style>
</head>
<body>

    <header class="navbar">
        <img src="logo.png" alt="Logo de la Escuela">
        <a class="logout-button" href="index.html">Cerrar Sesión</a>
    </header>

    <div class="container">
        <!-- BOTONES -->
        <div>
            <button class="main-button" onclick="mostrarSeccion('maestros')">Lista Maestros</button>
            <button class="main-button" onclick="mostrarSeccion('solicitudes')">Ver Solicitudes</button>
        </div>

        <!-- LISTA DE MAESTROS -->
<div id="seccion-maestros" class="section" style="display:none;">
    <h2>Lista de Maestros</h2>
    <form action="actualizar_estado.php" method="POST">
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <!-- EJEMPLO DE COMO QUEDA -->
                <tr>
                    <td>Juan Pérez</td>
                    <td>
                        <select name="estado_juan">
                            <option value="activo">Activo</option>
                            <option value="ausente">Ausente</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Ana López</td>
                    <td>
                        <select name="estado_ana">
                            <option value="activo">Activo</option>
                            <option value="ausente">Ausente</option>
                        </select>
                    </td>
                </tr>

                <?php
                /*
                // CONEXIÓN Y CARGA DINÁMICA DESDE BD
                include 'conexion.php';
                $query = "SELECT id, nombre FROM usuarios WHERE tipo = 'maestro'";
                $result = pg_query($conn, $query);

                while ($row = pg_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['nombre']) . "</td>";
                    echo "<td><select name='estado_{$row['id']}'>
                            <option value='activo'>Activo</option>
                            <option value='ausente'>Ausente</option>
                          </select></td>";
                    echo "</tr>";
                }

                pg_close($conn);
                */
                ?>
            </tbody>
        </table>

        <button type="submit" class="main-button" style="margin-top: 20px;">Actualizar</button>
    </form>
</div>

        <!-- PARA VER SOLICITUDES -->
        <div id="seccion-solicitudes" class="section" style="display:none;">
            <h2>Solicitudes Recibidas</h2>

            <!-- RECUADRO PARA CADA SOLICITUD -->
            <div class="solicitud-card">
                <p><strong>Maestro:</strong> Juan Pérez</p>
                <p><strong>Solicitud:</strong> Inscripción a curso de actualización pedagógica</p>
                <button class="aceptar-btn">Aceptar</button>
                <button class="rechazar-btn">Rechazar</button>
            </div>

            <div class="solicitud-card">
                <p><strong>Maestro:</strong> Ana López</p>
                <p><strong>Solicitud:</strong> Préstamo institucional por $5000</p>
                <button class="aceptar-btn">Aceptar</button>
                <button class="rechazar-btn">Rechazar</button>
            </div>

            <?php
            /*
            // CARGAR SOLICITUDES DESDE BD
            include 'conexion.php';
            $query = "SELECT s.descripcion, u.nombre 
                      FROM solicitudes s
                      JOIN usuarios u ON s.id_maestro = u.id";
            $result = pg_query($conn, $query);

            while ($row = pg_fetch_assoc($result)) {
                echo "<div class='solicitud-card'>";
                echo "<p><strong>Maestro:</strong> " . htmlspecialchars($row['nombre']) . "</p>";
                echo "<p><strong>Solicitud:</strong> " . htmlspecialchars($row['descripcion']) . "</p>";
                echo "<button class='aceptar-btn'>Aceptar</button>";
                echo "<button class='rechazar-btn'>Rechazar</button>";
                echo "</div>";
            }

            pg_close($conn);
            */
            ?>
        </div>
    </div>

    <script>
        function mostrarSeccion(seccion) {
            document.getElementById('seccion-maestros').style.display = seccion === 'maestros' ? 'block' : 'none';
            document.getElementById('seccion-solicitudes').style.display = seccion === 'solicitudes' ? 'block' : 'none';
        }
    </script>

</body>
</html>
