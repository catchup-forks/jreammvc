<?php

class View
{

  function __construct() {
    $this->render('header');
  }

  public function render($name, $noInclude = false) {
    require_once APP_PATH . '/views/' . $name . '.php';
  }

  function __destruct() {
    $this->render('footer');
  }


}