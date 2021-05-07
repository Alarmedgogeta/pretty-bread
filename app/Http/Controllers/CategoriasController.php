<?php

namespace Controllers;

use Classes\Categoria;
use Http\Response;

class CategoriasController
{
  public function index()
  {
    return view('categorias');
  }
  public function agregar()
  {
    if (isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_FILES['cover'])) {
      $nombre = (string) $_POST['nombre'];
      $descripcion = (string) $_POST['descripcion'];
      $cover = $_FILES['cover'];
      if ( isImage($cover) ) {
        $target_file = __DIR__ . '\\..\\..\\..\\public\\uploads\\img\\categories\\' . basename($_FILES["cover"]["name"]);
        if (move_uploaded_file($_FILES["cover"]["tmp_name"], $target_file)) {
          $portada = basename($_FILES["cover"]["name"]);
          $categoria = new Categoria($nombre, $descripcion, $portada);
          open_db_connection();
          $categoria->registerCategoria();
          close_db_connection();
          header('Location:../categorias');
        }
      }
    }
    return view('agregar_categoria');
  }
  public function editar()
  {
    if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_FILES['cover'])) {
      $id = (int) $_POST['id'];
      $nombre = (string) $_POST['nombre'];
      $descripcion = (string) $_POST['descripcion'];
      $cover = $_FILES['cover'];
      if ( isImage($cover) ) {
        $target_file = __DIR__ . '\\..\\..\\..\\public\\uploads\\img\\categories\\' . basename($_FILES["cover"]["name"]);
        if (move_uploaded_file($_FILES["cover"]["tmp_name"], $target_file)) {
          $portada = basename($_FILES["cover"]["name"]);
          $categoria = new Categoria($nombre, $descripcion, $portada, $id);
          open_db_connection();
          $categoria->updateCategoria();
          close_db_connection();
          header('Location:../categorias');
        }
      }
    }
    return view('editar_categoria');
  }
  public function eliminar()
  {
    return view('categorias');
  }
}