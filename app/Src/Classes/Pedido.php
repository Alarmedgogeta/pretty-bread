<?php

namespace Classes;

use Abstract\Entity;
use DateTime;

class Pedido extends Entity
{
  public $id_usuario;
  public $fecha;

  private static $NOMBRE_DE_LA_ENTIDAD = 'pedidos';
  
  public function __construct(int $id_usuario, DateTime $fecha, int $id = 0)
  {
    $this->id = $id;
    $this->id_usuario = $id_usuario;
    $this->fecha = $fecha;
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
      'fecha' => $this->fecha->format('Y-m-d H:i:s'),
    ];
    return $atributes;
  }

  static function getInstanceOfArray(array $atributes)
  {
    $instance = new Pedido(
      (int) $atributes['id_usuario'],
      getDateTime($atributes['fecha']),
      (int) $atributes['id']
    );
    return $instance;
  }
  
  public static function getPedidoPorId(int $id)
  {
    return Pedido::getById($id, Pedido::$NOMBRE_DE_LA_ENTIDAD);
  }

  public static function getAllPedidos(string $filter = '')
  {
    return Pedido::getAll(Pedido::$NOMBRE_DE_LA_ENTIDAD, $filter);
  }

  public function registerPedido()
  {
    return $this->insert(Pedido::$NOMBRE_DE_LA_ENTIDAD);
  }

  public function updatePedido()
  {
    return $this->update(Pedido::$NOMBRE_DE_LA_ENTIDAD);
  }

  public function deletePedido()
  {
    return $this->inactive(Pedido::$NOMBRE_DE_LA_ENTIDAD);
  }
}