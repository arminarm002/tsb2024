<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/db/connectdb.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Important Date</title>
  <link rel="stylesheet" href="/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/theme/css/self.css">
</head>

<body>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/components/navbar.php');
  ?>
  <a href="https://www.messenger.com/t/279532238569467/?messaging_source=source%3Apages%3Amessage_shortlink&source_id=1441792&recurring_notification=0"
    target="_blank">
    <img src="/../img/messenger.png" class="img-fluid messenger">
  </a>
  <div class="container">
    <h1 class="card-title centerer mt-3">Important Dates</h1>
    <table class="table tb-stip table-striped table-hover mt-5" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
      <tbody style="font-size: 1.6vw;">
        <tr>
          <td>Registration & Submissions opens</td>
          <td>May 15, 2024</td>
        </tr>
        <tr>
          <td>Abstract submission deadline</td>
          <td>
            <span class="redmidline" style="color:#f78787">July 15, 2024</span>
            <span class="red"> August 16, 2024</span>
          </td>
        </tr>
        <tr>
          <td>Notification of Abstract acceptance</td>
          <td>August 16-30, 2024</td>
        </tr>
        <tr>
          <td>
            Full paper submission deadline <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- E-Proceeding<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- CAST, SSSTJ, TJNN
          </td>
          <td><br>
            <span class="redmidline" style="color:#f78787">August 16, 2024</span>
            <span class="red">August 30, 2024</span><br>
            <span class="redmidline" style="color:#f78787">November 14, 2024</span>
            <span class="red">December 16, 2024</span>
          </td>
        </tr>
        <tr>
          <td>Notification of Full paper acceptance</td>
          <td>October 1-16, 2024</td>
        </tr>
        <tr>
          <td><u>Early bird</u> registration deadline</td>
          <td>
            <span class="redmidline" style="color:#f78787">August 16, 2024</span>
            <span class="red">August 30, 2024</span>
          </td>
        </tr>
        <tr>
          <td>Late registration deadline</td>
          <td>
            <span class="redmidline" style="color:#f78787">October 16, 2024</span>
            <span class="red"> November 1, 2024</span>
          </td>
        </tr>
        <tr>
          <td>TSB2024 Conference</td>
          <td>November 14-16, 2024</td>
        </tr>
      </tbody>
    </table>

    <h1 class="card-title centerer mt-3">Overall Program</h1>
    <div class="row centerer mt-3">
      <details class="centerer btn-program">
        <summary>Conference: November 14-15, 2024</summary>
        <a target="_blank" href="/img/program1.jpg">
          <img src="/img/program1.jpg" class="w-50 mt-3">
        </a>
      </details>
    </div>
    <div class="row centerer mt-3">
      <details class="centerer btn-program">
        <summary>Conference: November 16, 2024</summary>
        <a target="_blank" href="/img/program2.jpg">
          <img src="/img/program2.jpg" class="w-50 mt-3">
        </a>
      </details>
    </div>

  </div>

  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');

  ?>
</body>

</html>