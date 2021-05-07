<?php

use Classes\Categoria;

open_db_connection();
$categories = Categoria::getAllCategorias('activo = 1');
close_db_connection();
$rows = array_chunk($categories, 3);

?>
<div class="categories">
  <?php
  foreach ($rows as $row) {
    ?>
    <div class="categories__container">
      <?php
      foreach ($row as $categoria) {
        ?>
        <div class="category">
          <div class="category__container">
            <div class="category__container--name">
              <span><?= $categoria->nombre ?></span>
            </div>
            <div class="category__container--img">
              <img src="<?= $categoria->portada ?>" alt="imagen_categoria" />
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