<?php
session_start();
if (isset($_SESSION['role']) && $_SESSION['role'] == "admin") {
  include($_SERVER['DOCUMENT_ROOT'] . '/db/connectdb.php');
  $id = $_GET['userid'];
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="stylesheet" href="/theme/css/bootstrap-theme.css">
    <link rel="stylesheet" href="/theme/css/self.css">
  </head>

  <body>
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/components/navbar.php');
    ?>
    <div class="container">
      <div class="card mt-3" style="box-shadow:rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <div class="card-body">
          <?php $sql = $conn->query("SELECT * FROM tb_user INNER JOIN tb_pay 
    ON tb_user.pay_id = tb_pay.pay_id WHERE user_id = '" . $id . "' ");
          foreach ($sql as $row) { ?>
            <h1>
              <?php
              echo $row['title'] . $row['firstname'] . " " . $row['lastname'] . "" . $row['kmitl'];
              ?>
            </h1>
            <h3>
              <?php
              echo $row['type'] . " - " . $row['pay_name'] . "<br>";
              echo "E-mail : " . $row['email'] . "<br>Telephone : " . $row['telephone'] . "<br>Fax : " . $row['fax'] . "<br><br>";
              ?>
            </h3>
            <h5>
              <?php
              // echo $row['career'] . " from " . $row['company'] . "<br>";
              // echo $row['address'] . " , " . $row['country'] . "<br>";
              // echo "Extrameal : <font class='gray'>" . $row['extrameal'] . "</font><br>";
              // echo "Food allergy and intolerance : <font class='gray'>" . $row['food'] . "</font><br>";
              echo "ชื่อในใบเสร็จสำหรับเบิก : <font class='gray'>" . $row['receipt_name'] . "</font><br>";
              echo "ที่อยู่ในใบเสร็จสำหรับเบิก : <font class='gray'>" . $row['receipt_address'] . "</font><br>";
              echo "เลขประจำตัวผู้เสียภาษี : <font class='gray'>" . $row['receipt_tax'] . "</font><br><br><br>";


              if ($row['pay_id'] == 1 || $row['pay_id'] == 2 || $row['pay_id'] == 3) {
                echo "ส่ง Abstract จำนวน " . $row['amount'] . " เรื่อง<br>Abstract Number : " . $row['abstract_number'] . "<br>รวมเป็นเงิน " . $row['total_price'] . " บาท<br>";
              } else {
                echo "ราคา " . $row['total_price'] . " บาท<br>";
              } ?>
            </h5>

            <!-- สลีปโอนเงิน -->
            <div class="card mt-5" style="box-shadow:rgba(0, 0, 0, 0.35) 0px 5px 15px;">
              <div class="cardbody" style="padding:2% 5%;">
                <h5 class="card-title">หลักฐานการโอนเงิน</h5>
                <?php $sql3 = $conn->query("SELECT * FROM tb_confirm WHERE email = '" . $row['email'] . "' ");
                foreach ($sql3 as $row3) {
                  echo "KEY : " . $row3['slip_name'];
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
                      <button id="dis3" type="button" class="btn btn-l mt-2 text-white"
                        onclick="addmessage2()">Disapprove</button>
                      <button id="dis4" type="submit" class="btn btn-l mt-2 text-white" name="disapprove"
                        style="display:none;">Disapprove</button>
                  <?php } else if ($row['approve'] == "disapprove") { ?>
                        <button type="submit" class="btn btn-l mt-2 text-white" name="approve">Approve</button>
                  <?php } ?>
                </div>
              </form>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>

    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');

    ?>
    <script type="text/javascript">
      function addmessage() {
        document.getElementById('add').style.display = 'contents';
        document.getElementById('dis1').style.display = 'none';
        document.getElementById('dis2').style.display = 'inline';
        document.getElementById('ap').style.display = 'none';
        document.getElementById('addinput').setAttribute('required', '');
      };
      function addmessage2() {
        document.getElementById('add').style.display = 'contents';
        document.getElementById('dis3').style.display = 'none';
        document.getElementById('dis4').style.display = 'inline';
        document.getElementById('addinput').setAttribute('required', '');
      };
    </script>
  </body>

  </html>
<?php } else {
  header("location: ../login.php");
} ?>