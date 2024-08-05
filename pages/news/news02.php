<?php
session_start();
include ($_SERVER['DOCUMENT_ROOT'] . '/db/connectdb.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Department of Biology-KMITL</title>
  <link rel="stylesheet" href="/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/theme/css/self.css">
</head>

<body>
  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/components/navbar.php');
  ?>
  <a href="https://www.messenger.com/t/279532238569467/?messaging_source=source%3Apages%3Amessage_shortlink&source_id=1441792&recurring_notification=0"
    target="_blank">
    <img src="/../img/messenger.png" class="img-fluid messenger">
  </a>
  <div class="container">
    <div class="mt-3">
      <h2 class="card-text" style="text-align:center;">🚀 Exciting news for TSB2024 participants! 🚀</h2>
      <br>
      <h5 class="card-text" style="text-align:justify;">Extension deadline for 2nd Abstract submission : August 16, 2024
      </h5>
      <h5 class="card-text" style="text-align:justify;">Extension deadline for Early bird registration : August 30, 2024
      </h5>
      <br><hr><br>
      <p>📄 Full paper submissions for the TSB2024 proceedings via Microsoft CMT are now OPEN! 🎉 Get the guidelines and
        templates here :
        <a href="https://drive.google.com/drive/folders/1zEyLq_Od_VRhBVpH18UmYWcYERRjaBpk" class="btn btn-download"
          target="_blank">Download</a>
      </p>
      <p>📝 Plus, all abstract submissions are now moved to Google Forms, starting August 1, 2024. Submit your abstracts using this button : 
        <a href="https://forms.gle/q1PcUUuRg8PyAmmj8" class="btn btn-download"
          target="_blank">Submit</a>
      </p>
      <br>
      <p>We look forward to your contributions and insightful research!! 🌟 #TSB2024 #Research #Innovation</p>
    </div>
    <div style="text-align:center;">
      <img src="../../img/submitphoto.png" class="w-25">
    </div>
  </div>

  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');
  ?>

</body>

</html>