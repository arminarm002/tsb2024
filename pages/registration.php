<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/theme/css/self.css">
</head>

<body>
  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/components/navbar.php');
  ?>
  <a href="https://www.messenger.com/t/279532238569467/?messaging_source=source%3Apages%3Amessage_shortlink&source_id=1441792&recurring_notification=0"
    target="_blank">
    <img src="/../img/messenger.png" class="img-fluid messenger">
  </a>
  <div class="container">
    <h1 class="centerer mt-3">Registration Fee</h1>
    <h4 class="centerer mt-3"><b>Register Form </b>&nbsp;>>>&nbsp;
      <a href="/auth/register.php" class="btn btn-warning">Click</a>
    </h4>
    <h4 class="centerer mt-3"><b>Register Guide </b>&nbsp;>>>&nbsp;
      <a href="https://drive.google.com/file/d/19BLzzgYqxOZwh3dnLHN2EOFwDnxEJZz6/view?usp=sharing" class="btn btn-warning" target="_blank">Click</a>
    </h4>
    <h5 class="centerer">Members of AFOB-MC, BEST, BSN, SBJ can register at the TSB member rate. Please contact TSB
      Office at tsb@biotec.or.th</h5>
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6 mt-3">
        <p>
          <a href="/img/payment3.jpg" target="_blank" style="text-align: center;">
            <img src="/img/payment3.jpg" class="payment-image">
          </a>
          - TSB Member Application : <a href="https://www.biotec.or.th/tsb/index.php" target="_blank">
            <button class="btn btn-l text-white">Click Here</button></a>
        </p>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 mt-3">
        <p>
          <a href="/img/payment4.jpg" target="_blank" style="text-align: center;">
            <img src="/img/payment4.jpg" class="payment-image">
          </a>
          - AFOB Application : <a href="https://www.afob.org/join/signup_indivisual.html" target="_blank">
            <button class="btn btn-l text-white">Click Here</button></a>
        </p>
      </div>
    </div>
    <h4 class="red">&nbsp;&nbsp;&nbsp;&nbsp;*สามารถรับใบเสร็จงาน TSB2024 ได้ในวันที่ 14 ถึง 16 พฤศจิกายน 2567<br>&nbsp;&nbsp;&nbsp;&nbsp;*The TSB2024 receipt can be obtained from November 14 to 16, 2024</h4>

    <h1 class="centerer mt-3">Payment</h1>
    <div class="centerer mt-3">
      <a href="/img/payment.jpg" target="_blank" style="text-align: center;">
        <img class="w-75" src="/img/payment.jpg" style="box-shadow: rgba(0, 0, 0, 0.50) 2px 5px 15px;">
      </a>
    </div>
  </div>
  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');
  ?>
</body>

</html>