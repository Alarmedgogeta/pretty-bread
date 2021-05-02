<?php

namespace Controllers;

use Http\Response;

class UsuarioController
{
  public function index()
  {
    return new Response('perfil');
  }

  public function direcciones()
  {
    return new Response('direcciones');
  }

  public function editar()
  {
    return new Response('editar-usuario');
  }
}