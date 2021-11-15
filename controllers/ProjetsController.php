<?php

class ProjetsController {

  public function index() {
    $title = "Projets";
    // $metadesc = "Bienvenue sur Mon Super MVC, blablabla";
    $page = 'projets/index.php';
    require('views/layout.php');
  }
}
?>