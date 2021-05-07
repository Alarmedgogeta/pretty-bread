<?php

namespace Controllers;

use Http\Response;

class ProductosController
{
  public function index()
  {
    return view('productos');
  }

  public function agregar()
  {
    return view('agregar_producto');
  }

  public function editar()
  {
    return view('editar_producto');
  }

  public function eliminar()
  {
    return view('productos');
  }
}