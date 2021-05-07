<?php

namespace Classes;

use Abstract\Entity;

class Direccion extends Entity
{
  public $id_usuario;
  public $id_estado;
  public $municipio;
  public $codigo_postal;
  public $colonia;
  public $calle;
  public $num_ext;
  public $num_int;
  public $calle_1;
  public $calle_2;

  private static $NOMBRE_DE_LA_ENTIDAD = 'direcciones';

  public function __construct(
    int $id_usuario,
    int $id_estado,
    string $municipio,
    int $codigo_postal,
    string $colonia,
    string $calle,
    string $num_ext,
    string $num_int,
    string $calle_1 = '',
    string $calle_2 = '',
    int $id = 0

  )
  {
    $this->id = $id;
    $this->id_usuario = $id_usuario;
    $this->id_estado = $id_estado;
    $this->municipio = $municipio;
    $this->codigo_postal = $codigo_postal;
    $this->colonia = $colonia;
    $this->calle = $calle;
    $this->num_ext = $num_ext;
    $this->num_int = $num_int;
    $this->calle_1 = $calle_1;
    $this->calle_2 = $calle_2;
  }

  function loadInstance()
  {
    //
  }

  function getAtributes()
  {
    $atributes = [
      'id' => $this->id,
      'id_usuario' => $this->id_usuario,
      'id_estado' => $this->id_estado,
      'municipio' => $this->municipio,
      'codigo_postal' => $this->codigo_postal,
      'colonia' => $this->colonia,
      'calle' => $this->calle,
      'num_ext' => $this->num_ext,
      'num_int' => $this->num_int,
      'calle_1' => $this->calle_1,
      'calle_2' => $this->calle_2
    ];
    return $atributes;
  }

  static function getInstanceOfArray(array $atributes)
  {
    $instance = new Direccion(
      (int) $atributes['id_usuario'],
      (int) $atributes['id_estado'],
      (string) $atributes['municipio'],
      (int) $atributes['codigo_postal'],
      (string) $atributes['colonia'],
      (string) $atributes['calle'],
      (string) $atributes['num_ext'],
      (string) $atributes['num_int'],
      (string) $atributes['calle_1'],
      (string) $atributes['calle_2'],
      (int) $atributes['id']
    );
    return $instance;
  }

  public static function getDireccionById(int $id)
  {
    return Direccion::getById($id, Direccion::$NOMBRE_DE_LA_ENTIDAD);
  }

  public static function getAllDirecciones($filter = '')
  {
    return Direccion::getAll(Direccion::$NOMBRE_DE_LA_ENTIDAD, $filter);
  }

  public function registerDireccion()
  {
    return $this->insert(Direccion::$NOMBRE_DE_LA_ENTIDAD);
  }

  public function updateDireccion()
  {
    return $this->update(Direccion::$NOMBRE_DE_LA_ENTIDAD);
  }

  public function deleteDireccion()
  {
    return $this->inactive(Direccion::$NOMBRE_DE_LA_ENTIDAD);
  }
}