<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Panel de Administrador</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="../../ESTILOS/EstiloAdmin.css" rel="stylesheet">
</head>
<body>

  <aside class="sidebar">
    <img src="../../IMAGENES/Logo.png">
    <a class="logout-button" href="../../index.html">Cerrar Sesión</a>
  </aside>

  <section class="content">
    <h2>Usuarios Registrados</h2>

    <button class="action-btn edit-btn" onclick="abrirFormulario()">Agregar Usuario</button>

    <table id="tabla-usuarios">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Usuario</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Juan Pérez</td>
          <td>jperez</td>
          <td>
            <button class="action-btn edit-btn">Editar</button>
            <button class="action-btn delete-btn">Eliminar</button>
          </td>
        </tr>
        <tr>
          <td>Ana López</td>
          <td>alopez</td>
          <td>
            <button class="action-btn edit-btn">Editar</button>
            <button class="action-btn delete-btn">Eliminar</button>
          </td>
        </tr>

        <?php
        /*
        include 'conexion.php';

        $query = "SELECT nombre, username FROM usuarios WHERE tipo = 'maestro' OR tipo = 'supervisor'";
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
      </tbody>
    </table>

    <!-- Modal formulario -->
    <div id="modal-formulario" style="display:none; position:fixed; top:0; left:0; right:0; bottom:0; background-color:rgba(0,0,0,0.4); z-index:1000; justify-content:center; align-items:center;">
      <div style="background:white; padding:30px; border-radius:12px; width:400px; box-shadow:0 10px 30px var(--sombra); position:relative;">
        <h3 style="margin-bottom:15px;">Nuevo Usuario</h3>
        <input type="text" id="nombre" placeholder="Nombre" style="width:100%; padding:10px; margin-bottom:10px;">
        <input type="text" id="username" placeholder="Username" style="width:100%; padding:10px; margin-bottom:10px;">
        <select id="tipo" style="width:100%; padding:10px; margin-bottom:10px;">
          <option value="">Selecciona tipo de usuario</option>
          <option value="maestro">Maestro</option>
          <option value="supervisor">Supervisor</option>
        </select>
        <input type="password" id="contrasena" placeholder="Contraseña" style="width:100%; padding:10px; margin-bottom:10px;">
        <input type="text" id="asignatura" placeholder="Asignatura" style="width:100%; padding:10px; margin-bottom:10px;">
        <input type="text" id="escuela" placeholder="Escuela" style="width:100%; padding:10px; margin-bottom:20px;">
        <button class="action-btn edit-btn" onclick="confirmarAgregar()">Crear</button>
        <button class="action-btn delete-btn" onclick="cerrarFormulario()" style="margin-top:10px;">Cancelar</button>
      </div>
    </div>

    <!-- Modal de confirmación -->
    <div id="modal-confirmar" style="display:none; position:fixed; top:0; left:0; right:0; bottom:0; background-color:rgba(0,0,0,0.4); z-index:1001; justify-content:center; align-items:center;">
      <div style="background:white; padding:20px; border-radius:10px; width:300px; text-align:center; box-shadow:0 10px 30px var(--sombra);">
        <p>¿Confirmar creación del usuario?</p>
        <div style="margin-top:20px;">
          <button class="action-btn edit-btn" onclick="crearUsuario()">Sí</button>
          <button class="action-btn delete-btn" onclick="cerrarConfirmacion()">No</button>
        </div>
      </div>
    </div>
  </section>

  <script>
    function abrirFormulario() {
      document.getElementById('modal-formulario').style.display = 'flex';
    }

    function cerrarFormulario() {
      document.getElementById('modal-formulario').style.display = 'none';
    }

    function confirmarAgregar() {
      document.getElementById('modal-confirmar').style.display = 'flex';
    }

    function cerrarConfirmacion() {
      document.getElementById('modal-confirmar').style.display = 'none';
    }

    function crearUsuario() {
      const nombre = document.getElementById('nombre').value;
      const username = document.getElementById('username').value;
      const tipo = document.getElementById('tipo').value;
      const contrasena = document.getElementById('contrasena').value;
      const asignatura = document.getElementById('asignatura').value;
      const escuela = document.getElementById('escuela').value;

      if (!nombre || !username || !tipo || !contrasena) {
        alert("Por favor, completa todos los campos obligatorios.");
        return;
      }

      const tabla = document.querySelector("#tabla-usuarios tbody");
      const fila = document.createElement("tr");
      fila.innerHTML = `
        <td>${nombre}</td>
        <td>${username}</td>
        <td>
          <button class='action-btn edit-btn'>Editar</button>
          <button class='action-btn delete-btn'>Eliminar</button>
        </td>
      `;
      tabla.appendChild(fila);

      cerrarFormulario();
      cerrarConfirmacion();

      // Aquí podrías enviar los datos al backend:
      /*
      fetch("crear_usuario.php", {
        method: "POST",
        body: JSON.stringify({ nombre, username, tipo, contrasena, asignatura, escuela }),
        headers: {
          "Content-Type": "application/json"
        }
      }).then(resp => resp.json()).then(data => {
        console.log("Usuario creado:", data);
      });
      */
    }
  </script>
</body>
</html>
