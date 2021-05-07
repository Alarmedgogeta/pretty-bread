<?php

use Classes\Categoria;

open_db_connection();
$categorias = Categoria::getAllCategorias('activo = 1');
close_db_connection();

?>
<div class="main">
  <div class="main__container">
    <div class="main__container--title">
      <h1>Categorias</h1>
    </div>
    <div class="items__container">
      <?php
      foreach ($categorias as $categoria) {
      ?>
        <div class="item_card">
          <div class="item_card__container">
            <div class="item_card__container--cover">
              <img src="<?= $categoria->portada ?>" alt="panecito" />
            </div>
            <div class="item_card__container--content">
              <div class="product_card__content--name">
                <span class="product-name"><?= $categoria->nombre ?></span>
              </div>
              <div class="product_card__content--descripcion">
                <span class="product-descripcion"><?= $categoria->descripcion ?></span>
              </div>
            </div>
            <div class="item_card__container--actions">
              <a class="btn-edit" href="/categorias/editar/?id=<?= $categoria->id ?>">Editar</a>
              <a class="btn-delete" href="/categorias/eliminar/?id=<?= $categoria->id ?>">Eliminar</a>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
      <div class="formulario--final">
        <a href="/categorias/agregar" class="boton" type="submit">Agregar categoria</a>
      </div>
    </div>
  </div>
</div>