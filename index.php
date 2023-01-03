<?php 
  require_once($_SERVER['DOCUMENT_ROOT'] .'/GESTIONALE_MODERNO/require/require.php'); 
  require_once($_SERVER['DOCUMENT_ROOT'] .'/GESTIONALE_MODERNO/controller/homeController.php');
  require_once($_SERVER['DOCUMENT_ROOT'] .'/GESTIONALE_MODERNO/controller/update.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css?ts=<?=time()?>&quot">
</head>
<body>
  <header>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/GESTIONALE_MODERNO/view/templates/navbar.php') ?>
  </header>
  <main>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/GESTIONALE_MODERNO/view/home.php') ?>
  </main>
  <footer>

  </footer>


  <script src="js/script.js"></script>
</body>
</html>