<?php

use Classes\Categoria;

$id = (int) $_GET['id'];

open_db_connection();
$categoria = Categoria::getCategoriaById($id);
close_db_connection();

?>
<div class="main">
  <div class="main__container">
    <div class="main__container--title">
      <h1>Editar categoria</h1>
    </div>
    <div class="main__container--content">
      <form action="/categorias/editar" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" id="id" value="<?= $id ?>" />
        <div class="formulario--grupo">
          <div class="formulario--input w-100">
            <label for="nombre">Nombre:</label>
            <input id="nombre" name="nombre" type="text" required value="<?= $categoria->nombre ?>" />
          </div>
        </div>
        <div class="formulario--grupo">
          <div class="formulario--input w-100">
            <label for="descripcion">Descripcion:</label>
            <input id="descripcion" name="descripcion" type="text" required value="<?= $categoria->descripcion ?>" />
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