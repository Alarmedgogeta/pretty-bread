<?php

namespace Controllers;

use Http\Response;

class TiendaController
{
    public function index()
    {
        return new Response('Tienda');
    }
}