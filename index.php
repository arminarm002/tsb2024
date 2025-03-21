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
  <meta name="author" content="Suradech Kuruphan">
  <meta name="description"
    content="36 th of Thai Society for Biotechnology 2024 (tsb2024), Krungsri River Hotel, Phra Nakorn Sri Ayutthaya, Thailand, November 14-16, 2024.">
  <meta name="keywords"
    content="tsb2024, 36 th of Thai Society for Biotechnology, ครั้งที่ 36, ประกวดโครงงานอิสระ, สมาคมชีววิทยา">
  <link rel="stylesheet" href="/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/theme/css/self.css">
  <link rel="stylesheet" href="/theme/css/timeline.css">
  <style>
    /* แอนิเมชันของการกระพริบ */
    @keyframes blink-animation {
      0% {
        opacity: 1.0;
      }

      50% {
        opacity: 0.0;
      }

      100% {
        opacity: 1.0;
      }
    }
  </style>
</head>

<body>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/components/navbar.php');
  ?>

  <a href="https://forms.gle/ewGzwCXbRcpvi4ZR8" id="alert" target="_blank">
    <img src="/../img/paymentslip.png" class="img-fluid paymentslip">
  </a>
  <a href="https://www.messenger.com/t/279532238569467/?messaging_source=source%3Apages%3Amessage_shortlink&source_id=1441792&recurring_notification=0"
    target="_blank">
    <img src="/../img/messenger.png" class="img-fluid messenger">
  </a>
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/tsb-cover.jpg" class="img-fluid" style="width:100%">
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container">
    <h4 class="card-text fss-14 mt-3" style="text-align:center;">Nature's Blueprint : A Journey toward Sustainable
      Development through the BCG Economy Model</h4>
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
    <div class="videohome">
      <video class="border border-warning rounded" width="100%" height="auto" muted controls loop autoplay
        src="/img/tsb2024open.mp4"></video>
    </div>

    <div class="container mb-3 mt-5" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;padding-bottom: 15px;">
      <h2 class="card-text mt-3" style="text-align:center;color: #346f00;padding-top:25px;"><b>Proceeding Book</b></h2>
      <div class="row centerer">
        <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
          <div class="card" style="border: none;">
            <a href="https://drive.google.com/file/d/1WCZJdCFmauZc5rTiCZ13AMJw2imFQiyb/view?usp=sharing" target="_blank">
              <img src="/img/book of abstracts.jpg" class="d-block w-100"
                style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
            </a>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
          <div class="card" style="border: none;">
            <a href="https://drive.google.com/file/d/1cmDkLesYiTa8tNcoY4VqAQlFLc-VLH9E/view?usp=sharing" target="_blank">
              <img src="/img/book of proceeding.jpg" class="d-block w-100"
                style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="row centerer">
      <?php
      $query = $conn->query("SELECT * FROM tb_poster");
      foreach ($query as $row) { ?>
        <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
          <div class="card" style="border: none;">
            <a href="/file/upload/poster/<?php echo $row['pt_image']; ?>" target="_blank">
              <img src="/file/upload/poster/<?php echo $row['pt_image']; ?>" class="d-block w-100"
                style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
            </a>
            <?php if (isset($_SESSION['role'])) {
              if ($_SESSION['role'] == "superadmin") { ?>

                <form action="auth/backend/poster-update.php" method="POST">
                  <input type="text" name="id" class="form-control" style="display:none;" value="<?php echo $row['id']; ?>">

                  <button class="btn btn-update" type="submit" name="update">
                    <box-icon type='solid' name='pencil'></box-icon>
                  </button>
                </form>

                <form action="auth/backend/data/alldelete.php" method="POST">
                  <input type="text" name="filename" class="form-control" style="display:none;"
                    value="<?php echo $row['pt_image']; ?>">
                  <input type="text" name="id" class="form-control" style="display:none;" value="<?php echo $row['id']; ?>">

                  <button class="btn btn-delete" type="submit" name="deleteposter"
                    onclick="return confirm('ยืนยันที่จะลบ ?')">
                    <box-icon type='solid' name='trash'></box-icon>
                  </button>
                </form>

              <?php }
            } ?>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="cards mb-3 mt-5" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;padding-bottom: 15px;">
      <h1 class="card-title centerer" style="color: #7b7b7b;padding-top: 15px;">Announcement</h1>
      <div class="row" style="margin: 15px auto;">

        <?php $i = 1;
        $query = $conn->query("SELECT * FROM tb_announcement ORDER BY id DESC");
        foreach ($query as $row) {
          if ($i <= 6) {
            ?>
            <div class="col-sm-6 col-md-6 col-lg-4 col-12 centerer mt-3">
              <div class="card border border-warning rounded">
                <img class="border-bottom border-warning" src="/file/upload/news/<?php echo $row['an_image']; ?>"
                  style="width:100%; ">
                <?php if (isset($_SESSION['role'])) {
                  if ($_SESSION['role'] == "superadmin") { ?>

                    <form action="auth/backend/news-update.php" method="POST">
                      <input type="text" name="id" class="form-control" style="display:none;" value="<?php echo $row['id']; ?>">

                      <button class="btn btn-update" type="submit" name="update">
                        <box-icon type='solid' name='pencil'></box-icon>
                      </button>
                    </form>

                    <form action="auth/backend/data/alldelete.php" method="POST">
                      <input type="text" name="filename" class="form-control" style="display:none;"
                        value="<?php echo $row['an_image']; ?>">
                      <input type="text" name="id" class="form-control" style="display:none;" value="<?php echo $row['id']; ?>">

                      <button class="btn btn-delete" type="submit" name="delete" onclick="return confirm('ยืนยันที่จะลบ ?')">
                        <box-icon type='solid' name='trash'></box-icon>
                      </button>
                    </form>

                  <?php }
                } ?>
                <div class="card-body">
                  <h5 class="card-title">
                    <?php if ($i <= 3) { ?>
                      <b id="blinkingText<?php echo $i; ?>" style="color:red;animation: blink-animation 1s infinite;">New
                      </b>
                    <?php }
                    echo $row['an_date']; ?>
                  </h5>
                  <p class="card-text" style="text-align:justify;"><?php echo $row['an_detail']; ?>
                  </p>
                  <a href="<?php echo $row['an_link']; ?>" class="btn btn-warning" target="_blank">
                    <h6 class="card-title">-- More --</h6>
                  </a>
                </div>
              </div>
            </div>
            <?php
          }
          $i++;
        }
        ?>

      </div>
      <div style="text-align: center;">
        <a href="/pages/news.php" class="btn btn-warning" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
          <h4 class="card-title">-- All Announcement --</h4>
        </a>
      </div>
    </div>
  </div>
  <!-- Timeline -->
  <h2 style="text-align: center;">Important Date</h2>
  <div class="flex-parent mt-5">
    <div class="input-flex-container">
      <div class="input fs">
        <span data-year="May 15, 2024" data-info="Registration & Submissions opens"></span>
      </div>
      <div class="input fs">
        <span data-year="August 16, 2024" data-info="Abstract submission deadline"></span>
      </div>
      <div class="input fs">
        <span data-year="August 1-15, 2024" data-info="Notification of Abstract acceptance"></span>
      </div>
      <div class="input fs">
        <span data-year="August 30, 2024" data-info="Full paper submission deadline"></span>
      </div>
      <div class="input fs">
        <span data-year="October 1-16, 2024" data-info="Notification of Full paper acceptance"></span>
      </div>
      <div class="input fs">
        <span data-year="August 30, 2024" data-info="Early bird registration deadline"></span>
      </div>
      <div class="input fs">
        <span data-year="November 1, 2024" data-info="Late registration deadline"></span>
      </div>
      <div class="input fs active">
        <span data-year="November 14-16, 2024" data-info="TSB2024 Conference"></span>
      </div>
    </div>
  </div>

  <!-- Google tag (gtag.js) -->

  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-CR16YY4QKZ');
  </script>
  <script>
    document.getElementById("alert").addEventListener("click", function () {
      alert("Please Log in to find your 'KEY'\nPlease note that the key is essential for the payment confirmation step. We kindly ask that you don’t overlook it.");
    });
  </script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-CR16YY4QKZ"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/script/blink.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/script/countdown.php');
  ?>
</body>

</html>