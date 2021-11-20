<?php
class CguController {

  public function index() {
    $title = "Mentions Légales";
    // $metadesc = "Bienvenue sur Mon Super MVC, blablabla";
    $page = 'cgu/index.php';
    $pageRewrite = 'cgu/';
    require('views/layout.php');
  }
}
?>