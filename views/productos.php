<?php

$producto = (object) [
  'id' => 1
];

?>
<div class="main">
  <div class="main__container">
    <div class="main__container--title">
      <h1>Productos</h1>
    </div>
    <div class="items__container">
      <div class="item_card">
        <div class="item_card__container">
          <div class="item_card__container--cover">
            <img src="https://theartisanbakery.com/wp-content/uploads/2020/10/002A3416-353x353.jpg" alt="panecito" />
          </div>
          <div class="item_card__container--content">
            <div class="product_card__content--name">
              <span class="product-name">Cuernito</span>
            </div>
            <div class="product_card__content--price">
              <span class="product-price">$ 599.00</span>
            </div>
            <div class="product_card__content--descripcion">
              <span class="product-descripcion">Este es un cuernito bien bonito y sabrosito sdfasdfasfasfdasfasdf dasf sf af dsf dsa fas fasf sa fase fdes feas</span>
            </div>
          </div>
          <div class="item_card__container--actions">
            <a class="btn-edit" href="/cuenta/ediar_producto/?id=<?= $producto->id ?>">Editar</a>
            <a class="btn-delete" href="/cuenta/eliminar_producto/?id=<?= $producto->id ?>">Eliminar</a>
          </div>
        </div>
      </div>
      <div class="formulario--final">
        <a href="/productos/agregar" class="boton" type="submit">Agregar producto</a>
      </div>
    </div>
  </div>
</div>