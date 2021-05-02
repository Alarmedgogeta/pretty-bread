<?php

namespace Controllers;

use Http\Response;

class InicioController
{
  public function index()
  {
    return new Response('inicio');
  }
}