<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/connectdb.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TSB2024 KMITL</title>
  <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/tsb2024/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/tsb2024/theme/css/self.css">
</head>

<body class="font-concert">
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/navbar.php');
  ?>

  <div class="container">
    <h1 class="card-title centerer mt-3">Abstract Submission</h1>
    <div class="row" style="margin: 15px auto;">
      <div class="col-12">
        <div class="card border-0" style="color: #494949;">
          <img src="/tsb2024/img/soon.png" style="width: 100%; height: auto;">
        </div>
        <hr>

        <h1 class="card-title centerer">Journals & Publications</h1>
        <img src="/tsb2024/img/soon.png" style="width: 100%; height: auto;">
      </div>
    </div>
  </div>

  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/script/script.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/script/messenger.php');
  ?>
</body>

</html>