<?php

namespace Http;

use Controllers\NotFoundController;
use Exception;

class Request
{
  protected $segments = [];
  protected $controller;
  protected $method;

  public function __construct()
  {
    $this->setSegments();
    $this->setController();
    $this->setMethod();
  }

  public function setSegments()
  {
    $this->segments = explode('/', $_SERVER['REQUEST_URI']);
  }

  public function setController()
  {
    $this->controller = empty($this->segments[1])
      ? 'inicio'
      : $this->segments[1];
  }

  public function setMethod()
  {
    $this->method = empty($this->segments[2])
      ? 'index'
      : $this->segments[2];
  }

  public function getController()
  {
    $controller = ucfirst($this->controller);
    return "Controllers\\{$controller}Controller";
  }

  public function getMethod()
  {
    return $this->method;
  }

  public function send()
  {
    $controller = $this->getController();
    $method = $this->getMethod();

    try {
      $response = call_user_func([
        new $controller,
        $method
      ]);
    } catch (\Throwable $th) {
      $response = call_user_func([
        new NotFoundController,
        'index'
      ]);
    }

    try {
      if ( $response instanceof Response ) {
        $response->send();
      } else {
        throw new Exception("Error Processing Request", 1);
      }
    } catch (\Exception $error) {
      $response = call_user_func([
        new NotFoundController,
        'index'
      ]);
      $response->send();
    }
  }
}