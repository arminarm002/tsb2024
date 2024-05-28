<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/connectdb.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personnel Talks & Speakers</title>
  <link rel="stylesheet" href="/tsb2024/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/tsb2024/theme/css/self.css">
</head>

<body>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/navbar.php');
  ?>

  <div class="container">
    <h1 class="card-title centerer mt-3">Plenary Talks & Speakers</h1>
    <h4 class="card-title centerer mt-3" style="padding-bottom: 25px;">****************</h4>
    <h2 style="text-align: center;">Plenary Talks</h2>
    <img src="/tsb2024/img/soon.png" style="display:block; margin:auto; width:50%;">
    <hr>
    <h2 style="text-align: center;">Keynote Lectures</h2>
    <img src="/tsb2024/img/soon.png" style="display:block; margin:auto; width:50%;">
    <hr>
    <h2 style="text-align: center;">Invited Speakers</h2>
    <img src="/tsb2024/img/soon.png" style="display:block; margin:auto; width:50%;">
  </div>

  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/script/script.php');
  
  ?>
</body>

</html>