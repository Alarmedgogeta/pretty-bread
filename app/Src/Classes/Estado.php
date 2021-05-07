<?php

namespace Classes;

use Abstract\Entity;

class Estado extends Entity
{
  public $nombre;

  private static $NOMBRE_DE_LA_ENTIDAD = 'estados';
  
  public function __construct(string $nombre, int $id)
  {
    $this->id = $id;
    $this->nombre = $nombre;
  }

  function loadInstance()
  {
    //
  }

  function getAtributes()
  {
    $atributes = [
      'id' => $this->id,
      'nombre' => $this->nombre
    ];
    return $atributes;
  }

  static function getInstanceOfArray(array $atributes)
  {
    $instance = new Estado(
      (string) $atributes['nombre'],
      (int) $atributes['id']
    );
    return $instance;
  }

  public static function getEstadoById(int $id)
  {
    return Estado::getById($id, Estado::$NOMBRE_DE_LA_ENTIDAD);
  }

  public static function getAllEstados(string $filter = '')
  {
    return Estado::getAll(Estado::$NOMBRE_DE_LA_ENTIDAD, $filter);
  }
}