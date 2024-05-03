<?php
session_start();
include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/connectdb.php');
if ($_SESSION['role'] == "superadmin") {
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
    <?php include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/navbar.php');?>

      <div class="container-fluid">
      <div class="row mt-3">
        <div class="col-sm-12 col-md-4 col-lg-3">
          <?php include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/sidebar.php'); ?>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-9">
          <div class="card" style="background-color: rgb(255 122 1 / 20%);box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
            <div class="card-header bg-l text-white text-center">
              <h5>
                Add Poster
              </h5>
            </div>
            <div class="card-body" style="margin: 0px 10%;">
              <div class="row">
                <form action="data/alladd.php" method="POST" enctype="multipart/form-data">

                  <!-- Image input -->
                  <label class="mb-3">รูปโปสเตอร์หน้าหลัก<br></label>
                  <input type="file" name="poster" accept="image/jpeg, image/jpg, image/png" required>

                  <button type="submit" class="btn btn-l btn-block text-white mb-2" name="addposter">เพิ่ม</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div><!-- row ใหญ่ -->
    </div><!-- container -->

    <?php
    include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/footer.php');
    include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/script/script.php');
    include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/script/messenger.php');
    ?>

  </body>

  </html>
<?php } else {
  header("refresh: 1; url= /tsb2024/auth/register.php");
} ?>