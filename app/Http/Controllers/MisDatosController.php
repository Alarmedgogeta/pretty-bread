<?php

namespace Controllers;

use Http\Response;

class TiendaController
{
    public function index()
    {
        return new Response('Mis_Datos');
    }
}