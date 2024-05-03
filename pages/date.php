<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/connectdb.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Important Date</title>
  <link rel="stylesheet" href="/tsb2024/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/tsb2024/theme/css/self.css">
</head>

<body>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/navbar.php');
  ?>

  <div class="container">
  <h1 class="card-title centerer mt-3">Important Dates & Overall Program</h1>
    <table class="table tb-stip table-striped table-hover mt-5" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
      <tbody style="font-size: 2vw;">
        <tr>
          <td>Registration & Submissions opens</td>
          <td>May 15, 2024</td>
        </tr>
        <tr>
          <td>Abstract submission deadline</td>
          <td>July 15, 2024</td>
        </tr>
        <tr>
          <td>Notification of Abstract acceptance</td>
          <td>August 1-15, 2024</td>
        </tr>
        <tr>
          <td>Full paper submission deadline</td>
          <td>August 16, 2024</td>
        </tr>
        <tr>
          <td>Notification of Full paper acceptance</td>
          <td>October 1-16, 2024</td>
        </tr>
        <tr>
          <td><u>Early bird</u> registration deadline</td>
          <td>August 16, 2024</td>
        </tr>
        <tr>
          <td>Late registration deadline</td>
          <td>October 16, 2024</td>
        </tr>
        <tr>
          <td>TSB2024 Conference</td>
          <td>November 14-16, 2024</td>
        </tr>
      </tbody>
    </table>
    <table class="table tb-stip table-striped table-hover mt-5" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
      <thead style="text-align: center;font-size: 2.5vw;">
        <tr>
          <td colspan="2">
            <p>Overall Program of TSB2024</p>
          </td>
        </tr>
      </thead>
      <tbody style="font-size: 2vw;">
      <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td colspan="2">
            <h4 class="fs-35 centerer">Coming soon</h4>
          </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>

  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/script/script.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/script/messenger.php');
  ?>
</body>

</html>