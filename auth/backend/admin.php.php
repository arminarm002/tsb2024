<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/connectdb.php');
if ($_SESSION['role']=="user") {
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPC2024 KMITL</title>
    <link rel="stylesheet" href="/spc2024/theme/css/bootstrap-theme.css">
    <link rel="stylesheet" href="/spc2024/theme/css/self.css">
  </head>

  <body class="font-mitr">
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/navbar.php');

    $sql = $conn->query("SELECT * FROM tb_user INNER JOIN tb_pay 
    ON tb_user.pay_id = tb_pay.pay_id WHERE email='" . $_SESSION['email'] . "'");
    foreach ($sql as $row) { ?>

      <div class="container-fluid">
        <div class="row mt-3">
          <div class="col-sm-3 col-md-2">
            <div class="list-group" style="--bs-list-group-bg: rgb(255 122 1 / 20%);--bs-list-group-action-hover-bg: rgb(127 94 65 / 44%);">
              <a class="list-group-item list-group-item-action active" aria-current="true"
                style="background-color: #ff7a01;border-color: #813d00;">Profile</a>
              <a href="/spc2024/index.php" class="list-group-item list-group-item-action">Home</a>
              <a href="#" class="list-group-item list-group-item-action">Change Password</a>
            </div>
          </div>
          <div class="col">
            <div class="alert alert-secondary" role="alert">
              กรุณารอการยืนยันจากเจ้าหน้าที่
            </div>
            <!-- <div class="alert alert-success" role="alert">
              การลงทะเบียนของคุณ ได้รับการอนุมัติเรียบร้อย
            </div>
            <div class="alert alert-danger" role="alert">
              การลงทะเบียนของคุณ ไม่ผ่านการพิจารณา กรุณาติดต่อเจ้าหน้าที่
            </div> -->
            <div class="row">
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
              <div class="col-sm-4">
                <div class="card mtop-3">
                  <div class="cardbody" style="padding:2% 5%;">
                    <h5>
                      <?php
                      echo $row['title'] . $row['firstname'] . " " . $row['lastname'] . "<br>";
                      echo $row['career'] . " from " . $row['company'] . $row['country'] . "<br>fax : " . $row['fax'] . "<br>Tel. : " . $row['telephone'] . "<br>Name and address for payment receipt
                      (ชื่อและที่อยู่ในใบเสร็จสำหรับเบิก) : " . $row['receipt'];
                      ?>
                    </h5>
                  </div>
                </div>
                <div class="card mt-3">
                  <div class="cardbody" style="padding:2% 5%;">
                    <h5>
                      <?php
                      echo $row['extrameal'] . "<br>Food allergy and intolerance : " . $row['food'] . "<br>";
                      ?>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- row ใหญ่ -->
      </div><!-- container -->

    <?php } ?>

    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/footer.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/script.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/messenger.php');
    ?>

  </body>

  </html>
<?php } else {
  header("refresh: 1; url= /spc2024/auth/register.php");
} ?>