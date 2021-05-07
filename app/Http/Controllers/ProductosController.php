<?php

namespace Controllers;

use Classes\Producto;
use Http\Response;

class ProductosController
{
  public $targer_dir = '/uploads/img/products/';
  public function index()
  {
    return view('productos');
  }

  public function agregar()
  {
    if (isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['precio']) && isset($_FILES['cover'])) {
      $nombre = (string) $_POST['nombre'];
      $descripcion = (string) $_POST['descripcion'];
      $precio = (float) $_POST['precio'];
      $cover = $_FILES['cover'];
      if ( isImage($cover) ) {
        $target_file = __DIR__ . '\\..\\..\\..\\public\\uploads\\img\\products\\' . basename($_FILES["cover"]["name"]);
        if (move_uploaded_file($_FILES["cover"]["tmp_name"], $target_file)) {
          $portada = basename($_FILES["cover"]["name"]);
          $producto = new Producto($nombre, $descripcion, $precio, $portada);
          open_db_connection();
          $producto->registerProducto();
          close_db_connection();
          header('Location:../productos');
        }
      }
    }
    return view('agregar_producto');
  }

  public function editar()
  {
    if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['precio']) && isset($_FILES['cover'])) {
      $id = (int) $_POST['id'];
      $nombre = (string) $_POST['nombre'];
      $descripcion = (string) $_POST['descripcion'];
      $precio = (float) $_POST['precio'];
      $cover = $_FILES['cover'];
      if ( isImage($cover) ) {
        $target_file = __DIR__ . '\\..\\..\\..\\public\\uploads\\img\\products\\' . basename($_FILES["cover"]["name"]);
        if (move_uploaded_file($_FILES["cover"]["tmp_name"], $target_file)) {
          $portada = basename($_FILES["cover"]["name"]);
          $producto = new Producto($nombre, $descripcion, $precio, $portada, $id);
          open_db_connection();
          $producto->updateProducto();
          close_db_connection();
          header('Location:../productos');
        }
      }
    }
    return view('editar_producto');
  }

  public function eliminar()
  {
    if (isset($_GET['id'])) {
      $id = (int) $_GET['id'];
      open_db_connection();
      $producto = Producto::getProductoById($id);
      $producto->deleteProducto();
      open_db_connection();
    }
    header('Location:../');
  }
}