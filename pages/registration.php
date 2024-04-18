<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TSB2024 KMITL</title>
  <link rel="stylesheet" href="/tsb2024/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/tsb2024/theme/css/self.css">
</head>

<body class="font-mitr">
  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/navbar.php');
  ?>
  <div class="container">
    <h1 class="centerer mt-3">Registration Fee (THB)</h1>
    <h4 class="centerer mt-3"><b>Register Form </b>&nbsp;>>>&nbsp; 
      <a href="/tsb2024/auth/register.php" class="btn btn-warning">Click</a>
    </h4>
    <div class="centerer mt-3">
      <a href="/tsb2024/img/payment2.jpg" target="_blank" style="text-align: center;">
        <img src="/tsb2024/img/payment2.jpg"
          style="box-shadow: rgba(0, 0, 0, 0.50) 2px 5px 15px;">
      </a>
    </div>

    <!-- <h1 class="centerer mt-3">Payment</h1>
    <div class="centerer mt-3">
      <a href="/tsb2024/img/payment.jpg" target="_blank" style="text-align: center;">
        <img class="w-75" src="/tsb2024/img/payment.jpg" style="box-shadow: rgba(0, 0, 0, 0.50) 2px 5px 15px;">
      </a>
    </div> -->
  </div>
  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/footer.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/script/script.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/script/messenger.php');
  ?>
</body>

</html>