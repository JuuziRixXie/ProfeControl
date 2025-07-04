<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Panel Supervisor</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../ESTILOS/EstiloSupervisor.css">
</head>
<body>
  <aside class="sidebar">
    <div>
      <img src="../../IMAGENES/Logo.png" alt="Logo">
      <div class="sidebar-nav">
        <button onclick="mostrarSeccion('asistencias')">Asistencias</button>
        <button onclick="mostrarSeccion('solicitudes')">Ver Solicitudes</button>
        <button onclick="mostrarSeccion('lista-maestros')">Lista de Maestros</button>
      </div>
    </div>
    <a class="logout-button" href="../../index.html">Cerrar Sesión</a>
  </aside>

  <section class="content">
    <div id="asistencias" class="section active">
      <h2>Asistencias de Maestros</h2>
      <table>
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Hora Entrada</th>
            <th>Hora Salida</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Juan Pérez</td>
            <td>2025-07-04</td>
            <td>08:00</td>
            <td>14:00</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div id="solicitudes" class="section">
      <h2>Solicitudes de Maestros</h2>
      <div class="solicitud">
        <p><strong>Nombre:</strong> Laura Gómez</p>
        <p><strong>Escuela:</strong> Primaria Benito Juárez</p>
        <p><strong>Asignatura:</strong> Español</p>
        <p><strong>Descripción:</strong> Solicito permiso para asistir a congreso</p>
        <button class="action-btn edit-btn" onclick="confirmarAceptar()">Aceptar</button>
        <button class="action-btn delete-btn" onclick="confirmarCancelar()">Rechazar</button>
      </div>
    </div>

    <div id="lista-maestros" class="section">
      <h2>Lista de Maestros</h2>
      <table>
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Escuela</th>
            <th>Asignatura</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>María Fernández</td>
            <td>Secundaria Revolución</td>
            <td>Matemáticas</td>
          </tr>
          <!-- Más registros -->
        </tbody>
      </table>
    </div>
  </section>

  <div id="modal-confirmacion" style="display:none; position:fixed; top:0; left:0; right:0; bottom:0; background:rgba(0,0,0,0.4); justify-content:center; align-items:center;">
    <div style="background:white; padding:20px; border-radius:10px; text-align:center;">
      <p>¿Estás seguro?</p>
      <button class="action-btn edit-btn" onclick="cerrarConfirmacion()">Sí</button>
      <button class="action-btn delete-btn" onclick="cerrarConfirmacion()">No</button>
    </div>
  </div>

  <script>
    function mostrarSeccion(id) {
      document.querySelectorAll('.section').forEach(s => s.classList.remove('active'));
      setTimeout(() => {
        document.getElementById(id).classList.add('active');
      }, 50);
    }

    function confirmarCancelar() {
      document.getElementById('modal-confirmacion').style.display = 'flex';
    }

    function confirmarAceptar() {
      document.getElementById('modal-confirmacion').style.display = 'flex';
    }

    function cerrarConfirmacion() {
      document.getElementById('modal-confirmacion').style.display = 'none';
    }
  </script>
</body>
</html>
