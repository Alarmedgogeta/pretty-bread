<?php

use Classes\Direccion;
use Classes\Estado;

open_db_connection();
$estados = Estado::getAllEstados();
$direccion = Direccion::getDireccionById((int) $_GET['id']);
close_db_connection();
?>
<div class="main">
  <div class="main__container">
    <div class="main__container--title">
      <h1>agregar direccion</h1>
    </div>
    <div class="main__container--content">
      <form action="/cuenta/editar_direccion" method="post">
      <input type="hidden" name="id" name="id" value="<?= $direccion->id ?>">
        <div class="formulario--grupo">
          <div class="formulario--input w-50">
            <label for="estado">Estado:</label>
            <select id="estado" name="estado" type="text" required>
              <?php
              foreach ($estados as $estado) {
              ?>
                <option value="<?= $estado->id ?>" <?= $estado->id === $direccion->id_estado ? 'selected' : '' ?>><?= $estado->nombre ?></option>
              <?php
              }
              ?>
            </select>
          </div>
          <div class="formulario--input w-50">
            <label for="municipio">Municipio:</label>
            <input id="municipio" name="municipio" type="text" value="<?= $direccion->municipio ?>" required />
          </div>
        </div>
        <div class="formulario--grupo">
          <div class="formulario--input w-50">
            <label for="colonia">Colonia:</label>
            <input id="colonia" name="colonia" type="text" value="<?= $direccion->colonia ?>" required />
          </div>
          <div class="formulario--input w-50">
            <label for="codigo_postal">Codigo postal:</label>
            <input id="codigo_postal" name="codigo_postal" type="text" value="<?= $direccion->codigo_postal ?>" required />
          </div>
        </div>
        <div class="formulario--grupo">
          <div class="formulario--input w-100">
            <label for="calle">Calle:</label>
            <input id="calle" name="calle" type="text" value="<?= $direccion->calle ?>" required />
          </div>
        </div>
        <div class="formulario--grupo">
          <div class="formulario--input w-50">
            <label for="num_int">Numero interior:</label>
            <input id="num_int" name="num_int" type="text" value="<?= $direccion->num_int ?>" required />
          </div>
          <div class="formulario--input w-50">
            <label for="num_ext">Numero exterior:</label>
            <input id="num_ext" name="num_ext" type="text" value="<?= $direccion->num_ext ?>" required />
          </div>
        </div>
        <label>Entre calles:</label>
        <div class="formulario--grupo">
          <div class="formulario--input w-50">
            <label for="calle_1">Calle 1:</label>
            <input id="calle_1" name="calle_1" type="text" value="<?= $direccion->calle_1 ?>" />
          </div>
          <div class="formulario--input w-50">
            <label for="calle_2">Calle 2:</label>
            <input id="calle_2" name="calle_2" type="text" value="<?= $direccion->calle_2 ?>" />
          </div>
        </div>
        <div class="formulario--final">
          <button class="boton" type="submit">Enviar</button>
        </div>
      </form>
    </div>
  </div>
</div>