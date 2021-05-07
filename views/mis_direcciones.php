<div class="main">
  <div class="main__container">
    <div class="main__container--title">
      <h1>Mis direcciones</h1>
    </div>
    <div class="addresses__container">
      <?php
      foreach ($user->direcciones as $direccion) {
        ?>
        <div class="address_card">
          <div class="address_card__container">
            <div class="address_card__container--content">
              <span class="address-state"><?= $direccion->id_estado ?></span>
              <span class="address-postal"><?= $direccion->codigo_postal ?></span>
              <span class="address-street"><?= $direccion->calle ?></span>
              <span class="address-between">Num Int: <?= $direccion->num_int ?>, Num Ext: <?= $direccion->num_ext ?></span>
              <span class="address-between">Entre Calle <?= $direccion->calle_1 ?> y calle <?= $direccion->calle_2 ?></span>
            </div>
            <div class="address_card__container--actions">
              <a class="btn-edit" href="/cuenta/editar_direccion/?id=<?= $direccion->id ?>">Editar</a>
              <a class="btn-delete" href="/cuenta/eliminar_direccion/?id=<?= $direccion->id ?>">Eliminar</a>
            </div>
          </div>
        </div>
        <?php
      }
      ?>
      <div class="formulario--final">
        <a href="/cuenta/agregar_direccion" class="boton" type="submit">Agregar dirección</a>
      </div>
    </div>
  </div>
</div>