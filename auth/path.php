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
  <link rel="stylesheet" href="/tsb2024/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/tsb2024/theme/css/self.css">
</head>

<body>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/navbar.php');
  ?>
  <div class="container mt-3">
    <div class="row" style="margin: 10% 0%;">
      <div class="col-6 centerer">
        <div class="card border rounded" style="width: 28rem;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"><!-- 18rem -->
          <img class="" src="/tsb2024/img/participant.png" style="width:100%; ">
          <a href="register.php">
            <button type="button" class="btn btn-outline-primary" style="width: 100%;">
              <p style="font-size:3.5vw;">General audience</p>
            </button>
          </a>
        </div>
      </div>
      <div class="col-6 centerer">
        <div class="card border rounded" style="width: 28rem;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"><!-- 18rem -->
          <img class="" src="/tsb2024/img/presenter.png" style="width:100%; ">
          <a href="" target="_blank">
            <button type="button" class="btn btn-outline-info" style="width: 100%;">
              <p style="font-size:3.5vw;">For Oral and Poster presentation</p>
            </button>
          </a>
        </div>
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