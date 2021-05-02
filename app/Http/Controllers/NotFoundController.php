<?php

namespace Controllers;

use Http\Response;

class NotFoundController
{
  public function index()
  {
    return new Response('not_found');
  }
}