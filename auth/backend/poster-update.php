<?php
session_start();
include ($_SERVER['DOCUMENT_ROOT'] . '/connectdb.php');
if ($_SESSION['role'] == "superadmin") {
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Poster</title>
    <link rel="stylesheet" href="/theme/css/bootstrap-theme.css">
    <link rel="stylesheet" href="/theme/css/self.css">
  </head>

  <body>
    <?php
    include ($_SERVER['DOCUMENT_ROOT'] . '/components/navbar.php');

    if (isset($_POST['update'])) {
      $id = $_POST['id'];
    $sql = $conn->query("SELECT * FROM tb_poster WHERE id=$id");
    foreach ($sql as $row) { ?> 

      <div class="container-fluid">
        <div class="row mt-3">
          <div class="col-sm-12 col-md-4 col-lg-3">
            <?php include ($_SERVER['DOCUMENT_ROOT'] . '/components/sidebar.php'); ?>
          </div>
          <div class="col-sm-12 col-md-8 col-lg-9">
            <div class="card" style="background-color: rgb(255 122 1 / 20%);box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
              <div class="card-header bg-l text-white text-center">
                <h5>
                  Update Poster
                </h5>
              </div>
              <div class="card-body" style="margin: 0px 10%;">
                <div class="row">
                  <form action="data/allupdate.php" method="POST" enctype="multipart/form-data">

                    <!-- Image input -->
                    <label class="mb-3">รูปโปสเตอร์หน้าหลัก<br></label>
                    <input type="file" name="poster" accept="image/jpeg, image/jpg, image/png" required>
                    <input type="text" name="id" class="form-control" style="display:none;" 
                    value="<?php echo $row['id']; ?>">
                    <input type="text" name="oldname" class="form-control" style="display:none;" 
                    value="<?php echo $row['pt_image']; ?>">

                    <button type="submit" class="btn btn-l btn-block text-white mb-2" name="updateposter">เพิ่ม</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div><!-- row ใหญ่ -->
      </div><!-- container -->

    <?php } } ?>

    <?php
    include ($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
    include ($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');
    ?>

  </body>

  </html>
<?php } else {
  header("refresh: 1; url= /auth/register.php");
} ?>