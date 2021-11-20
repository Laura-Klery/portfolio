<?php
class ContactController {

  public function index() {
    $title = "Contact";
    // $metadesc = "Bienvenue sur Mon Super MVC, blablabla";
    $page = 'contact/index.php';
    $pageRewrite = 'contact/';
    require('views/layout.php');
  }
}
?>