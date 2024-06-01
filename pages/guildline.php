<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/db/connectdb.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Submission Guidelines</title>
  <link rel="stylesheet" href="/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/theme/css/self.css">
</head>

<body>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/components/navbar.php');
  ?>
  <div class="container">
    <h1 class="card-title centerer mt-3">Presentation Guidelines & Award </h1>
    <img src="/img/soon.png" style="width: 100%; height: auto;">
  </div>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');
  
  ?>
</body>

</html>