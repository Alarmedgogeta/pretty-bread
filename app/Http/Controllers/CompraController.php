<?php

namespace Controllers;

class CompraController
{
  public function index()
  {
    return view('inicio');
  }
  public function metodo_de_pago()
  {
    return view('metodo_de_pago');
  }
}