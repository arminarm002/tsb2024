<?php
session_start();
include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/connectdb.php');

if ($_SESSION['role'] == "user") {
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
          <div class="col-sm-3 col-md-2">
            <?php include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/sidebar.php'); ?>
          </div>
          <div class="col">
            <?php if ($row['approve'] == "wait") { ?>
              <div class="alert alert-secondary" role="alert">
                กรุณารอการยืนยันจากเจ้าหน้าที่
              </div>
            <?php } else if ($row['approve'] == "approve") { ?>
                <div class="alert alert-success" role="alert">
                  การลงทะเบียนของคุณ ได้รับการอนุมัติเรียบร้อย
                </div>
            <?php } else if ($row['approve'] == "disapprove") { ?>
                  <div class="alert alert-danger" role="alert">
                    การลงทะเบียนของคุณ ไม่ผ่านการอนุมัติ เนื่องจาก "
                <?php echo $row['message']; ?>" หากยืนยันว่าการลงทะเบียนของท่านถูกต้องครบถ้วน กรุณาติดต่อเจ้าหน้าที่
                  </div>
            <?php } ?>
            <div class="row">
              <div class="col-sm-8">
                <!-- ข้อมูลหลัก -->
                <div class="card">
                  <div class="cardbody" style="padding:2% 5%;">
                    <div class="row">
                      <div class="col-md-5" style="text-align: center;">
                        <?php $sql4 = $conn->query("SELECT * FROM tb_user WHERE email='" . $_SESSION['email'] . "'");
                        foreach ($sql4 as $row4) {
                          echo "<img src='/tsb2024/file/upload/profile/" . $row4['profile'] . "' class='rounded-circle' style='box-shadow:rgba(0, 0, 0, 0.35) 0px 5px 15px; width: 150px; height: 150px;'>";
                        } ?>
                        <form action="phpimage.php" method="POST" enctype="multipart/form-data">
                          <div class="upload-btn-wrapper mt-3">
                            <button class="btn2">Choose image file</button>
                            <input type="file" name="profile" style="width: 145px;height: 45px;" required>
                          </div>
                          <button type="submit" name="update" class="btn2">Submit</button>
                        </form>
                      </div>
                      <div class="col-md">
                        <h2>
                          <?php
                          echo $row['title'] . $row['firstname'] . " " . $row['lastname'] . "<br>";
                          ?>
                        </h2>
                        <h4>
                          <?php
                          echo "(" . $row['type'] . ")" . " " . "<br>"
                            . $row['pay_name'] . " ";
                          if ($row['pay_id'] == 2 || $row['pay_id'] == 3 || $row['pay_id'] == 4) {
                            echo "ส่ง Abstract จำนวน " . $row['amount'] . " เรื่อง<br>รวมเป็นเงิน " . $row['total_price'] . " บาท<br>";
                          } else {
                            echo "<br>ราคา " . $row['total_price'] . " บาท<br>";
                          }
                          ?>
                        </h4>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- สำเนาบัตรนักเรียน / นักศึกษา -->
                <?php if ($_SESSION['pay_id'] == 4) { ?>
                  <div class="card mt-3">
                    <div class="cardbody" style="padding:2% 5%;">
                      <h5 class="card-title">สำเนาบัตรนักเรียน</h5>
                      <?php $sql2 = $conn->query("SELECT * FROM tb_student WHERE email='" . $_SESSION['email'] . "'");
                      foreach ($sql2 as $row2) {
                        echo "<img src='/tsb2024/file/upload/studentcard/" . $row2['student_name'] . "' class='img-thumbnail'
                    style='box-shadow:rgba(0, 0, 0, 0.35) 0px 5px 15px;width: 15rem;margin: 0% 5%;'>";
                      } ?>
                      <form action="phpimage.php" method="POST" enctype="multipart/form-data" class="mt-3">
                        <p style="float:left;">เปลี่ยนรูป : </p>
                        <div class="upload-btn-wrapper">
                          <button class="btn2">Choose image file</button>
                          <input type="file" name="changestudentcard" style="width: 145px;height: 45px;" required>
                        </div>
                        <div class="upload-btn-wrapper">
                          <button type="submit" name="changestudentcard" class="btn2">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                <?php } ?>
                <!-- สลีปโอนเงิน -->
                <div class="card mt-3">
                  <div class="cardbody" style="padding:2% 5%;">
                    <h5 class="card-title">หลักฐานการโอนเงิน</h5>
                    <?php $sql3 = $conn->query("SELECT * FROM tb_slip WHERE email='" . $_SESSION['email'] . "'");
                    foreach ($sql3 as $row3) {
                      echo "<img src='/tsb2024/file/upload/slip/" . $row3['slip_name'] . "' class='img-thumbnail'
                    style='box-shadow:rgba(0, 0, 0, 0.35) 0px 5px 15px;width: 20rem;margin: 2% 5%;'>";
                    } ?>
                  </div>
                  <form action="phpimage.php" method="POST" enctype="multipart/form-data" style="margin-left:5%;">
                    <p style="float:left;">อัพโหลดสลีปเพิ่ม : </p>
                    <div class="upload-btn-wrapper">
                      <button class="btn2">Choose image file</button>
                      <input type="file" name="moreslip" style="width: 145px;height: 45px;" required>
                    </div>
                    <div class="upload-btn-wrapper">
                      <button type="submit" name="add" class="btn2">Submit</button>
                    </div>
                  </form>
                </div>
                <?php if ($row['approve'] == "disapprove") { ?>
                  <div class="card mt-3" style="background-color: rgb(255 122 1 / 20%);padding: 2%;">
                    <div class="card-body">
                      <form action="request.php?userid=<?php echo $row['user_id']; ?>" method="POST">
                        <div class="form-outline mb-2 mt-3">
                          <label class="form-label">
                            <h5>ยืนยันการส่งข้อมูล ให้เจ้าหน้าที่พิจารณาอีกครั้ง
                              <br>Please Input Password to Confirm :
                            </h5>
                          </label>
                          <input type="password" class="form-control" name="password" required />
                        </div>
                        <div class="text-end">
                          <button type="submit" class="btn btn-l mt-2 text-white" name="request">Request</button>
                        </div>
                      </form>
                    </div>
                  </div>
                <?php } ?>
              </div>

              <div class="col-sm-4">
                <!-- ข้อมูลทั่วไป -->
                <div class="card mtop-3 bgorange">
                  <div class="cardbody" style="padding:2% 5%;">

                    <h4>
                      <?php echo $row['title'] . $row['firstname'] . " " . $row['lastname'] . "<br>"; ?>
                    </h4>
                    <h6>
                      <?php
                      echo $row['career'] . " from " . $row['company'] . $row['country'] . "<br>fax : " . $row['fax'] . "<br>Tel. : " . $row['telephone'] . "<br>Name and address for payment receipt
                      (ชื่อและที่อยู่ในใบเสร็จสำหรับเบิก) : " . $row['receipt'];
                      ?>
                    </h6>
                  </div>
                </div>
                <!-- ข้อมูลอาหาร -->
                <div class="card mt-3 bgorange">
                  <div class="cardbody" style="padding:2% 5%;">
                    <h4>
                      Food
                    </h4>
                    <h6>
                      <?php
                      echo $row['extrameal'] . "<br>Food allergy and intolerance : " . $row['food'] . "<br>";
                      ?>
                    </h6>
                  </div>
                </div>
                <!-- ข้อมูลติดต่อ -->
                <div class="card mt-3 bgorange">
                  <div class="cardbody" style="padding:2% 5%;">
                    <h4>Contact Us</h4>
                    <h6>Email : <i class="bi bi-envelope"></i>xxx@gmail.com</h6>
                    <h6>Tel. : <i class="bi bi-telephone"></i>098-7654321</h6>
                  </div>
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
  <?php }
} else {
  header("refresh: 1; url= /tsb2024/auth/register.php");
} ?>