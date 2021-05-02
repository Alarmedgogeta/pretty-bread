<?php

namespace Http;

class Response
{
  protected $view;

  public function __construct($view)
  {
    $this->view = $view;
  }

  public function getView()
  {
    return $this->view;
  }

  public function send()
  {
    $view = $this->getView();
    $content = file_get_contents(viewPath($view));
    require viewPath('layout');
  }
}