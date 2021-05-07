<?php

namespace Classes;

use Abstract\Entity;

class TipoDeUsuario extends Entity
{
  public $nombre;
  public $descripcion;

  private static $NOMBRE_DE_LA_ENTIDAD = 'tipos_de_usuarios';
  
  public function __construct(string $nombre, string $descripcion, int $id)
  {
    $this->id = $id;
    $this->nombre = $nombre;
    $this->descripcion = $descripcion;
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
      'descripcion' => $this->descripcion
    ];
    return $atributes;
  }

  static function getInstanceOfArray(array $atributes)
  {
    $instance = new TipoDeUsuario(
      (string) $atributes['nombre'],
      (string) $atributes['descripcion'],
      (int) $atributes['id']
    );
    return $instance;
  }

  public static function getAllTiposDeUsuarios()
  {
    return TipoDeUsuario::getAll(TipoDeUsuario::$NOMBRE_DE_LA_ENTIDAD);
  }

}