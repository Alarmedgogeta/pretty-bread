<?php

use Classes\Usuario;

if ( isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['tel'])
  ) {
  $usuario = new Usuario(
    2,
    $_POST['email'],
    $_POST['pass'],
    $_POST['nombre'],
    $_POST['apellidos'],
    $_POST['tel']
  );
  open_db_connection();
  $gotRegister = $usuario->registerUsuario();
  close_db_connection();
  if ($gotRegister) {
    ?>
    <div class="main">
      <div class="main__container">
        <div class="main__container--content">
          <h1>Registro exitoso!!!</h1>
        </div>
      </div>
    </div>
    <?php
  } else {
    ?>
    <div class="main">
      <div class="main__container">
        <div class="main__container--content">
          <h1>Registro fallido!!!</h1>
        </div>
      </div>
    </div>
    <?php
  }
} else {
  ?>
  <div class="main">
    <div class="main__container">
      <div class="main__container--title">
        <h1>Registrarme</h1>
      </div>
      <div class="main__container--content">
        <form action="/cuenta/registrarme" method="post">
          <div class="formulario--grupo">
            <div class="formulario--input w-100">
              <label for="email">Correo:</label>
              <input id="email" name="email" type="text" required />
            </div>
          </div>
          <div class="formulario--grupo">
            <div class="formulario--input w-100">
              <label for="pass">Contraseña:</label>
              <input id="pass" name="pass" type="text" required />
            </div>
          </div>
          <div class="formulario--grupo">
            <div class="formulario--input w-100">
              <label for="nombre">Nombre:</label>
              <input id="nombre" name="nombre" type="text" required />
            </div>
          </div>
          <div class="formulario--grupo">
            <div class="formulario--input w-100">
              <label for="apellidos">Apellidos:</label>
              <input id="apellidos" name="apellidos" type="text" required />
            </div>
          </div>
          <div class="formulario--grupo">
            <div class="formulario--input w-100">
              <label for="tel">Teléfono:</label>
              <input id="tel" name="tel" type="text" required />
            </div>
          </div>
          <div class="formulario--final">
            <button class="boton" type="submit">Enviar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php
}