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

  <div class="container">
    <h1 class="card-title centerer mt-3">Plenary Talks & Speakers</h1>
    <h4 style="text-align: center;">Plenary Talks</h4>
    <h2 class="color-black">IEEE-MagSoc Thailand Lecturers : </h2>
        <div class="row" style="text-align: center;">
          <div class="col-lg-6">
            <h5 style="color:blue">Lecture 1 : “Magnetic Materials and Magnetism”</h5>
            <p class="color-black">Assoc. Prof. Dr. Jessada Chureemart<br>MINT Research Unit, Mahasarakham
              University<br></p>
            <p class="color-black">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Assoc. Prof. Jessada Chureemart is currently
              working as lecturer in Physics department, Mahasarakham
              University. He received the B.S. and M.Sc degrees in Physics from Khon Kaen University and Chulalongkhon
              University under the support of the Development and Promotion of Science and Technology Talents (DPST)
              scholarship. In 2010 and 2013, He also received M.Sc (Physics by research) and Ph.D in Physics from
              University of York, UK. In 2017-2027, he has received the award and appointed as Honorary Visiting Fellow
              in the school of Physics, Engineering and Technology, University of York, UK. His research interests
              include
              the magnetic data storage devices and advanced recording technology and also applications of magnetic
              materials by using advanced simulations as atomistic, micromagnetic and multiscale models.
            </p>
          </div>
          <div class="col-lg-6">
            <img src="/spc2024/assets/img/board/lec1.png" style="max-width: 58%;">
          </div>
        </div>
    <hr>
    <h4 style="text-align: center;">Keynote Lectures</h4>
    <img src="/spc2024/img/soon.png" style="display:block; margin:auto; width:50%;">
    <hr>
    <h4 style="text-align: center;">Invited Speakers</h4>
    <img src="/spc2024/img/soon.png" style="display:block; margin:auto; width:50%;">
  </div>

  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/script.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/messenger.php');
  ?>
</body>

</html>