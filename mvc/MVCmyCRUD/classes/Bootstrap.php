<?php
/**
 *
 */
class Bootstrap
{
  private $controller;
  private $action;
  private $request;

  function __construct()
  {
    $this->request = explode('/', mb_substr($_SERVER["REQUEST_URI"], 1));

    if($this->request[0] == '') {
      $this->controller = 'home';
    }
    else {
      $this->controller = $this->request[0];
    }

    if(!isset($this->request[1]) || $this->request[1] == '') {
      $this->action = 'index';
    } else {
      $this->action = $this->request[1];
    }

  }

  public function createController() {

    if(class_exists($this->controller) ) {
      $parents = class_parents($this->controller);
      if( in_array("Controller", $parents) ) {

        if( method_exists($this->controller, $this->action ) ) {
          return new $this->controller($this->action, $this->request);
        }
        else {
          echo " <h1>Method does not exist </h1> ";
          return;
        }

      } else {
        echo "<h1>Base controller not found</h1>";
        return;
      }

    } else {
      echo "<h1>Controller class does not found</h1>";
      return;
    }

  }
}
