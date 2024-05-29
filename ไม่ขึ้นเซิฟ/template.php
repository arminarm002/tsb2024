<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/connectdb.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TSB2024 KMITL</title>
  <link rel="stylesheet" href="/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/theme/css/self.css">
</head>

<body>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/components/navbar.php');
  ?>
   


  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');
  
  ?>
  
</body>

</html>