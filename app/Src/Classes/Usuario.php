<?php

namespace Classes;

use Abstract\Entity;

class Usuario extends Entity
{
  public $id_tipo;
  public $correo;
  private $pass;
  public $nombre;
  public $apellidos;
  public $telefono;

  private static $NOMBRE_DE_LA_ENTIDAD = 'usuarios';
  
  public function __construct(
    int $id_tipo,
    string $correo,
    string $pass,
    string $nombre,
    string $apellidos,
    string $telefono,
    int $id = 0
  )
  {
    $this->id = $id;
    $this->id_tipo = $id_tipo;
    $this->correo = $correo;
    $this->pass = $pass;
    $this->nombre = $nombre;
    $this->apellidos = $apellidos;
    $this->telefono = $telefono;
  }

  function loadInstance()
  {
    $this->carrito = new CarritoDeUsuario($this->id);
    $this->direcciones = Direccion::getAllDirecciones("id_usuario = $this->id");
    $this->pedidos = Pedido::getAllPedidos("id_usuario = $this->id");
  }

  function getAtributes()
  {
    $atributes = [
      'id' => $this->id,
      'id_tipo' => $this->id_tipo,
      'correo' => $this->correo,
      'pass' => $this->pass,
      'nombre' => $this->nombre,
      'apellidos' => $this->apellidos,
      'telefono' => $this->telefono
    ];
    return $atributes;
  }

  static function getInstanceOfArray(array $atributes)
  {
    $instance = new Usuario(
      (int) $atributes['id_tipo'],
      (string) $atributes['correo'],
      (string) $atributes['pass'],
      (string) $atributes['nombre'],
      (string) $atributes['apellidos'],
      (string) $atributes['telefono'],
      (int) $atributes['id']
    );
    return $instance;
  }

  public static function login(string $correo, string $pass)
  {
    $sql = "SELECT * FROM " . Usuario::$NOMBRE_DE_LA_ENTIDAD . " WHERE correo LIKE '$correo' AND pass LIKE '$pass'";
    $consulta = select_element($sql);
    if (empty($consulta)) {
      return "Correo y/o contraseña incorrectos";
    }
    return Usuario::getUsuarioById((int) $consulta['id']);
  }

  public static function getUsuarioById(int $id)
  {
    return Usuario::getById($id, Usuario::$NOMBRE_DE_LA_ENTIDAD);
  }

  public static function getAllUsuarios($filter = '')
  {
    return Usuario::getAll(Usuario::$NOMBRE_DE_LA_ENTIDAD, $filter);
  }

  public function registerUsuario()
  {
    return $this->insert(Usuario::$NOMBRE_DE_LA_ENTIDAD);
  }

  public function updateUsuario()
  {
    return $this->update(Usuario::$NOMBRE_DE_LA_ENTIDAD);
  }

  public function deleteUsuario()
  {
    return $this->inactive(Usuario::$NOMBRE_DE_LA_ENTIDAD);
  }

  public function getPass()
  {
    return $this->pass;
  }

  public function setPass(string $pass)
  {
    $this->pass = $pass;
  }

  public function getHiddenPass()
  {
    $pass = '';
    $count_letters = strlen($this->pass);
    for ($i=0; $i < $count_letters; $i++) { 
      $pass .= '*';
    }
    return $pass;
  }
}