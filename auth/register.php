<?php
session_start();
include ($_SERVER['DOCUMENT_ROOT'] . '/db/connectdb.php');
if (isset($_SESSION['role'])) {
  header("refresh: 1; url= /auth/profile.php");
} else {
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrater</title>
    <link rel="stylesheet" href="/theme/css/bootstrap-theme.css">
    <link rel="stylesheet" href="/theme/css/self.css">
    <link rel="shortcut icon" href="#" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  </head>

  <body style="background-color: #01ff412e;">
    <?php
    include ($_SERVER['DOCUMENT_ROOT'] . '/components/navbar.php');
    ?>
    <a href="https://www.messenger.com/t/279532238569467/?messaging_source=source%3Apages%3Amessage_shortlink&source_id=1441792&recurring_notification=0"
      target="_blank">
      <img src="/../img/messenger.png" class="img-fluid messenger">
    </a>
    <div class="container mt-5">
      <div class="card" style="background-color: #006a71;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <div class="card-header text-white text-center" style="background-color:#ff5722">
          <h5>
            Register
          </h5>
        </div>
        <div class="card-body text-white" style="margin: 0px 10%;">
          <div class="row">
            <form action="authen.php" method="POST">
              <!-- Email input -->
              <div class="form-outline mb-2">
                <label class="form-label" for="email">Email Address :</label>
                <input type="email" id="email" class="form-control" name="email" required />
              </div>

              <!-- Password input -->
              <div class="form-outline mb-2">
                <label class="form-label" for="password">Password :</label>
                <input type="password" id="password" class="form-control" name="password" required />
              </div>

              <!-- Title input -->
              <div class="form-outline mb-2">
                <label class="form-label" for="title">Prefix</label>
                <div class="dropdown">
                  <select class="btn btn-secondary dropdown-toggle titlebut" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" name="title" style="border-color:white;color:black" required>
                    <option value="" selected disabled>Select Prefix</option>
                    <option value="Mr.">Mr.</option>
                    <option value="Ms.">Ms.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Dr.">Dr.</option>
                    <option value="Prof.">Prof.</option>
                    <option value="Asst. Prof.">Asst. Prof.</option>
                    <option value="Assoc. Prof.">Assoc. Prof.</option>
                    <option value="Asst. Prof. Dr.">Asst. Prof. Dr.</option>
                    <option value="Assoc. Prof. Dr.">Assoc. Prof. Dr.</option>
                    <option value="Prof. Dr.">Prof. Dr.</option>
                    <option value="Emeritus Professor">Emeritus Professor</option>
                  </select>
                </div>
              </div>

              <!-- Firstname input -->
              <div class="form-outline mb-2">
                <label class="form-label" for="name">Firstname :</label>
                <input type="text" id="name" name="name" class="form-control" required />
              </div>

              <!-- Lastname input -->
              <div class="form-outline mb-2">
                <label class="form-label" for="lastname">Lastname :</label>
                <input type="text" id="lastname" name="lastname" class="form-control" required />
              </div>

              <!-- Company input -->
              <div class="form-outline mb-2">
                <label class="form-label" for="company">Company/Organization :</label>
                <input type="text" id="company" name="company" class="form-control" required />
              </div>

              <!-- Career input -->
              <div class="form-outline mb-2">
                <label class="form-label" for="career">Career/Position :</label>
                <input type="text" id="career" name="career" class="form-control" required />
              </div>

              <!-- Address input -->
              <div class="form-outline mb-2">
                <label class="form-label" for="address">Contact Address :</label>
                <input type="text" id="address" name="address" class="form-control" required />
              </div>

              <!-- Country input -->
              <div class="form-outline mb-2">
                <label class="form-label" for="country">Country :</label>
                <input type="text" id="country" name="country" class="form-control" required />
              </div>

              <!-- Telephone input -->
              <div class="form-outline mb-2">
                <label class="form-label" for="tel">Telephone :</label>
                <input type="text" id="tel" name="tel" class="form-control" required />
              </div>

              <!-- Fax input -->
              <div class="form-outline mb-2">
                <label class="form-label" for="fax">Fax :</label>
                <input type="text" id="fax" name="fax" class="form-control" />
              </div>

              <!-- Food input -->
              <div class="form-outline mb-2">
                <label class="form-label">Dietary requirements :</label>
                <div class="form-check" style="margin-left: 30px;">
                  <?php
                  $sqlm = $conn->query("SELECT * FROM tb_meal");
                  foreach ($sqlm as $rowm) {
                    echo '<input class="form-check-input" type="checkbox" name="meal[]" value="' . htmlspecialchars($rowm['meal_name']) . '"> ' . $rowm['meal_name'] . '<br>';
                    ?>
                  <?php } ?>
                  <input id="allergy" class="form-check-input" type="checkbox" onclick="showdisplay()">Food allergy and intolerance
                  <input type="text" id="food" name="food" class="form-control" style="display:none;">
                </div>

              </div>

              <!-- Type input -->
              <div class="form-outline mb-2">
                <label class="form-label">Type :</label>
                <div class="form-check" style="margin-left: 30px;">
                  <?php
                  $sql = $conn->query("SELECT * FROM tb_type");
                  foreach ($sql as $row) {
                    echo '<input class="form-check-input" type="radio" name="type" value="' . htmlspecialchars($row['type_name']) . '" onchange="opennumber(this.value)" required> ' . $row['type_name'] . '<br>';
                  } ?>

                  <div class="form-check" id="inputabnum" style="display:none;">
                    <label class="form-label" style="color: #0606ab;" for="ab-number">Please Fill Your Abstract Number :
                      <br>If there is more than 1 abstract, separate them with " , " (comma)</label>
                    <input type="text" id="ab-number" name="ab-number" class="form-control">
                  </div>
                </div>

              </div>

              <!-- Address Receipt input -->
              <div class="form-outline">
                <label class="form-label" for="receipt">Name for payment receipt<br>(ชื่อสำหรับออกใบเสร็จ) :</label>
                <input type="text" id="receipt-name" name="receipt-name" class="form-control" required />
                <label class="form-label" for="receipt">Address for payment receipt<br>(ที่อยู่สำหรับออกใบเสร็จ) :</label>
                <input type="text" id="receipt-address" name="receipt-address" class="form-control" required />
                <label class="form-label" for="receipt">Taxpayer Identification No.<br>(เลขที่ผู้เสียภาษี) :</label>
                <input type="text" id="tax" name="receipt-tax" class="form-control" required />
              </div>

              <!-- KMITL input -->
              <div class="form-check mb-3 mt-5">
                <input class="form-check-input" type="checkbox" name="kmitl" value="(บุคลากร สจล.)">
                <label class="form-check-label" for="check">
                Select this option for KMITL personnel to receive registration fee exemptions for attending the TSB 2024  international academic conference . (เลือกช่องนี้สำหรับบุคลากรของ KMITL เพื่อรับการยกเว้นค่าลงทะเบียนในการเข้าร่วมงาน ประชุมวิชาการระดับนานาชาติ TSB2024)
                </label>
              </div>

              <!-- Fee input -->
              <div class="form-outline mb-2 mt-5 table-responsive">
                <table class="table table-active table-bordered border-danger"
                  style="--bs-table-bg: #bfebb3;    font-size: 1vw;">
                  <thead style="text-align: center;">
                    <tr>
                      <td colspan="4" class="regis-th">
                        <p style="margin:0px;">REGISTRATION FEE FOR TSB2024</p>
                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="regis-th">
                        <p>Registration types</p>
                      </td>
                      <td class="regis-th">
                        <p>Early bird Registration 16 - 30 August 2024</p>
                      </td>
                      <td class="regis-th">
                        <p>Regular Registration 31 August - 31 October 2024</p>
                      </td>
                      <td class="regis-th">
                        <p>Late Registration 1 November 2024</p>
                      </td>
                    </tr>
                    <?php
                    $datenows = date("Y-m-d");
                    $date1 = date('Y-m-d', strtotime("2024/05/15"));
                    $date2 = date('Y-m-d', strtotime("2024/08/31"));
                    $date3 = date('Y-m-d', strtotime("2024/11/1"));
                    $date4 = date('Y-m-d', strtotime("2024/11/02"));

                    if (($datenows >= $date1) && ($datenows < $date2)) {
                      $data1 = "";
                      $data2 = "disabled";
                      $data3 = "disabled";
                    } else if (($datenows >= $date2) && ($datenows < $date3)) {
                      $data1 = "disabled";
                      $data2 = "";
                      $data3 = "disabled";
                    } else if (($datenows >= $date3) && ($datenows < $date4)) {
                      $data1 = "disabled";
                      $data2 = "disabled";
                      $data3 = "";
                    } else {
                      $data1 = "disabled";
                      $data2 = "disabled";
                      $data3 = "disabled";
                    }

                    $sqlpay = $conn->query("SELECT * FROM tb_pay");
                    $data = $sqlpay->fetch_all();
                    foreach ($sqlpay as $row) {
                      ?>
                      <tr>
                        <td class="regis-td">
                          <?php echo $row['pay_name']; ?>
                        </td>
                        <td class="regis-td">
                          <input class="form-check-input" type="radio" name="fee" value="<?php echo $row['id']; ?>"
                            onchange="openamount(this.value)" required <?php echo $data1; ?>>
                          <!-- <input type="text" id="b_pay" value="<?php echo $row['a_price']; ?>"> -->
                          <label class="form-check-label" for="fee">
                            <?php echo $row['a_amount']; ?>
                          </label>
                        </td>
                        <td class="regis-td">
                          <input class="form-check-input" type="radio" name="fee" value="<?php echo $row['id']; ?>" <?php echo $data2; ?> onchange="openamount(this.value)">
                          <!-- <input type="text" id="a_pay" value="<?php echo $row['b_price']; ?>"> -->
                          <label class="form-check-label" for="fee">
                            <?php echo $row['b_amount']; ?>
                          </label>
                        </td>
                        <td class="regis-td">
                          <input class="form-check-input" type="radio" name="fee" value="<?php echo $row['id']; ?>" <?php echo $data3; ?> onchange="openamount(this.value)">
                          <!-- <input type="text" id="a_pay" value="<?php echo $row['c_price']; ?>"> -->
                          <label class="form-check-label" for="fee">
                            <?php echo $row['c_amount']; ?>
                          </label>
                        </td>
                      </tr>
                      <?php
                    }
                    ?>

                    <tr></tr>
                    <tr id="myDiv" style="display:none;">
                      <td class="regis-td" colspan="4">
                        <span class="centerer">
                          จำนวน Abstract ที่ต้องการส่ง
                          <input type="number" id="amount" name="amount" value="1"> เรื่อง
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="regis-td" colspan="4">
                        <span class="centerer">จำนวนเงิน รวมทั้งสิ้น <div id="result"></div> &nbsp;บาท</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <h5 style="padding: 25px;background-color:rgb(0 74 85)">
                Payment
                <br>
                <br>Bank's full name : Krungthai Bank
                <br>Bank's Swift Code : KRTHTHBK
                <br>Bank account no : 693-0-43369-1
                <br>Account name : School of Science KMITL
                <br>
                <br>บัญชี ธนาคารกรุงไทย สาขาเทคโนโลยีพระจอมเกล้าฯลาดกระบัง
                <br>ชื่อบัญชี คณะวิทยาศาสตร์ สจล.
                <br>เลขที่บัญชี 693-0-43369-1
              </h5>

              <!-- <p>* เลือกชำระแบบ Non Member of Thai Physics Society รับสิทธิพิเศษ ได้เป็นสมาชิก 1 ปี</p> -->
              <p>** นักเรียน/นักศึกษา ต้องแนบสำเนาบัตรประจำตัวนักเรียน/นักศึกษา</p>

              <!-- Check input -->
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" required>
                <label class="form-check-label" for="check">
                  ACCEPT CONDITIONS AND CANCELLATION OF PAYMENT
                </label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" required>
                <label class="form-check-label" for="check">
                After registration, please login and keep your registered key for using in the Payment Confirmation for Thai Society for Biotechnology 2024 Registration process
                </label>
              </div>

              <!-- Submit button -->
              <?php if ($datenows > $date4) {
                echo "หมดเวลาลงทะเบียน";
              } else { ?>
                <div class="text-end">
                  <div>
                    <div class="g-recaptcha" data-sitekey="6Lcnkj8qAAAAACNi8AQ1AV2SQcrVY7LR4wgzNENv"></div>
                  </div>
                  <button class="btn btn-download mt-2 but-sub" type="submit" name="register"
                    onclick="return confirm('Please check your information before registering. The name, address, and taxpayer identification number used for issuing receipts cannot be edited. (กรุณาตรวจสอบข้อมูลก่อนลงทะเบียน. ชื่อ ที่อยู่และเลขผู้เสียภาษีสำหรับออกใบเสร็จไม่สามารถแก้ไขได้)')">Submit</button>
                </div>
              <?php } ?>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script>
      function showdisplay() {
        // Get the checkbox
        var checkBox = document.getElementById("allergy");
        // Get the output text
        var text = document.getElementById("food");

        // If the checkbox is checked, display the output text
        if (checkBox.checked == true) {
          text.style.display = "block";
          document.getElementById('food').setAttribute('required', '');
        } else {
          text.style.display = "none";
          document.getElementById('food').removeAttribute('required', '');
        }
      }
    </script>
    

    <?php
    include ($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
    include ($_SERVER['DOCUMENT_ROOT'] . '/script/numberonly.php');
    include ($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');
    include ($_SERVER['DOCUMENT_ROOT'] . '/script/calculate.php');
    ?>
  </body>

  </html>
<?php } ?>