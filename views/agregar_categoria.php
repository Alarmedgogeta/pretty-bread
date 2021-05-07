<div class="main">
  <div class="main__container">
    <div class="main__container--title">
      <h1>Agregar categoria</h1>
    </div>
    <div class="main__container--content">
      <form action="/categorias/agregar" method="post" enctype="multipart/form-data">
        <div class="formulario--grupo">
          <div class="formulario--input w-100">
            <label for="nombre">Nombre:</label>
            <input id="nombre" name="nombre" type="text" required />
          </div>
        </div>
        <div class="formulario--grupo">
          <div class="formulario--input w-100">
            <label for="descripcion">Descripcion:</label>
            <input id="descripcion" name="descripcion" type="text" required />
          </div>
        </div>
        <div class="formulario--grupo">
          <div class="formulario--input w-100">
            <label for="cover">Portada:</label>
            <input id="cover" name="cover" type="file" required />
          </div>
        </div>
        <div class="formulario--final">
          <button class="boton" type="submit">Enviar</button>
        </div>
      </form>
    </div>
  </div>
</div>