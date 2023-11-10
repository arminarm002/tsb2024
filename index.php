<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/connectdb.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SPC2024 KMITL</title>
  <link rel="stylesheet" href="/spc2024/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/spc2024/theme/css/self.css">
</head>

<body class="font-mitr">
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/navbar.php');
  ?>
  <img src="/spc2024/img/home01.jpg" class="img-fluid" style="width:100%">
  <div class="container">
    <section class="countdown-container centerer mt-3">

      <div class="countdown">
        <span class="days" id="days"></span>
        <div class="days-label">days</div>
      </div>

      <div class="countdown">
        <span class="hours" id="hours"></span>
        <div class="hours-label">hours</div>
      </div>

      <div class="countdown">
        <span class="minutes" id="minutes"></span>
        <div class="minutes-label">minutes</div>
      </div>

      <div class="countdown">
        <span class="seconds" id="seconds"></span>
        <div class="seconds-label">seconds</div>
      </div>

    </section>
    <div class="cards mb-3 mt-5" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;padding-bottom: 15px;">
      <h1 class="card-title centerer" style="color: #7b7b7b;padding-top: 15px;">Announcement</h1>
      <div class="image">
        <div class="row" style="margin: 15px auto;">
          <div class="col-6 centerer">
            <div class="card border border-warning rounded" style="width: 28rem;"><!-- 18rem -->
              <img class="border-bottom border-warning" src="/spc2024/img/news/nobel.jpg" style="width:100%; ">
              <div class="card-body">
                <h5 class="card-title">✨New✨ 3 October 2024</h5>
                <p class="card-text">3 scientists awarded 2023 Nobel Prize in Physics for use of light to study
                  electrons</p>
                <a href="https://news.cgtn.com/news/2023-10-03/3-scientists-awarded-2023-Nobel-Prize-in-Physics-1nBg0xV00aA/index.html"
                  class="btn btn-warning" target="_blank">
                  <h6 class="card-title">-- More --</h6>
                </a>
              </div>
            </div>
          </div>
          <div class="col-6 centerer">
            <div class="card border border-warning rounded" style="width: 28rem;"><!-- 18rem -->
              <img class="border-bottom border-warning" src="/spc2024/img/news/flag.jpg" style="width:100%; ">
              <div class="card-body">
                <h5 class="card-title">17 June 2023</h5>
                <p class="card-text">ภาควิชาฟิสิกส์ คณะวิทยาศาสตร์และวิทยาลัยเทคโนโลยีและนวัตกรรมวัสดุ รับมอบธงร่วมเป็นเจ้าภาพจัดงานประชุมวิชาการ Siam Physics Congress ครั้งที่ 19 ซึ่งจะจัดขึ้นระหว่างวันที่ 5-7 มิถุนายน ปี 2567</p>
                <a href="https://www.facebook.com/profile/100063613568041/search/?q=%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%A1%E0%B8%AD%E0%B8%9A%E0%B8%98%E0%B8%87"
                  class="btn btn-warning" target="_blank">
                  <h6 class="card-title">-- More --</h6>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/script.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/countdown.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/messenger.php');
  ?>

</body>

</html>