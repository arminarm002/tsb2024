<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/connectdb.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SPC2024 KMITL</title>
  <link rel="stylesheet" href="/spc2024/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/spc2024/theme/css/self.css">
</head>

<body class="font-concert">
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/navbar.php');
  ?>
  
  


  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/script.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/messenger.php');
  ?>
  
</body>

</html>