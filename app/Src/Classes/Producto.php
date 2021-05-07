<?php

namespace Classes;

use Abstract\Entity;

class Producto extends Entity
{
  public $nombre;
  public $descripcion;
  public $precio;
  public $portada;

  private static $NOMBRE_DE_LA_ENTIDAD = 'productos';
  private static $URL_BASE = 'http://localhost/uploads/img/products/';
  
  public function __construct(
    string $nombre,
    string $descripcion,
    float $precio,
    string $portada,
    int $id = 0
  )
  {
    $this->id = $id;
    $this->nombre = $nombre;
    $this->descripcion = $descripcion;
    $this->precio = $precio;
    $this->portada = startsWith($portada, Producto::$URL_BASE) ? $portada : Producto::$URL_BASE . $portada;
  }

  function loadInstance()
  {
    //
  }

  function getAtributes()
  {
    $atributes = [
      'id' => $this->id,
      'nombre' => $this->nombre,
      'descripcion' => $this->descripcion,
      'precio' => $this->precio,
      'portada' => $this->portada
    ];
    return $atributes;
  }

  static function getInstanceOfArray(array $atributes)
  {
    $instance = new Producto(
      (string) $atributes['nombre'],
      (string) $atributes['descripcion'],
      (float) $atributes['precio'],
      (string) $atributes['portada'],
      (int) $atributes['id']
    );
    return $instance;
  }

  public static function getProductoById(int $id)
  {
    return Producto::getById($id, Producto::$NOMBRE_DE_LA_ENTIDAD);
  }

  public static function getAllProductos(string $filter = '')
  {
    return Producto::getAll(Producto::$NOMBRE_DE_LA_ENTIDAD, $filter);
  }

  public function registerProducto()
  {
    return $this->insert(Producto::$NOMBRE_DE_LA_ENTIDAD);
  }

  public function updateProducto()
  {
    return $this->update(Producto::$NOMBRE_DE_LA_ENTIDAD);
  }

  public function deleteProducto()
  {
    return $this->inactive(Producto::$NOMBRE_DE_LA_ENTIDAD);
  }
}