<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/db/connectdb.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/theme/css/self.css">
</head>

<body> 
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/components/navbar.php');
  ?>
  <a href="https://www.messenger.com/t/279532238569467/?messaging_source=source%3Apages%3Amessage_shortlink&source_id=1441792&recurring_notification=0" target="_blank">
    <img src="/../img/messenger.png" class="img-fluid messenger">
  </a>
  <div class="container mt-3">
  <h1 class="card-title centerer mb-3">Contact Us</h1>
    <div class="row imageback" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
      <div class="col-12" style="margin: 3% 0px;">
        <p class="resfont">Telephone : 02-329-8000 ext. 6225<br>Email : tsb2024@kmitl.ac.th <br>Facebook :
          <a href="https://www.facebook.com/profile.php?id=61557223666940" target="_blank">TSB 2024</a>
          <br>Department of Biology, School of Science, King Mongkut’s Institute of Technology Ladkrabang, Bangkok, 10520, Thailand
        </p>
      </div>
    </div>
    <div class="ratio ratio-21x9 mt-5" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
      <iframe class="border border-warning border-2"
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15503.267051283896!2d100.7800364!3d13.729541!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d6636793c6739%3A0xe555b53134b8833f!2z4LiE4LiT4Liw4Lin4Li04LiX4Lii4Liy4Lio4Liy4Liq4LiV4Lij4LmMIChLTUlUTCk!5e0!3m2!1sth!2sth!4v1695197288297!5m2!1sth!2sth"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <h1 class="card-title centerer mt-5 mb-3">Gallery</h1>
    <div class="row mb-4">
      <div class="col-6">
        <img src=/img/gsci1.jpg class="border border-warning border-2 img-fluid">
      </div>
      <div class="col-6">
        <img src=/img/gsci8.jpg class="border border-warning border-2 img-fluid">
      </div>
    </div>
    <div class="row mb-4">
      <div class="col-6">
        <img src=/img/gsci2.jpg class="border border-warning border-2 img-fluid">
      </div>
      <div class="col-6">
        <img src=/img/gsci3.jpg class="border border-warning border-2 img-fluid">
      </div>
    </div>
    <div class="row mb-4">
      <div class="col-6">
        <img src=/img/gsci9.jpg class="border border-warning border-2 img-fluid">
      </div>
      <div class="col-6">
        <img src=/img/gsci5.jpg class="border border-warning border-2 img-fluid">
      </div>
    </div>
    <div class="row mb-4">
      <div class="col-6">
        <img src=/img/gsci7.jpg class="border border-warning border-2 img-fluid">
      </div>
      <div class="col-6">
        <img src=/img/gsci4.jpg class="border border-warning border-2 img-fluid">
      </div>
    </div>
  </div>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');
  
  ?>
</body>

</html>