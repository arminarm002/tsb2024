<?php
session_start();
include ($_SERVER['DOCUMENT_ROOT'] . '/db/connectdb.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Department of Biology-KMITL</title>
  <link rel="stylesheet" href="/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/theme/css/self.css">
</head>

<body>
  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/components/navbar.php');
  ?>
  <img src="/../img/messenger.png" class="img-fluid messenger">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6 mt-3">
        <img src="/img/news/01.jpg" class="payment-image">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 mt-3">
        <img src="/img/news/02.jpg" class="payment-image">
      </div>
    </div>
    <?php
    $query = $conn->query("SELECT * FROM tb_announcement WHERE id='7'");
    foreach ($query as $row) {
      ?>
      <div class="mt-3">
        <p class="card-text" style="text-align:justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row['an_moredetail']; ?>
        </p>
        <br>
        <p class="card-text" style="text-align:justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row['an_moredetail2']; ?>
        </p>
      </div>
    </div>
    <?php
    } ?>
  </div>

  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');
  ?>

</body>

</html>