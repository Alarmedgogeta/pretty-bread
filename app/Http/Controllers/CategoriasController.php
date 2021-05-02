<?php

namespace Controllers;

use Http\Response;

class CategoriasController
{
  public function index()
  {
    return new Response('categorias');
  }
}