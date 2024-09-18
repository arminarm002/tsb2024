<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/db/connectdb.php');
if ($_SESSION['role'] && $_SESSION['role'] == "superadmin") {
  header("refresh: 1; url= /auth/backend/superadmin.php");
} else if ($_SESSION['role'] && $_SESSION['role'] == "superadmin") {
  header("refresh: 1; url= /auth/backend/superadmin.php");
} else if ($_SESSION['role'] && $_SESSION['role'] == "user") {

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

      <body class="font-mitr">
      <?php
      include($_SERVER['DOCUMENT_ROOT'] . '/components/navbar.php');

      $sql = $conn->query("SELECT * FROM tb_user INNER JOIN tb_pay 
    ON tb_user.pay_id = tb_pay.pay_id WHERE email='" . $_SESSION['email'] . "'");
      foreach ($sql as $row) { ?>
          <a href="https://www.messenger.com/t/279532238569467/?messaging_source=source%3Apages%3Amessage_shortlink&source_id=1441792&recurring_notification=0"
            target="_blank">
            <img src="/../img/messenger.png" class="img-fluid messenger">
          </a>
          <div class="container-fluid">
            <div class="row mt-3">
              <div class="col-sm-3 col-md-2">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/sidebar.php'); ?>
              </div>
              <div class="col">
            <?php if ($row['approve'] == "wait") { ?>
                  <div class="alert alert-secondary" role="alert">
                    กรุณารอการยืนยันจากเจ้าหน้าที่ / Please wait for confirmation from officials.
                  </div>
            <?php } else if ($row['approve'] == "approve") { ?>
                    <div class="alert alert-success" role="alert">
                      การลงทะเบียนของคุณ ได้รับการอนุมัติเรียบร้อย / Your registration Has been approved
                    </div>
            <?php } else if ($row['approve'] == "disapprove") { ?>
                      <div class="alert alert-danger" role="alert">
                        การลงทะเบียนของคุณ ไม่ผ่านการอนุมัติ เนื่องจาก "
                <?php echo $row['message']; ?>" หากยืนยันว่าการลงทะเบียนของท่านถูกต้องครบถ้วน กรุณาติดต่อเจ้าหน้าที่ / Your registration not approved , If you confirm that your registration is correct and complete. Please contact the staff.
                      </div>
            <?php } ?>
                <div class="row">
                  <!-- ข้อมูลหลัก -->
                  <div class="col-sm-8">
                    <div class="card">
                      <div class="cardbody" style="padding:2% 5%;">
                        <h2>
                        <?php
                        echo $row['title'] . $row['firstname'] . " " . $row['lastname'] . "<br>";
                        ?>
                        </h2>
                        <h4>
                        <?php
                        echo $row['type'] . " - " . $row['pay_name'] . "<br>";

                        if ($row['pay_id'] == 1 || $row['pay_id'] == 2 || $row['pay_id'] == 3) {
                          echo "ส่ง Abstract จำนวน " . $row['amount'] . " เรื่อง<br>";
                          echo "Abstract Number : " . $row['abstract_number'] . "<br>";
                          echo "รวมเป็นเงิน " . $row['total_price'] . " บาท<br>";
                        } else if ($row['pay_id'] == 4 || $row['pay_id'] == 5) {
                          echo "ไม่ได้ส่ง Abstract <br> จำนวนเงิน " . $row['total_price'] . " บาท<br>";
                        }
                        ?>
                        </h4>
                      </div>
                    </div>
                    <!-- สลีปโอนเงิน --><!-- The Key -->
                    <div class="card mt-3">
                      <div class="cardbody" style="padding:2% 5%;">
                        <h5 class="card-title">ยื่นหลักฐานการโอนเงิน</h5>
                        <h5 class="card-title">"KEY" for Attach file :
                        <?php
                        $slipconfirm = $conn->query("SELECT * FROM tb_confirm WHERE email='" . $_SESSION['email'] . "'");
                        foreach ($slipconfirm as $split) {
                          echo $split['slip_name'];
                        } ?>
                        </h5>
                        <p>Go to Attach file >>> <a href="https://forms.gle/ewGzwCXbRcpvi4ZR8"
                            class="btn btn-warning submisspagebutton" target="_blank">Click</a></p>
                      </div>
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

                  <!-- ข้อมูลทั่วไป -->
                  <div class="col-sm-4">
                    <div class="card mtop-3 bgorange">
                      <div class="cardbody" style="padding:2% 5%;">

                        <h4>
                      <?php echo $row['title'] . $row['firstname'] . " " . $row['lastname'] . "<br>"; ?>
                        </h4>
                        <h6>
                        <?php
                        echo $row['career'] . " from " . $row['company'] . $row['country'] . "<br>fax : " . $row['fax'] . "<br>Tel. : " . $row['telephone'] . "<br>Name for payment receipt
                      (ชื่อในใบเสร็จสำหรับเบิก) : " . $row['receipt_name'] . "<br>Address for payment receipt
                      (ที่อยู่ในใบเสร็จสำหรับเบิก)" . $row['receipt_address'] . "<br>เลขที่ผู้เสียภาษี : " . $row['receipt_tax'];
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

    <?php } ?>

      <?php
      include($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
      include($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');
      ?>

      </body>

      </html>


<?php } else {
  header("refresh: 1; url= /auth/register.php");
} ?>