<?php
session_start();
include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/connectdb.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SPC2024 KMITL</title>
  <meta name="author" content="Suradech Kuruphan">
  <meta name="description"
    content="19 th of Siam Physics Congress 2024 (SPC2024), Krungsri River Hotel, Phra Nakorn Sri Ayutthaya, Thailand, JUNE 5-7, 2024.">
  <meta name="keywords"
    content="spc2024, SPC2024,19 th of Siam Physics Congress, ครั้งที่ 19, ประกวดโครงงานอิสระ, สมาคมฟิสิกส์">
  <link rel="stylesheet" href="/spc2024/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/spc2024/theme/css/self.css">
  <style>
    /* สีข้อความที่กระพริบ */
    .blinking {
      animation: blink-animation 1s infinite;
    }

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

<body class="font-mitr">
  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/navbar2.php');
  ?>

  <div class="container">
    <h1 class="card-title centerer mt-3">All Announcement & News</h1>
    <table class="table table-striped strip" style="border: thick double #ff7a01;">
      <thead>
        <tr>
          <th class="fs-28">Announcement</th>
          <th> </th>
        </tr>
      </thead>
      <tbody>
      <tr>
          <td><b id="blinkingText2" class="blinkin" style="color:red;">New</b> 17 April 2024</td>
          <td>
            <a class="anews" href="/spc2024/pages/project.php" target="_blank">The notice for qualified applicants of the 16th project contest has been postponed to 30 April 2024. We are sorry for any inconvenience it may cause <u>Please stay tuned.</u>
            </a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  
  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/footer.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/blink.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/script.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/messenger.php');
  ?>

</body>

</html>