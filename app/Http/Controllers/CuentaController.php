<?php

namespace Controllers;

class CuentaController
{
  public function index()
  {
    return view('mis_datos');
  }

  public function login()
  {
    return view('login');
  }

  public function registrarme()
  {
    return view('registro');
  }

  public function datos()
  {
    return view('mis_datos');
  }

  public function editar()
  {
    return view('editar_datos');
  }

  public function direcciones()
  {
    return view('mis_direcciones');
  }

  public function agregar_direccion()
  {
    return view('agregar_direccion');
  }

  public function editar_direccion()
  {
    return view('editar_direccion');
  }

  public function compras()
  {
    return view('mis_compras');
  }

  public function carrito()
  {
    return view('carrito');
  }
}