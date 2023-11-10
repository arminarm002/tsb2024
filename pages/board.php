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
    <h1 class="card-title centerer mt-3">Board & Committee</h1>

    <!-- Advisory Committee -->
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <table class="table table-striped strip">
          <thead>
            <tr>
              <th class="fs-28">Advisory Committee</th>
              <th> </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Rector of King Mongkut’s Institute of Technology Ladkrabang (KMITL)</td>
              <td></td>
            </tr>
            <tr>
              <td>The President of Thai Physics Society</td>
              <td></td>
            </tr>
            <tr>
              <td>The Director of Synchrotron Light Research Institute</td>
              <td></td>
            </tr>
            <tr>
              <td>The Director of National Astronomical Research Institute of Thailand (Public Organization)</td>
              <td></td>
            </tr>
            <tr>
              <td>The Director of National Nanotechnology Center (NANOTEC)</td>
              <td></td>
            </tr>
            <tr>
              <td>The Director of Thailand Institute of Nuclear Technology</td>
              <td></td>
            <tr>
              <td>The Director of Thailand Center of Excellence in Physics</td>
              <td></td>
            </tr>
            <tr>
              <td>Rector of Phranakhon Si Ayutthaya Rajabhat University </td>
              <td></td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr. Kajornyod Yoodee, Thai Physics Society</td>
              <td></td>
            </tr>
            <tr>
              <td>Prof.Dr.Sukit Limpijumnong, Thai Physics Society</td>
              <td></td>
            </tr>
            <tr>
              <td>Prof.Dr.Jiti Nukeaw, KMITL</td>
              <td></td>
            </tr>
            <tr>
              <td>Assoc.Prof.Suwan Kusamran, KMITL</td>
              <td></td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Thanuttkhul Mongkolaussavarat, KMITL</td>
              <td></td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Dusanee Thanaboripat, KMITL</td>
              <td></td>
            </tr>
            <tr>
              <td>The Dean of School of Science, KMITL</td>
              <td></td>
            </tr>
            <tr>
              <td>The Dean of College of Materials Innovation and Technology, KMITL</td>
              <td></td>
            </tr>
            <tr>
              <td>Vice Dean of School of Science, KMITL</td>
              <td></td>
            </tr>
            <tr>
              <td>Vice Dean of College of Materials Innovation and Technology, KMITL</td>
              <td></td>
            </tr>
            <tr>
              <td>Dr.Suparerk Aukkaravittayapun, Thai Physics Society</td>
              <td></td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Siramas Komonjinda, Thai Physics Society</td>
              <td></td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Pichet Kijthara, Thai Physics Society</td>
              <td></td>
            </tr>
            <tr>
              <td>Head of Physics Department, KMITL</td>
              <td></td>
            </tr>
            <tr>
              <td>Head of Nano Science and Nanotechnology Department, KMITL</td>
              <td></td>
            </tr>
            <tr>
              <td>Prapaichit Yungyuen, KMITL</td>
              <td></td>
            </tr>
            <tr>
              <td>Kesanee Ketnuam, KMITL</td>
              <td></td>
            </tr>
            <tr>
              <td>Anna Thanomngam, KMITL</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-2"></div>
    </div>

    <!-- Organizing Committee -->
    <hr>
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <table class="table table-striped strip">
          <thead>
            <tr>
              <th class="fs-28">Organizing Committee</th>
              <th> </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Head of Physics Department</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Prof.Dr.Wisanu Pecharapa</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Kitsakorn Locharoenrat</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Karn Wongsariya</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Pattareeya Damrongsak</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Thutiyaporn Thiwawong</td>
              <td>KMITL</td>
            <tr>
              <td>Asst.Prof.Dr.Pisan Sukwisute</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Aparporn Sakulkalavek</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Mr.Surachart Kamoldilok</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Yongyut Loasirithavorn</td>
              <td>Thai Physics Society</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Jarin Karnjanawarin</td>
              <td>Thai Physics Society</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Prasong Ketsaratikhun</td>
              <td>Thai Physics Society</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Sojipong Chattraporn</td>
              <td>Thai Physics Society</td>
            </tr>
            <tr>
              <td>Head of Nano Science and Nanotechnology Department</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Kannika Thamarakwattana </td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Kesanee Ketnuam</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Prof.Dr.Pichet Limsuwan</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Prof.Dr.Wisanu Pecharapa</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Aparporn Sakulkalavek</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Chesta Ruttanapun</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Prof.Dr.Naratip Vittayakorn</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Ittipol Jangchud</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Kitsakorn Locharoenrat</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Ratchanok Somphonsane</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Sarai Lekchaum</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Duangjai Ochaikul</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Saranya Phunpruch</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Chokchai Kittiwongwattana</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Panpailin Seeharaj</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Saowapak Teerasong</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Sakon Rahong</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Nongluck Houngkamhang</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Benchapol Tunhoo</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Wanwilai Vittayakorn</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Daranee Phromyothin</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Winadda Wongwiriyapan</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Navaphun Kayunkid</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Tosapol Malungnont</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Apiluck Eiad-Ua</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Korakot Onlaor</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Wanichaya Mekprasart</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Prathan Buranasiri</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Mettaya Kitiwan</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.S.Tipawan Khlayboonme</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Nuttaporn Promros</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Bhanupol Klongratog</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Pisan Sukwisute</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Nuttakrit Somdock</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Surasak Pipatsart</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Tanaporn Leelawattananon</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Warot Chotpatiwetchkul</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Chaval Sriwong</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Worakrit Worananthakij</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Vorapat Sanguanchaipaiwong</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Karn Wongsariya</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Tipachai Vatanavicharn</td>
              <td>KMITL</td>
            </tr>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Suparat Rukchonlatee</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Pitiporn Thanomngam</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Thutiyaporn Thiwawong</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Adirek Rangkasikorn</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Kanoknan Phacheerak</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Mayuree Phonyium Reilly</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Kittiphong Amnuyswat</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Supamas Wirunchit</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Keerayut Srinuanchan </td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Dr.Chinnapat Ruttanasirawit</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Dr.Witoon Yindeesuk</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Dr.Lunchakorn Tannukij</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Dr.Pichanan Teesetsopon</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Dr.Khattiya Chalapat</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Dr.Teerayut Uwanno</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Dr.Chayanan Boonrawd</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Surachart Kamoldilok</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Thammarat Taengtung</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Phumin Jindajitawat</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Kanokthip Boonyarattanakalin</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Sarayut Wongchantra</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Kannika Thamarakwattana </td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Nalira Sawangjit</td>
              <td>KMITL</td>
            </tr>

          </tbody>
        </table>
      </div>
      <div class="col-2"></div>
    </div>

    <!-- Ceremony Committee -->
    <hr>
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <table class="table table-striped strip">
          <thead>
            <tr>
              <th class="fs-28">Ceremony Committee</th>
              <th> </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Assoc.Prof.Dr.Kitsakorn Locharoenrat</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Dr.Chinnapat Ruttanasirawit</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Prathan Buranasiri</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Cherdsak Maneeruttanarungroj</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Patcharaporn Weerachawanasak</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Wanwilai Vittayakorn</td>
              <td>KMITL</td>
            <tr>
              <td>Assoc.Prof.Dr.Daranee Phromyothin</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Tosapol Malungnont</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Nongluck Houngkamhang</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Kanoknan Phacheerak</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Supamas Wirunchit/td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Dr.Witoon Yindeesuk</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Ratchanok Somphonsane</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Wanee Srichoom</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Prapaijit Yungyuen</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Rungrudsamee Disada</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Kannika Thamarakwattana</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Wisa Homchan</td>
              <td>KMITL</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-2"></div>
    </div>

    <!-- Finance Committee -->
    <hr>
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <table class="table table-striped strip">
          <thead>
            <tr>
              <th class="fs-28">Finance Committee</th>
              <th> </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Dr.Suparerk Aukkaravittayapun</td>
              <td>Thai Physics SocietyL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Karn Wongsariya</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Winadda Wongwiriyapan</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Mettaya Kitiwan</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Sumittra Phowiset</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Suchada Chaiyawong</td>
              <td>KMITL</td>
            <tr>
              <td>Sasiwan Klinnuan</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Pimporn Onlaor</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Poolsub Wisaikasem</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Wijittra Taengtung</td>
              <td>KMITL</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-2"></div>
    </div>

    <!-- Registration Committee -->
    <hr>
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <table class="table table-striped strip">
          <thead>
            <tr>
              <th class="fs-28">Registration Committee</th>
              <th> </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Assoc.Prof.Dr.Pattareeya Damrongsak</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Thutiyaporn Thiwawong</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Dr.Lunchakorn Tannukij</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Daranee Phromyothin</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Mayuree Phonyium Reilly</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Dr.Khattiya Chalapat</td>
              <td>KMITL</td>
            <tr>
              <td>Dr.Teerayut Uwanno</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Dr.Chayanan Boonrawd</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Tanaporn Leelawattananon</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Phusanisa Disaphirom</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Noppol Riwcharoenrikul</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Chananchida Tonthao</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Adisorn Rakmit</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Kittipa Choosree</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Naruenard Loedsapchinda</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Kesanee Ketnuam</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Nalita Nalita Sawangjit</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Poosuda Phetbaen</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Wisa Homchan</td>
              <td>KMITL</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-2"></div>
    </div>

    <!-- Venue and Transportation Committee -->
    <hr>
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <table class="table table-striped strip">
          <thead>
            <tr>
              <th class="fs-28">Venue and Transportation Committee</th>
              <th> </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Asst.Prof.Dr.Thutiyaporn Thiwawong </td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Adirek Rangkasikorn</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Sakon Rahong </td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Jarin Potichaiya</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Saroj Chooampi</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Chawanon Mano</td>
              <td>KMITL</td>
            <tr>
              <td>Komson Suebsook</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Phakwaran Jampathiw </td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Nirut Lekchaisue</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Sutichai Samart </td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Bhanupol Klongratog</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Kittiphong Amnuyswat</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Saisudawan Suttiyan</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Chitchanok Janyasomsakoon</td>
              <td>KMITL</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-2"></div>
    </div>

    <!-- Sponsorship and Fundraising Committee -->
    <hr>
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <table class="table table-striped strip">
          <thead>
            <tr>
              <th class="fs-28">Sponsorship and Fundraising Committee</th>
              <th> </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Asst.Prof.Dr.Pisan Sukwisute</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Wanichaya Mekprasart</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Prof.Dr.Wisanu Pecharapa </td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Kitsakorn Locharoenrat </td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Karn Wongsariya</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Pattareeya Damrongsak</td>
              <td>KMITL</td>
            <tr>
              <td>Asst.Prof.Dr.Thutiyaporn Thiwawong</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Aparporn Sakulkalavek</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Mr.Surachart Kamoldilok</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Navaphun Kayunkid</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Nantawan Niemhom</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Sudjai Phutphat</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Sanya Meesim</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Sakrin Boonlum</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Wasinee Thamsathit</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Nuttaporn Manapradit</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Weerayut Inboonma</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Tanyarat Shoosri</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Kannika Rattanawaraha</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Krittaporn Sookpotarom</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Pinyapad pomdeem</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Jiraporn Srisuwanwichian</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Rungrat Jitreekun</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Thanaporn Maswanna</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Tiwannaporn Poodant</td>
              <td>KMITL</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-2"></div>
    </div>

    <!-- Public Relations Committee -->
    <hr>
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <table class="table table-striped strip">
          <thead>
            <tr>
              <th class="fs-28">Public Relations Committee</th>
              <th> </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Assoc.Prof.Dr.Aparporn Sakulkalavek</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Apiluck Eiad-Ua</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Kanokthip Boonyarattanakalin</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Nuttakrit Somdock</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Assoc.Prof.Dr.Karoon Sadorn</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Jatuporn Meesin</td>
              <td>KMITL</td>
            <tr>
              <td>Chatchawan Pensook</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Phongphan khunthong</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Sakda Trachang</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Suradech Kuruphan</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Jamorn pengsuay</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Waraset Phanhirun</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Chitchanok Janyasomsakoon</td>
              <td>KMITL</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-2"></div>
    </div>

    <!-- Audio Visual Aid Committee -->
    <hr>
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <table class="table table-striped strip">
          <thead>
            <tr>
              <th class="fs-28">Audio Visual Aid Committee</th>
              <th> </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Surachart Kamoldilok </td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Jatuporn Meesin</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Dr.Witchaya Towongpaichayont</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Dr.Akadej Udomchaiporn</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.S.Tipawan Khlayboonme</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Keerayoot Srinuanjan </td>
              <td>KMITL</td>
            <tr>
              <td>Dr.Lunchakorn Tannukij</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Asst.Prof.Dr.Kittiphong Amnuyswat</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Thammarat Tangtung </td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Phumin Jindajitawat</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Chawanon Mano</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Sakda Trachang</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Chatchawan Pensook</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Jamorn pengsuay</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Phongphan khunthong</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Watchara Siripipatkul</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>Weraphan Tipaphong</td>
              <td>KMITL</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-2"></div>
    </div>

    <!-- Assessment Committee -->
    <hr>
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <table class="table table-striped strip">
          <thead>
            <tr>
              <th class="fs-28">Assessment Committee</th>
              <th> </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>• Asst.Prof.Dr.Sittichai Charoensettasilp</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>• Sujitra Sukonthamut</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>• Asst.Prof.Dr.Kanogkan Leerojanaprapa</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>• Asst.Prof.Dr.Pornpimol Chaiwuttisak</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>• Asst.Prof.Dr.Yuwadee Klomwises</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>• Asst.Prof.Dr.Sakuna Srianomai</td>
              <td>KMITL</td>
            <tr>
              <td>• Waraset Phanhirun</td>
              <td>KMITL</td>
            </tr>
            <tr>
              <td>• Achara Phaeobang</td>
              <td>KMITL</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-2"></div>
    </div>

  </div>

  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/script.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/messenger.php');
  ?>
</body>

</html>