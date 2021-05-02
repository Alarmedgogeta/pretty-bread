<?php

namespace Controllers;

use Http\Response;

class ProductosController
{
  public function index()
  {
    return new Response('productos');
  }
}