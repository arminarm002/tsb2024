<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/connectdb.php');
$id = $_GET['userid'];
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
  ?>
  <div class="container">
    <div class="card mt-3" style="box-shadow:rgba(0, 0, 0, 0.35) 0px 5px 15px;">
      <div class="card-body">
        <?php $sql = $conn->query("SELECT * FROM tb_user INNER JOIN tb_pay 
    ON tb_user.pay_id = tb_pay.pay_id WHERE user_id = '" . $id . "' ");
        foreach ($sql as $row) { ?>
          <h1>
            <?php
            echo $row['title'] . $row['firstname'] . " " . $row['lastname'];
            ?>
          </h1>
          <h3>
            <?php
            echo $row['type'] . "<br>";
            echo "E-mail : " . $row['email'] . "<br>Telephone : " . $row['telephone'] . "<br>Fax : " . $row['fax'] . "<br><br>";
            ?>
          </h3>
          <h5>
            <?php
            echo $row['career'] . " from " . $row['company'] . "<br>";
            echo $row['address'] . " , " . $row['country'] . "<br>";
            echo "Extrameal : " . $row['extrameal'] . " , Food allergy and intolerance : " . $row['food'] . "<br>";
            echo "Name and address for payment receipt (ชื่อและที่อยู่ในใบเสร็จสำหรับเบิก) : " . $row['receipt'];
            echo "<br><br>" . $row['pay_name'];
            if ($row['pay_id'] == 2 || $row['pay_id'] == 3 || $row['pay_id'] == 4) {
              echo " ส่ง Abstract จำนวน " . $row['amount'] . " เรื่อง<br>รวมเป็นเงิน " . $row['total_price'] . " บาท<br>";
            } else {
              echo "<br>ราคา " . $row['total_price'] . " บาท<br>";
            } ?>
          </h5>

          <!-- สำเนาบัตรนักเรียน / นักศึกษา -->
          <?php if ($row['pay_id'] == 4) { ?>
            <div class="card mt-3" style="box-shadow:rgba(0, 0, 0, 0.35) 0px 5px 15px;">
              <div class="cardbody" style="padding:2% 5%;">
                <h5 class="card-title">สำเนาบัตรนักเรียน</h5>
                <?php $sql2 = $conn->query("SELECT * FROM tb_student WHERE email = '" . $row['email'] . "' ");
                foreach ($sql2 as $row2) {
                  echo "<img src='/spc2024/file/upload/studentcard/" . $row2['student_name'] . "' class='img-thumbnail'
                    style='box-shadow:rgba(0, 0, 0, 0.35) 0px 5px 15px;width: 15rem;margin: 0% 5%;'>";
                } ?>
              </div>
            </div>
          <?php } ?>
          <!-- สลีปโอนเงิน -->
          <div class="card mt-5" style="box-shadow:rgba(0, 0, 0, 0.35) 0px 5px 15px;">
            <div class="cardbody" style="padding:2% 5%;">
              <h5 class="card-title">หลักฐานการโอนเงิน</h5>
              <?php $sql3 = $conn->query("SELECT * FROM tb_slip WHERE email = '" . $row['email'] . "' ");
              foreach ($sql3 as $row3) {
                echo "<img src='/spc2024/file/upload/slip/" . $row3['slip_name'] . "' class='img-thumbnail'
                    style='box-shadow:rgba(0, 0, 0, 0.35) 0px 5px 15px;width: 20rem;margin: 2% 5%;'>";
              } ?>
            </div>
          </div>

          <div class="mt-5" style="background-color: rgb(255 122 1 / 20%);padding: 2%;">
            <form action="approvephp.php?userid=<?php echo $row['user_id']; ?>" method="POST">
              <div id="add" class="form-outline mb-2" style="display:none;">
                <label class="form-label">
                  <h5>ในกรณี disapprove โปรดระบุสาเหตุเพื่อส่งข้อความถึงผู้สมัคร : </h5>
                </label>
                <input id="addinput" type="text" class="form-control" name="message" />
              </div>
              <div class="form-outline mb-2 mt-3">
                <label class="form-label">
                  <h5>Please Input Password to Confirm : </h5>
                </label>
                <input type="password" class="form-control" name="password" required />
              </div>
              <div class="text-end">
                <?php if ($row['approve'] == "wait") { ?>
                  <button id="dis1" type="button" class="btn btn-l mt-2 text-white"
                    onclick="addmessage()">Disapprove</button>
                  <button id="dis2" type="submit" class="btn btn-l mt-2 text-white" name="disapprove"
                    style="display:none;">Disapprove</button>
                  <button type="submit" class="btn btn-l mt-2 text-white" name="approve" id="ap">Approve</button>
                <?php } else if ($row['approve'] == "approve") { ?>
                    <button type="submit" class="btn btn-l mt-2 text-white" name="disapprove">Disapprove</button>
                <?php } else if ($row['approve'] == "disapprove") { ?>
                      <button type="submit" class="btn btn-l mt-2 text-white" name="disapprove">Approve</button>
                <?php } ?>
              </div>
            </form>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>

  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/script.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/messenger.php');
  ?>
  <script type="text/javascript">
    function addmessage() {
      document.getElementById('add').style.display = 'contents';
      document.getElementById('dis1').style.display = 'none';
      document.getElementById('dis2').style.display = 'inline';
      document.getElementById('ap').style.display = 'none';
      document.getElementById('addinput').setAttribute('required', '');
    };
  </script>
</body>

</html>