<?php

namespace Controllers;

use Http\Response;

class carrito
{
  public function carrito()
  {
    return new Response('categorias');
  }
}