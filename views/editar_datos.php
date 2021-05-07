<div class="main">
  <div class="main__container">
      <div class="main__container--title">
        <h1>Mis Datos</h1>
      </div>
      <div class="main__container--content">
        <form action="/cuenta/editar" method="post">
          <div class="formulario--grupo">
            <div class="formulario--input w-100">
              <label for="email">Correo:</label>
              <input id="email" name="email" type="text" value="<?= $user->correo ?>" />
            </div>
          </div>
          <div class="formulario--grupo">
            <div class="formulario--input w-100">
              <label for="pass">Contraseña:</label>
              <input id="pass" name="pass" type="password" value="<?= $user->getPass() ?>" />
            </div>
          </div>
          <div class="formulario--grupo">
            <div class="formulario--input w-100">
              <label for="name">Nombre:</label>
              <input id="name" name="name" type="text" value="<?= $user->nombre ?>" />
            </div>
          </div>
          <div class="formulario--grupo">
            <div class="formulario--input w-100">
              <label for="apellidos">Apellidos:</label>
              <input id="apellidos" name="apellidos" type="text" value="<?= $user->apellidos ?>" />
            </div>
          </div>
          <div class="formulario--grupo">
            <div class="formulario--input w-100">
              <label for="tel">Teléfono:</label>
              <input id="tel" name="tel" type="text" value="<?= $user->telefono ?>" />
            </div>
          </div>
          <div class="formulario--final">
            <button class="boton" type="submit">Guardar</button>
          </div>
        </form>
      </div>
  </div>
</div>