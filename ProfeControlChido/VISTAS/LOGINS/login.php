<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Iniciar Sesión</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../ESTILOS/EstiloLogin.css">
</head>
<body>

  <header class="navbar">
    <img src="../../IMAGENES/Logo.png">
  </header>

  <section class="formulario-login">
    <h2>Iniciar Sesión</h2>
    <form action="validar_login.php" method="POST">
      <input type="text" name="usuario" placeholder="Nombre de usuario" required>
      <input type="password" name="contrasena" placeholder="Contraseña" required>
      <button type="submit">Ingresar</button>
    </form>
  </section>

</body>
</html>
