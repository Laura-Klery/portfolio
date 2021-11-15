<?php
class HomeController {

  public function index() {
    $title = "Accueil";
    // $metadesc = "Bienvenue sur Mon Super MVC, blablabla";
    $page = 'home/index.php';
    require('views/layout.php');
  }
}
?>