<?php

namespace Classes;

use Abstract\Entity;
use DateTime;

class BuzonConsultas extends Entity
{
  public $nombre;
  public $apellidos;
  public $fecha;
  public $correo;
  public $telefono;
  public $asunto;
  public $mensaje;

  private static $NOMBRE_DE_LA_ENTIDAD = 'buzon_consultas';
  
  public function __construct(
    string $nombre,
    string $apellidos,
    string $correo,
    string $telefono,
    string $asunto,
    string $mensaje,
    DateTime $fecha = null,
    int $id = 0
  )
  {
    $this->id = $id;
    $this->nombre = $nombre;
    $this->apellidos = $apellidos;
    $this->correo = $correo;
    $this->telefono = $telefono;
    $this->asunto = $asunto;
    $this->mensaje = $mensaje;
    $this->fecha = $fecha === null ? new DateTime() : $fecha;
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
      'apellidos' => $this->apellidos,
      'correo' => $this->correo,
      'telefono' => $this->telefono,
      'asunto' => $this->asunto,
      'mensaje' => $this->mensaje,
      'fecha' => $this->fecha->format('Y-m-d H:i:s')
    ];
    return $atributes;
  }

  static function getInstanceOfArray(array $atributes)
  {
    $instance = new BuzonConsultas(
      (string) $atributes['nombre'],
      (string) $atributes['apellidos'],
      (string) $atributes['correo'],
      (string) $atributes['telefono'],
      (string) $atributes['asunto'],
      (string) $atributes['mensaje'],
      getDateTime($atributes['fecha']),
      (int) $atributes['id']
    );
    return $instance;
  }

  public static function getBuzonConsultasById(int $id)
  {
    return BuzonConsultas::getById($id, BuzonConsultas::$NOMBRE_DE_LA_ENTIDAD);
  }

  public static function getAllBuzonConsultas($filter = '')
  {
    return BuzonConsultas::getAll(BuzonConsultas::$NOMBRE_DE_LA_ENTIDAD, $filter);
  }

  public function registerBuzonConsultas()
  {
    return $this->insert(BuzonConsultas::$NOMBRE_DE_LA_ENTIDAD);
  }
}