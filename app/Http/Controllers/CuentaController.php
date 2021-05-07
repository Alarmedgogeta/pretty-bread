<?php

namespace Controllers;

use Classes\Direccion;
use Classes\Usuario;

class CuentaController
{
  private function checkLogedId()
  {
    if (!isset($_SESSION['user'])){
      return view('registro');
    }
  }
  public function index()
  {
    $this->checkLogedId();
    return view('mis_datos');
  }

  public function login()
  {
    if (isset($_POST['email']) && isset($_POST['pass'])) {
      open_db_connection();
      $user = Usuario::login($_POST['email'], $_POST['pass']);
      close_db_connection();
      if ($user instanceof Usuario) {
        $_SESSION['user'] = $user;
        header('Location:../tienda');
        exit();
      } else {
        $_SESSION['error'] = $user;
      }
    }
    return view('login');
  }

  public function logout()
  {
    unset($_SESSION['user']);
    session_destroy();
    header('Location:./login');
    exit();
  }

  public function registrarme()
  {
    return view('registro');
  }

  public function datos()
  {
    $this->checkLogedId();
    return view('mis_datos');
  }

  public function editar()
  {
    $this->checkLogedId();
    if ( isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['name']) && isset($_POST['apellidos']) && isset($_POST['tel']) ) {
      $newAtributes = [
        'correo' => $_POST['email'],
        'nombre' => $_POST['name'],
        'apellidos' => $_POST['apellidos'],
        'telefono' => $_POST['tel']
      ];
      $user = $_SESSION['user'];
      $user->setAtributes($newAtributes);
      $user->setPass($_POST['pass']);
      open_db_connection();
      $user->updateUsuario();
      close_db_connection();
      return view('mis_datos');
    }
    return view('editar_datos');
  }

  public function direcciones()
  {
    $this->checkLogedId();
    return view('mis_direcciones');
  }

  public function agregar_direccion()
  {
    $this->checkLogedId();
    if ( isset($_POST['estado']) &&
      isset($_POST['municipio']) &&
      isset($_POST['colonia']) &&
      isset($_POST['calle']) &&
      isset($_POST['codigo_postal']) &&
      isset($_POST['num_int']) &&
      isset($_POST['num_ext'])
    ) {
      $user = $_SESSION['user'];
      $direccion = new Direccion(
        (int) $user->id,
        (int) $_POST['estado'],
        (string) $_POST['municipio'],
        (int) $_POST['codigo_postal'],
        (string) $_POST['colonia'],
        (string) $_POST['calle'],
        (string) $_POST['num_ext'],
        (string) $_POST['num_int'],
        (string) $_POST['calle_1'],
        (string) $_POST['calle_2']
      );
      open_db_connection();
      $direccion->registerDireccion();
      close_db_connection();
      $user->addDireccion($direccion);
      return view('mis_direcciones');
    }
    return view('agregar_direccion');
  }

  public function editar_direccion()
  {
    $this->checkLogedId();
    if ( isset($_POST['id']) &&
      isset($_POST['estado']) &&
      isset($_POST['municipio']) &&
      isset($_POST['colonia']) &&
      isset($_POST['calle']) &&
      isset($_POST['codigo_postal']) &&
      isset($_POST['num_int']) &&
      isset($_POST['num_ext'])
    ) {
      $user = $_SESSION['user'];
      $direccion = new Direccion(
        (int) $user->id,
        (int) $_POST['estado'],
        (string) $_POST['municipio'],
        (int) $_POST['codigo_postal'],
        (string) $_POST['colonia'],
        (string) $_POST['calle'],
        (string) $_POST['num_ext'],
        (string) $_POST['num_int'],
        (string) $_POST['calle_1'],
        (string) $_POST['calle_2'],
        (int) $_POST['id']
      );
      open_db_connection();
      $direccion->updateDireccion();
      close_db_connection();
      $user->addDireccion($direccion);
      return view('mis_direcciones');
    }
    return view('editar_direccion');
  }

  public function eliminar_direccion()
  {
    $user = $_SESSION['user'];
    echo "delete";
    open_db_connection();
    $direccion = Direccion::getDireccionById((int) $_GET['id']);
    $direccion->deleteDireccion();
    close_db_connection();
    $user->removeDireccion($direccion);
    return view('mis_direcciones');
  }

  public function pedidos()
  {
    $this->checkLogedId();
    return view('mis_compras');
  }

  public function carrito()
  {
    $this->checkLogedId();
    return view('carrito');
  }
}