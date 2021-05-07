<div class="main">
  <div class="main__container">
      <div class="main__container--title">
        <h1>Mis Datos</h1>
      </div>
      <div class="main__container--content">
        <form>
          <div class="formulario--grupo">
            <div class="formulario--input w-100">
              <label for="email">Correo:</label>
              <input id="email" name="email" type="text" value="<?= $user->correo ?>" disabled />
            </div>
          </div>
          <div class="formulario--grupo">
            <div class="formulario--input w-100">
              <label for="pass">Contraseña:</label>
              <input id="pass" name="pass" type="password" value="<?= $user->getHiddenPass() ?>" disabled />
            </div>
          </div>
          <div class="formulario--grupo">
            <div class="formulario--input w-100">
              <label for="name">Nombre:</label>
              <input id="name" name="name" type="text" value="<?= $user->nombre ?>" disabled />
            </div>
          </div>
          <div class="formulario--grupo">
            <div class="formulario--input w-100">
              <label for="apellidos">Apellidos:</label>
              <input id="apellidos" name="apellidos" type="text" value="<?= $user->apellidos ?>" disabled />
            </div>
          </div>
          <div class="formulario--grupo">
            <div class="formulario--input w-100">
              <label for="tel">Teléfono:</label>
              <input id="tel" name="tel" type="text" value="<?= $user->telefono ?>" disabled />
            </div>
          </div>
          <div class="formulario--final">
            <a class="boton" href="/cuenta/editar">Editar</a>
          </div>
        </form>
      </div>
  </div>
</div>