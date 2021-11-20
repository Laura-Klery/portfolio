<?php

class ProjectsController {

  public function index() {
    $title = "Projets";
    // $metadesc = "Bienvenue sur Mon Super MVC, blablabla";
    $page = 'projects/index.php';
    $pageRewrite = 'projects/';
    require('views/layout.php');
  }
}
?>