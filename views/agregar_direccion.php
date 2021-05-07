<?php

use Classes\Estado;

open_db_connection();
$estados = Estado::getAllEstados();
close_db_connection();
?>
<div class="main">
  <div class="main__container">
    <div class="main__container--title">
      <h1>Agregar dirección</h1>
    </div>
    <div class="main__container--content">
      <form action="/cuenta/agregar_direccion" method="post">
        <div class="formulario--grupo">
          <div class="formulario--input w-50">
            <label for="estado">Estado:</label>
            <select id="estado" name="estado" type="text" required>
              <?php
              foreach ($estados as $estado) {
              ?>
                <option value="<?= $estado->id ?>"><?= $estado->nombre ?></option>
              <?php
              }
              ?>
            </select>
          </div>
          <div class="formulario--input w-50">
            <label for="municipio">Municipio:</label>
            <input id="municipio" name="municipio" type="text" required />
          </div>
        </div>
        <div class="formulario--grupo">
          <div class="formulario--input w-50">
            <label for="colonia">Colonia:</label>
            <input id="colonia" name="colonia" type="text" required />
          </div>
          <div class="formulario--input w-50">
            <label for="codigo_postal">Código postal:</label>
            <input id="codigo_postal" name="codigo_postal" type="text" required />
          </div>
        </div>
        <div class="formulario--grupo">
          <div class="formulario--input w-100">
            <label for="calle">Calle:</label>
            <input id="calle" name="calle" type="text" required />
          </div>
        </div>
        <div class="formulario--grupo">
          <div class="formulario--input w-50">
            <label for="num_int">Numero interior:</label>
            <input id="num_int" name="num_int" type="text" required />
          </div>
          <div class="formulario--input w-50">
            <label for="num_ext">Numero exterior:</label>
            <input id="num_ext" name="num_ext" type="text" required />
          </div>
        </div>
        <label>Entre calles:</label>
        <div class="formulario--grupo">
          <div class="formulario--input w-50">
            <label for="calle_1">Calle 1:</label>
            <input id="calle_1" name="calle_1" type="text" />
          </div>
          <div class="formulario--input w-50">
            <label for="calle_2">Calle 2:</label>
            <input id="calle_2" name="calle_2" type="text" />
          </div>
        </div>
        <div class="formulario--final">
          <button class="boton" type="submit">Enviar</button>
        </div>
      </form>
    </div>
  </div>
</div>