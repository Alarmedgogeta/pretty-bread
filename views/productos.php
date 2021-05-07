<?php

use Classes\Producto;

open_db_connection();
$productos = Producto::getAllProductos('activo = 1');
close_db_connection();

?>
<div class="main">
  <div class="main__container">
    <div class="main__container--title">
      <h1>Productos</h1>
    </div>
    <div class="items__container">
      <?php
      foreach ($productos as $producto) {
      ?>
        <div class="item_card">
          <div class="item_card__container">
            <div class="item_card__container--cover">
              <img src="<?= $producto->portada ?>" alt="panecito" />
            </div>
            <div class="item_card__container--content">
              <div class="product_card__content--name">
                <span class="product-name"><?= $producto->nombre ?></span>
              </div>
              <div class="product_card__content--price">
                <span class="product-price">$<?= $producto->precio ?></span>
              </div>
              <div class="product_card__content--descripcion">
                <span class="product-descripcion"><?= $producto->descripcion ?></span>
              </div>
            </div>
            <div class="item_card__container--actions">
              <a class="btn-edit" href="/productos/editar/?id=<?= $producto->id ?>">Editar</a>
              <a class="btn-delete" href="/productos/eliminar/?id=<?= $producto->id ?>">Eliminar</a>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
      <div class="formulario--final">
        <a href="/productos/agregar" class="boton" type="submit">Agregar producto</a>
      </div>
    </div>
  </div>
</div>