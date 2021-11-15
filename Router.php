<?php

class Router {

  private $controller = 'HomeController';
  private $method = 'index';
  private $args = [];

  public function __construct() {

    $url = $this->parseUrl();
    
    // Je récupère le contrôleur
    if (isset($url[0])) {
      $url[0] = ucfirst($url[0]);
      if (file_exists('controllers/' . $url[0] . 'Controller.php')) {
        $this->controller = $url[0] . 'Controller';
        unset($url[0]);
      }
    }
    require('controllers/' . $this->controller . '.php');

    // Je récupère la méthode
    if (isset($url[1])) {
      if (method_exists($this->controller, $url[1])) {
        $this->method = $url[1];
        unset($url[1]);
      }
    }

    // Je récupère les arguments
    if (!empty($url)) {
      $this->args = array_values($url);
    }

    call_user_func_array([new $this->controller, $this->method], $this->args);

  }

  private function parseUrl() {
    if (isset($_GET['url'])) {
      return explode('/', $_GET['url']);
    }
  }

}
?>