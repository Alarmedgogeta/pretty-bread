<?php

use Classes\Usuario;

if ( isset($_SESSION['error']) ) {
  ?>
  <div class="main">
    <div class="main__container">
      <div class="main__container--content">
        <h1><?= $_SESSION['error'] ?></h1>
      </div>
    </div>
  </div>
  <?php
  unset($_SESSION['error']);
} else {
?>
  <div class="main">
    <div class="main__container">
      <div class="main__container--title">
        <h1>Iniciar sesion</h1>
      </div>
      <div class="main__container--content">
        <form action="/cuenta/login" method="post">
          <div class="formulario--grupo">
            <div class="formulario--input w-100">
              <label for="email">Correo:</label>
              <input id="email" name="email" type="text" required />
            </div>
          </div>
          <div class="formulario--grupo">
            <div class="formulario--input w-100">
              <label for="pass">Contraseña:</label>
              <input id="pass" name="pass" type="password" required />
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