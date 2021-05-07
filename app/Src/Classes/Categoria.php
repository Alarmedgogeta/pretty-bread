<?php

namespace Classes;

use Abstract\Entity;

class Categoria extends Entity
{
  public $nombre;
  public $descripcion;
  public $portada;

  private static $NOMBRE_DE_LA_ENTIDAD = 'categorias';
  private static $URL_BASE = 'http://localhost/uploads/img/categories/';
  
  public function __construct(
    string $nombre,
    string $descripcion,
    string $portada,
    int $id = 0
  )
  {
    $this->id = $id;
    $this->nombre = $nombre;
    $this->descripcion = $descripcion;
    $this->portada = startsWith($portada, Categoria::$URL_BASE) ? $portada : Categoria::$URL_BASE . $portada;
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
      'portada' => $this->portada
    ];
    return $atributes;
  }

  static function getInstanceOfArray(array $atributes)
  {
    $instance = new Categoria(
      (string) $atributes['nombre'],
      (string) $atributes['descripcion'],
      (string) $atributes['portada'],
      (int) $atributes['id']
    );
    return $instance;
  }

  public static function getCategoriaById(int $id)
  {
    return Categoria::getById($id, Categoria::$NOMBRE_DE_LA_ENTIDAD);
  }

  public static function getAllCategorias($filter = '')
  {
    return Categoria::getAll(Categoria::$NOMBRE_DE_LA_ENTIDAD, $filter);
  }

  public function registerCategoria()
  {
    return $this->insert(Categoria::$NOMBRE_DE_LA_ENTIDAD);
  }

  public function updateCategoria()
  {
    return $this->update(Categoria::$NOMBRE_DE_LA_ENTIDAD);
  }

  public function deleteCategoria()
  {
    return $this->inactive(Categoria::$NOMBRE_DE_LA_ENTIDAD);
  }
}