<?php

namespace Classes;

use Abstract\Entity;

class CarritoDeUsuario
{
  public $id_usuario;
  public $productos;

  private static $NOMBRE_DE_LA_ENTIDAD = 'carritos_de_usuario';
  
  public function __construct(
    $id_usuario
  )
  {
    $this->id_usuario = $id_usuario;
    if ($this->id_usuario > 0) {
      $sql = "SELECT id_producto AS id, cantidad FROM carritos_de_usuario WHERE id_usuario = $this->id_usuario";
      $this->productos = select_elements($sql);
    }
  }

  private function isOnCart(int $id_producto)
  {
    if (count($this->productos) > 0) {
      foreach ($this->productos as $index => $producto) {
        if ($producto['id'] == $id_producto) {
          return $index;
        }
      }
    }
    return 0;
  }

  public function addProducto(int $id_producto, int $cantidad = 1)
  {
    $atributes = [
      'id_producto' => $id_producto,
      'id_usuario' => $this->id_usuario,
      'cantidad' => $cantidad
    ];
    $product = [
      'id' => $id_producto,
      'cantidad' => $cantidad
    ];
    $indexOnCart = $this->isOnCart($id_producto);
    if ($indexOnCart > 0) {
      $this->productos[$indexOnCart]['cantidad'] += $product['cantidad'];
      $atributes['cantidad'] = $this->productos[$indexOnCart]['cantidad'];
      update_db(CarritoDeUsuario::$NOMBRE_DE_LA_ENTIDAD, $atributes, 'id', $this->productos[$indexOnCart]['id']);
    } else {
      array_push($this->productos, $atributes);
      insert_db(CarritoDeUsuario::$NOMBRE_DE_LA_ENTIDAD, $atributes);
    }
  }
}