<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title; ?> - Laura Klerykowski</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pinyon+Script&display=swap" rel="stylesheet">
  <base href="http://localhost/portfolio/">
  <link rel="stylesheet" href="public/css/variables.css">
  <link rel="stylesheet" href="public/css/style.css">
  <link rel="icon" href="public/images/logo.ico" type="image/x-icon">
</head>
<body id="top">
  <?php include('views/templates/_header.php'); ?>
  <main class="conteneur">
    <div class="menu-fond"></div>
    <?php require('views/templates/' . $page); ?>
  </main>
  <?php include('views/templates/_footer.php'); ?>
  <script src="public/js/script.js"></script>
</body>
</html>