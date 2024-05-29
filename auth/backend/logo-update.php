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
    <title>TSB2024 KMITL</title>
    <link rel="stylesheet" href="/theme/css/bootstrap-theme.css">
    <link rel="stylesheet" href="/theme/css/self.css">
  </head>

  <body>
    <?php
    include ($_SERVER['DOCUMENT_ROOT'] . '/components/navbar.php');
    if (isset($_POST['updatelogo'])) {
      $id = $_POST['id'];
    $sql = $conn->query("SELECT * FROM tb_logo WHERE id=$id");
    foreach ($sql as $row) { ?>

      <div class="container-fluid">
        <div class="row mt-3">
          <div class="col-sm-12 col-md-4 col-lg-3">
            <?php include ($_SERVER['DOCUMENT_ROOT'] . '/components/sidebar.php'); ?>
          </div>
          <div class="col-sm-12 col-md-8 col-lg-9">
            <div class="card" style="background-color: rgb(255 122 1 / 20%);box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
              <div class="card-header bg-l text-white text-center">
                <h5>Update Logo</h5>
              </div>
              <div class="card-body" style="margin: 0px 10%;">
                <div class="row">
                  <form action="data/allupdate.php" method="POST" enctype="multipart/form-data">

                  <input type="text" name="id" class="form-control" style="display:none;" value="<?php echo $row['id']; ?>">
                  <input type="text" name="oldname" class="form-control" style="display:none;" value="<?php echo $row['lg_image']; ?>">
                  <!-- Image input -->
                  <label class="mb-3">รูปโลโก้<br></label>
                  <input type="file" name="logoupdate" required>

                  <!-- Name input -->
                  <div class="form-outline mb-2">
                    <label class="form-label" for="name">ชื่อบริษัท</label>
                    <input type="text" id="name" name="name" class="form-control" 
                    value="<?php echo $row['lg_name']; ?>" required />
                  </div>

                  <!-- Class input -->
                  <div class="form-outline mb-3">
                    <label class="form-label" for="class">ระดับ</label>
                    <div class="dropdown">
                      <select class="btn btn-secondary dropdown-toggle titlebut" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" name="class" style="border-color:black;" required>
                        <option value="" selected disabled>กรุณาเลือกระดับ</option>
                        <option value="organizer">Organizer</option>
                        <option value="supreme">Supreme</option>
                        <option value="platinum">Platinum</option>
                        <option value="gold">Gold</option>
                        <option value="silver">Silver</option>
                        <option value="copper">Copper</option>
                      </select>
                    </div>
                  </div>

                  <!-- Link input -->
                  <div class="form-outline mb-3">
                    <label class="form-label" for="link">ลิ้งก์บริษัท</label>
                    <input type="text" id="link" name="link" class="form-control" value="<?php echo $row['lg_link']; ?>" required />
                  </div>
                  
                    <button type="submit" class="btn btn-l btn-block text-white mb-2" name="updatelogo">แก้ไข</button>
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