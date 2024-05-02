<?php
session_start();
include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/connectdb.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TSB2024 KMITL</title>
  <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wdth,wght@80,100..900&family=Open+Sans:ital,wdth,wght@0,75,300..800;1,75,300..800&display=swap"
        rel="stylesheet">
  <link rel="stylesheet" href="/tsb2024/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/tsb2024/theme/css/self.css">
</head>

<body class="noto-sans-thai">
  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/navbar.php');
  ?>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6 mt-3">
        <img src="/tsb2024/img/news/01.jpg" class="payment-image">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 mt-3">
        <img src="/tsb2024/img/news/02.jpg" class="payment-image">
      </div>
    </div>
    <?php
    $query = $conn->query("SELECT * FROM tb_announcement WHERE id='3'");
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
  include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/footer.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/script/script.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/script/messenger.php');
  ?>

</body>

</html>