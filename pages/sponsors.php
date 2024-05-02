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
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wdth,wght@80,100..900&family=Open+Sans:ital,wdth,wght@0,75,300..800;1,75,300..800&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="/tsb2024/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/tsb2024/theme/css/self.css">
</head>

<body class="noto-sans-thai">
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/navbar.php');
  ?>

  <section class="mt-3">
    <div class="container">
      <h1 class="card-title centerer mt-3">Organizer</h1>
      <div class="blog-con">

        <div class="row mt-3">
          <div class="col-lg-2 col-md-3 col-3" style="text-align: center;">
            
          </div>
          <div class="col-lg-2 col-md-3 col-3 center2">
            
          </div>
          <div class="col-lg-2 col-md-3 col-3" style="text-align: center;">
            <a href="https://www.science.kmitl.ac.th/new" target="_blank">
              <img src="/tsb2024/img/co-host/logo-b.png" class="img-fluid">
            </a>
          </div>
          <div class="col-lg-2 col-md-3 col-3 center2">
            <a href="https://www.science.kmitl.ac.th/new" target="_blank">
              <h6 class="abw resfont2">King Mongkut's Institute of Technology Ladkrabang</h6>
            </a>
          </div>
          <div class="col-lg-2 col-md-3 col-3" style="text-align: center;">
            
          </div>
          <div class="col-lg-2 col-md-3 col-3 center2">
            
          </div>
        </div>
        <hr>
      </div>

      <h1 class="card-title centerer mt-3">Sponsors</h1>
      
    </div>
  </section>

  </div>

  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/script/script.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/script/messenger.php');
  ?>
</body>

</html>