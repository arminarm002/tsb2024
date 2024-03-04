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
  <link rel="stylesheet" href="/tsb2024/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/tsb2024/theme/css/self.css">
</head>

<body class="font-concert">
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/navbar.php');
  ?>
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel"
    data-bs-interval="3000">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1">
        <img src="/spc2024/img/hotel/01.jpg" class="d-block w-100">
      </button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2">
        <img src="/spc2024/img/hotel/02.jpg" class="d-block w-100">
      </button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3">
        <img src="/spc2024/img/hotel/03.jpg" class="d-block w-100">
      </button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4">
        <img src="/spc2024/img/hotel/04.jpg" class="d-block w-100">
      </button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5">
        <img src="/spc2024/img/hotel/05.jpg" class="d-block w-100">
      </button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6">
        <img src="/spc2024/img/hotel/06.jpg" class="d-block w-100">
      </button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7">
        <img src="/spc2024/img/hotel/07.jpg" class="d-block w-100">
      </button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8">
        <img src="/spc2024/img/hotel/08.jpg" class="d-block w-100">
      </button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9">
        <img src="/spc2024/img/hotel/09.jpg" class="d-block w-100">
      </button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9" aria-label="Slide 10">
        <img src="/spc2024/img/hotel/10.jpg" class="d-block w-100">
      </button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="10" aria-label="Slide 11">
        <img src="/spc2024/img/hotel/11.jpg" class="d-block w-100">
      </button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="11" aria-label="Slide 12">
        <img src="/spc2024/img/hotel/12.jpg" class="d-block w-100">
      </button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/spc2024/img/hotel/01.jpg" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h1>Krungsri River Hotel</h1>
          <p>Krungsri Hotel is the first in the city of Ayutthaya to install the Pa Sak River for convenience,
            convenient installation, close to various tourist attractions and historical sites, ready to welcome
            everyone with elegant rooms, amenities and facilities. Pay attention to cleanliness and meet SHA standards
            from the Ministry of Public Health.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/spc2024/img/hotel/02.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="/spc2024/img/hotel/03.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="/spc2024/img/hotel/04.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="/spc2024/img/hotel/05.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="/spc2024/img/hotel/06.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="/spc2024/img/hotel/07.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="/spc2024/img/hotel/08.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="/spc2024/img/hotel/09.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="/spc2024/img/hotel/10.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="/spc2024/img/hotel/11.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="/spc2024/img/hotel/12.jpg" class="d-block w-100">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container mt-3">
    <a class="link" href="https://www.krungsririver.com/" target="_black">
      <h1>Krungsri River Hotel</h1>
    </a>
    <p style="text-align: center;">
      Tel : +66 (0) 35-244-333 Fax : +66 (0) 35-243-777<br>
      E-mail : krungsririverhotel@gmail.com<br>
      Website: <a class="link" href="https://www.krungsririver.com/" target="_black">www.krungsririver.com</a>
    </p>
    <p>
      Wrap yourself in luxury at the Krungsri River Hotel, the premier sanctuary in Ayutthaya and one of Thailand’s
      leading hotels just outside of Bangkok.<br><br>The Krungsri River, a luxurious four-star hotel with great
      heritage, is nestled in the energy and excitement of the ancient city of Ayutthaya. A city once was a capital of
      the majestic kingdom of Thailand and a place where thousands of people visit every day.<br><br>Indulging in the
      cultural attractions of Ayutthaya, meeting for important business of the day or inspiring industry events of the
      year something happens every hour of every day. And after a long day of meetings, shopping or sightseeing, you can
      rejuvenate your evening into our stylish room with every convenience, every facility right at your
      fingertips.<br><br>The Krungsri River invites you to explore the many possibilities within Ayutthaya and within
      yourself. Located in the heart of Ayutthaya right off the Naraesuan Bridge that crosses the great Pa Sak River,
      the newly renovated hotel draws you in and surrounds your senses with all manner of stimulations once inside.
      Undeniably compelling with spacious views overlooking the historic river filled with culture and traditional
      masterpiece.<br><br>Krungsri River offers a sense that, even for a day, you are transported to an inspirational
      sanctuary of style and comfort.<br>
    </p>
    
    <h1 class="card-title centerer mt-3">Krungsri River Hotel</h1>
    <div class="ratio ratio-21x9 mt-3">
      <iframe class="rounded border border-warning border-2"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3865.2820596160363!2d100.58009137581796!3d14.35308168308725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e275b64fa00651%3A0xf9e12f549248baa1!2z4LmC4Lij4LiH4LmB4Lij4LihIOC4geC4o-C4uOC4h-C4qOC4o-C4tSDguKPguLTguYDguKfguK3guKPguYwg4Lit4Lii4Li44LiY4Lii4Liy!5e0!3m2!1sth!2sth!4v1695097663619!5m2!1sth!2sth"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="row mt-5" style="padding: 0px 1.5rem;">
      <div class="col-4">
        <p><b>Airports</b></p>
        <p><i class="bi bi-airplane"></i> Don Mueang International Airport (DMK) 49.0 km</p>
        <p><i class="bi bi-airplane"></i> Suvarnabhumi Airport (BKK) 75.9 km</p>
      </div>
      <div class="col-4">
        <p><b>Public transportation</b></p>
        <p><i class="bi bi-train-front"></i> Ayutthaya Train Station 460 m</p>
        <p><i class="bi bi-train-front"></i> Banma 3.8 km</p>
      </div>
      <div class="col-4">
        <p><b>Hospital or clinic</b></p>
        <p><i class="bi bi-hospital"></i> Sirin Pharmacy 680 m</p>
        <p><b>Shopping</b></p>
        <p><i class="bi bi-shop"></i> Ayothaya Floating Market & Elephant Village 1.4 km</p>
        <p><b>Convenience store</b></p>
        <p><i class="bi bi-7-square"></i> 7 Eleven 260 m</p>
      </div>
    </div>
  
  </div>

  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/script.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/messenger.php');
  ?>

</body>

</html>