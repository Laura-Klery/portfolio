<?php
class AboutController {

  public function index() {
    $title = "A propos";
    // $metadesc = "Bienvenue sur Mon Super MVC, blablabla";
    $page = 'about/index.php';
    $pageRewrite = 'about/';
    require('views/layout.php');
  }
}
?>