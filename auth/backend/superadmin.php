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
    <link rel="stylesheet" href="/tsb2024/theme/css/bootstrap-theme.css">
    <link rel="stylesheet" href="/tsb2024/theme/css/self.css">
  </head>

  <body class="font-mitr">
    <?php
    include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/navbar.php');

    $sql = $conn->query("SELECT * FROM tb_user INNER JOIN tb_pay 
    ON tb_user.pay_id = tb_pay.pay_id WHERE email='" . $_SESSION['email'] . "'");
    foreach ($sql as $row) { ?>

      <div class="container-fluid">
        <div class="row mt-3">
          <div class="col-sm-12 col-md-4 col-lg-3">
            <?php include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/sidebar.php'); ?>
          </div>
          <div class="col-sm-12 col-md-8 col-lg-9">
            <div class="card" style="background-color: rgb(255 122 1 / 20%);box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
              <div class="card-header bg-l text-white text-center">
                <h5>
                  Add Announcement
                </h5>
              </div>
              <div class="card-body" style="margin: 0px 10%;">
                <div class="row">
                  <form action="data/alladd.php" method="POST" enctype="multipart/form-data">

                    <!-- Image input -->
                    <label class="mb-3">รูปพาดหัวข่าว<br></label>
                    <input type="file" name="coverupload" required>
                    
                    <!-- date input -->
                    <div class="form-outline mb-2">
                      <label class="form-label" for="date">วันที่อัพข่าว</label>
                      <input type="text" id="date" name="date" class="form-control" required />
                    </div>
                    
                    <!-- detail input -->
                    <div class="form-outline mb-2">
                      <label class="form-label" for="detail">รายละเอียด</label>
                      <input type="text" id="detail" name="detail" class="form-control" required />
                    </div>

                    <!-- Link input -->
                    <div class="form-outline mb-2">
                      <label class="form-label" for="link">ลิ้งก์</label>
                      <input type="text" id="link" name="link" class="form-control" required />
                    </div>

                    <button type="submit" class="btn btn-l btn-block text-white mb-2" name="add">เพิ่ม</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div><!-- row ใหญ่ -->
      </div><!-- container -->

    <?php } ?>

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