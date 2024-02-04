<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" type="image/png" href="../images/icono.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="../styles/login.css" />
  </head>

  <body>
    <?php
    $messages = array();
    if ($messages) {
        foreach ($messages as $message) {
            echo '<span class="alert-message">' . $message . '</span>';
        }
    }
    ?>
    <div class="box">
      <form action="/validate" method="post">
        <h2>Iniciar sesión</h2>
        <div class="input">
          <input title="username" name="username" type="text" required />
          <span>Nombre de usuario</span>
          <i></i>
        </div>
        <div class="input">
          <input title="password" name="password" type="password" required />
          <span>Contraseña</span>
          <i></i>
        </div>
        <input type="submit" value="Entrar" />
      </form>
    </div>
  </body>
</html>
