<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Panel Maestro</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../ESTILOS/EstiloMaestro.css">
</head>
<body>
  <aside class="sidebar">
    <div>
      <img src="../../IMAGENES/Logo.png" alt="Logo">
      <div class="sidebar-nav">
        <button onclick="mostrarSeccion('asistencia')">Asistencia</button>
        <button onclick="mostrarSeccion('solicitudes')">Solicitudes</button>
      </div>
    </div>
    <a class="logout-button" href="../../index.html">Cerrar Sesión</a>
  </aside>

  <section class="content">
    <div id="asistencia" class="section active">
      <h2>Registrar Asistencia</h2>
      <input type="date" placeholder="Fecha">
      <input type="time" placeholder="Hora de Entrada">
      <input type="time" placeholder="Hora de Salida">
      <button class="action-btn edit-btn">Enviar</button>
    </div>

    <div id="solicitudes" class="section">
      <h2>Mis Solicitudes</h2>
      <button class="action-btn edit-btn" onclick="abrirFormularioSolicitud()">Crear Solicitud</button>
      <div class="solicitud">
        <p><strong>Tipo:</strong> Curso</p>
        <p><strong>Descripción:</strong> Solicito curso de capacitación docente</p>
        <button class="action-btn delete-btn" onclick="confirmarCancelar()">Cancelar</button>
      </div>
      
    </div>
  </section>

  <!-- Modal Solicitud -->
  <div id="modal-solicitud" style="display:none; position:fixed; top:0; left:0; right:0; bottom:0; background:rgba(0,0,0,0.4); justify-content:center; align-items:center;">
    <div style="background:white; padding:30px; border-radius:10px; width:400px;">
      <h3>Crear Solicitud</h3>
      <select>
        <option>Curso</option>
        <option>Préstamo</option>
        <option>Vacaciones</option>
        <option>Permiso especial</option>
        <option>Otro</option>
      </select>
      <textarea placeholder="Descripción..."></textarea>
      <button class="action-btn edit-btn" onclick="confirmarCrearSolicitud()">Aceptar</button>
      <button class="action-btn delete-btn" onclick="cerrarFormularioSolicitud()">Cancelar</button>
    </div>
  </div>

  <!-- Modal Confirmación -->
  <div id="modal-confirmacion" style="display:none; position:fixed; top:0; left:0; right:0; bottom:0; background:rgba(0,0,0,0.4); justify-content:center; align-items:center;">
    <div style="background:white; padding:20px; border-radius:10px; text-align:center;">
      <p>¿Estás seguro?</p>
      <button class="action-btn edit-btn" onclick="cerrarTodosModales()">Sí</button>
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

    function abrirFormularioSolicitud() {
      document.getElementById('modal-solicitud').style.display = 'flex';
    }

    function cerrarFormularioSolicitud() {
      document.getElementById('modal-solicitud').style.display = 'none';
    }

    function confirmarCrearSolicitud() {
      document.getElementById('modal-solicitud').style.display = 'none';
      document.getElementById('modal-confirmacion').style.display = 'flex';
    }

    function confirmarCancelar() {
      document.getElementById('modal-confirmacion').style.display = 'flex';
    }

    function cerrarConfirmacion() {
      document.getElementById('modal-confirmacion').style.display = 'none';
    }

    function cerrarTodosModales() {
      cerrarFormularioSolicitud();
      cerrarConfirmacion();
    }
  </script>
</body>
</html>