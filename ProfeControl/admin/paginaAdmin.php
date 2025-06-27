<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador</title>
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
        }

        .add-user-btn {
            background-color: var(--rojo-vivo);
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            margin-bottom: 20px;
        }

        .add-user-btn:hover {
            background-color: var(--rojo-anaranjado);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
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

        .action-btn {
            padding: 6px 12px;
            margin: 2px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
        }

        .edit-btn {
            background-color: var(--naranja-fuerte);
        }

        .delete-btn {
            background-color: var(--rojo-vivo);
        }

        /* tuneo pal modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0; top: 0;
            width: 100%; height: 100%;
            background-color: rgba(0,0,0,0.4);
        }

        .modal-content {
            background-color: white;
            margin: 10% auto;
            padding: 20px;
            border-radius: 10px;
            width: 90%;
            max-width: 400px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        .modal-content input,
        .modal-content select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .modal-content button {
            margin-top: 10px;
            width: 100%;
            padding: 10px;
            background-color: var(--rojo-vivo);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .modal-content button:hover {
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
        <button class="add-user-btn" onclick="document.getElementById('userModal').style.display='block'">Añadir Usuario</button>

        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                /*
                // === EJEMPLO DE CONEXIÓN Y CONSULTA A POSTGRES ===
                include 'conexion.php';

                $query = "SELECT nombre, username FROM usuarios WHERE tipo != 'admin'";
                $result = pg_query($conn, $query);

                while ($row = pg_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['nombre']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['username']) . "</td>";
                    echo "<td>
                            <button class='action-btn edit-btn'>Editar</button>
                            <button class='action-btn delete-btn'>Eliminar</button>
                          </td>";
                    echo "</tr>";
                }

                pg_close($conn);
                */
                ?>
                <!-- FILA DE EJEMPLO -->
                <tr>
                    <td>Ejemplo Usuario</td>
                    <td>usuario123</td>
                    <td>
                        <button class="action-btn edit-btn">Editar</button>
                        <button class="action-btn delete-btn">Eliminar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- MODAL -->
    <div id="userModal" class="modal">
        <div class="modal-content">
            <h3>Nuevo Usuario</h3>
            <!-- 
            // Cambiar action a crear_usuario.php si se va a usar 
            // método POST con backend 
            -->
            <form method="POST" action="crear_usuario.php" onsubmit="return confirmarCreacion();">
                <input type="text" name="nombre" placeholder="Nombre completo" required>
                <select name="tipo" required>
                    <option value="">Selecciona tipo de usuario</option>
                    <option value="supervisor">Supervisor</option>
                    <option value="maestro">Maestro</option>
                </select>
                <input type="text" name="usuario" placeholder="Username" required>
                <input type="password" name="contrasena" placeholder="Contraseña" required>
                <button type="submit">Crear</button>
            </form>
        </div>
    </div>

    <script>
        //Esto es para que si clickean fuera el modal se cierre
        window.onclick = function(event) {
            const modal = document.getElementById('userModal');
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        function confirmarCreacion() {
            return confirm("¿Deseas crear este usuario?");
        }
    </script>

</body>
</html>
