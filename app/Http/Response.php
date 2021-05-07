<?php

namespace Http;

class Response
{
  protected $view;
  protected $page;

  public function __construct($view)
  {
    $this->view = $view;
  }

  public function getView()
  {
    return $this->view;
  }

  public function setPage($page)
  {
    $this->page = $page;
  }

  public function getPage()
  {
    return $this->page;
  }


  public function send()
  {
    $view = $this->getView();
    $page = $this->getPage();
    $content = file_get_contents(viewPath($view));
    require viewPath('layout');
  }
}