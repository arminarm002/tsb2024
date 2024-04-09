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
  <meta name="author" content="Suradech Kuruphan">
  <meta name="description"
    content="19 th of Siam Physics Congress 2024 (tsb2024), Krungsri River Hotel, Phra Nakorn Sri Ayutthaya, Thailand, JUNE 5-7, 2024.">
  <meta name="keywords"
    content="tsb2024, tsb2024,19 th of Siam Physics Congress, ครั้งที่ 19, ประกวดโครงงานอิสระ, สมาคมฟิสิกส์">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/tsb2024/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/tsb2024/theme/css/self.css">
</head>

<body class="font-concert">
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/navbar.php');
  ?>
  <img src="/tsb2024/img/tsb-home.jpg" class="img-fluid" style="width:100%">
  <div class="container">
    <h4 class="card-text fss-14 mt-3" style="text-align:justify;">Paragraph 1</h6>
      <section class="countdown-container centerer mt-3 mb-3">

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
      <div class="row">
        <div class="col-lg-4 col-md-4 col-6 mt-3">
          <a href="" target="_blank">
            <img src="/tsb2024/img/news/first.jpg" class="d-block w-100"
              style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
          </a>
        </div>
        <!-- <div class="col-lg-4 col-md-4 col-6 mt-3">
          <a href="" target="_blank">
            <img src="/tsb2024/img/news/project1.jpg" class="d-block w-100"
              style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-6 mt-3">
          <a href="" target="_blank">
            <img src="/tsb2024/img/news/project2.jpg" class="d-block w-100"
              style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
          </a>
        </div> -->

        <div class="cards mb-3 mt-5" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;padding-bottom: 15px;">
          <h1 class="card-title centerer" style="color: #7b7b7b;padding-top: 15px;">Announcement</h1>
          <iv class="row" style="margin: 15px auto;">
            <div class="col-sm-6 col-md-6 col-lg-4 col-12 centerer mt-3">
              <div class="card border border-warning rounded" style="width: 28rem;"><!-- 18rem -->
                <img class="border-bottom border-warning" src="/tsb2024/img/news/834019.jpg" style="width:100%; ">
                <div class="card-body">
                  <h5 class="card-title"> 15 February 2024</h5>
                  <p class="card-text" style="text-align:justify;">
                  </p>
                  <a href="" class="btn btn-warning" target="_blank">
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
  include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/script/script.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/script/countdown.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/script/messenger.php');
  ?>

</body>

</html>