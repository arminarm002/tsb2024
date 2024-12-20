<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/db/connectdb.php');
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

<body style="background-color: #01ff412e;">
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/components/navbar.php');
  ?>
  <a href="https://www.messenger.com/t/279532238569467/?messaging_source=source%3Apages%3Amessage_shortlink&source_id=1441792&recurring_notification=0" target="_blank">
    <img src="/../img/messenger.png" class="img-fluid messenger">
  </a>
  <div class="container mt-3">
    <div class="row" style="margin: 10% 0%;">
      <div class="col-6 centerer" style="display: block;">
        <div class="card border rounded" style="width: 28rem;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"><!-- 18rem -->
          <img class="" src="/img/participant.png" style="width:100%; ">
          <a href="register.php">
            <button type="button" class="btn btn-outline-primary" style="width: 100%;">
              <p style="font-size:3.5vw;">General audience</p>
            </button>
          </a>
        </div>
      </div>
      <div class="col-6 centerer">
        <div class="card border rounded" style="width: 28rem;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"><!-- 18rem -->
          <img class="" src="/img/presenter.png" style="width:100%; ">
          <a href="https://cmt3.research.microsoft.com/User/Login?ReturnUrl=%2FTSB2024" target="_blank">
            <button type="button" class="btn btn-outline-info" style="width: 100%;">
              <p style="font-size:3.5vw;">For Oral and Poster presentation</p>
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');
  
  ?>

</body>

</html>