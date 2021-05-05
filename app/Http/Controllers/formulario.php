<?php

namespace Controllers;

use Http\Response;

class formulario
{
  public function formulario()
  {
    return new Response('categorias');
  }
}