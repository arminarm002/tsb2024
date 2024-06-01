<?php
session_start();
include ($_SERVER['DOCUMENT_ROOT'] . '/db/connectdb.php');
if ($_SESSION['type'] == "Oral Presenter" || $_SESSION['type'] == "Poster Presenter") {
  if ($_SESSION['abstract_number'] == "") {
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

    <body class="font-mitr">
      <?php
      include ($_SERVER['DOCUMENT_ROOT'] . '/components/navbar.php');
      ?>
      <div class="container">
        <div class="card mt-5" style="background-color: rgb(255 122 1 / 20%);box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
          <div class="cardbody" style="padding:2% 5%;">
            <h1 style="text-align:center;">Please Fill Your Abstract Number</h1>
            <form action="authen.php" method="POST">
              <div class="form-outline mb-2">
                <input type="number" class="form-control" name="abnumber" required />
              </div>
              <button type="submit" class="btn btn-l btn-block text-white mb-2" name="abstractnumber">Submit</button>
            </form>
          </div>
        </div>
      </div><!-- container -->

      <?php
      include ($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
      include ($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');
      ?>

    </body>

    </html>

    <?php


  } else {
    header("refresh: 1; url=/auth/profile.php");
  }
} else {
  header("refresh: 1; url=/auth/profile.php");
} ?>