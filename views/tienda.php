<?php

use Classes\Producto;

open_db_connection();
$productos = Producto::getAllProductos('activo = 1');
close_db_connection();
$rows = array_chunk($productos, 3);

?>
<div class="main">
  <div class="store__container">
    <div class="products">
      <?php
      foreach ($rows as $row) {
      ?>
        <div class="produtcs__container">
          <?php
          foreach ($row as $product) {
            ?>
              <div class="product_card">
                <div class="product_card__container">
                  <div class="product_card__container--cover">
                    <img src="<?= $product->portada ?>" alt="imagen-panecito" />
                  </div>
                  <div class="product_card__content">
                    <div class="product_card__content--name">
                      <span class="product-name"><?= $product->nombre ?></span>
                    </div>
                    <div class="product_card__content--price">
                      <span class="product-price">$<?= $product->precio ?></span>
                    </div>
                    <div class="product_card__content--descripcion">
                      <span class="product-descripcion"><?= $product->descripcion ?></span>
                    </div>
                    <div class="product_card__content--add">
                      <button  class="btn-add">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
            <?php
          }
          ?>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
</div>