<?php

use Classes\Producto;

$id = (int) $_GET['id'];
open_db_connection();
$producto = Producto::getProductoById($id);
close_db_connection();

?>
<div class="main">
  <div class="main__container">
    <div class="main__container--title">
      <h1>Editar Producto</h1>
    </div>
    <div class="main__container--content">
      <form action="/productos/editar" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id" value="<?= $id ?>" />
        <div class="formulario--grupo">
          <div class="formulario--input w-100">
            <label for="nombre">Nombre:</label>
            <input id="nombre" name="nombre" type="text" required value="<?= $producto->nombre ?>" />
          </div>
        </div>
        <div class="formulario--grupo">
          <div class="formulario--input w-100">
            <label for="descripcion">Descripcion:</label>
            <input id="descripcion" name="descripcion" type="text" required value="<?= $producto->descripcion ?>" />
          </div>
        </div>
        <div class="formulario--grupo">
          <div class="formulario--input w-100">
            <label for="precio">Precio:</label>
            <input id="precio" name="precio" type="number" required value="<?= $producto->precio ?>" />
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