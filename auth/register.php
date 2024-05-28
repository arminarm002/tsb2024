<?php
session_start();
include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/connectdb.php');
if (isset($_SESSION['role'])) {
  header("refresh: 1; url= /tsb2024/auth/profile.php");
} else {
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrater</title>
    <link rel="stylesheet" href="/tsb2024/theme/css/bootstrap-theme.css">
    <link rel="stylesheet" href="/tsb2024/theme/css/self.css">

  </head>

  <body style="background-color: #01ff412e;">
    <?php
    include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/navbar.php');
    ?>
    <div class="container mt-5">
      <div class="card" style="background-color: #006a71;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <div class="card-header text-white text-center" style="background-color:#ff5722">
          <h5>
            Register
          </h5>
        </div>
        <div class="card-body text-white" style="margin: 0px 10%;">
          <div class="row">
            <form action="authen.php" method="POST" enctype="multipart/form-data">
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
                <div class="row">
                  <div class="col-4">
                    <label class="form-label" for="title">Title ( Mr., Mrs, Ms, Dr., Assist.Prof., Assoc.Prof., Prof. ) :
                    </label>
                  </div>
                  <div class="col-8">
                    <div class="dropdown">
                      <select class="btn btn-secondary dropdown-toggle titlebut" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" name="title" style="border-color:white;color:black" required>
                        <option value="" selected disabled>Title</option>
                        <option value="Mr.">Mr.</option>
                        <option value="Ms.">Ms.</option>
                        <option value="Emeritus Professor">Emeritus Professor</option>
                        <option value="Prof.">Prof.</option>
                        <option value="Assoc.Prof.">Assoc.Prof.</option>
                        <option value="Assist.Prof.">Assist.Prof.</option>
                        <option value="Dr.">Dr.</option>
                      </select>
                    </div>
                  </div>
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
                    echo '<input class="form-check-input" type="radio" name="meal" value="' . htmlspecialchars($rowm['meal_name']) . '" required> ' . $rowm['meal_name'] . '<br>';
                    ?>
                  <?php } ?>
                </div>
                <div class="row" style="margin-left:2.7rem;">
                  <div class="col-4">

                    <label>Food allergy and intolerance : </label>
                  </div>
                  <div class="col-8">
                    <input type="text" id="food" name="food" class="form-control" />
                  </div>
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
                    <label class="form-label red">Please Fill Your Abstract Number :</label>
                    <input type="text" id="ab-number" name="ab-number" class="form-control">
                  </div>
                </div>

              </div>

              <!-- Address Receipt input -->
              <div class="form-outline">
                <label class="form-label" for="receipt">Name and address for payment
                  receipt<br>(ชื่อและที่อยู่ในใบเสร็จสำหรับเบิก) :</label>
                <input type="text" id="receipt" name="receipt" class="form-control" required />
              </div>

              <!-- Fee input -->
              <div class="form-outline mb-2 mt-5">
                <table class="table table-active table-bordered border-danger">
                  <thead style="text-align: center;">
                    <tr>
                      <td colspan="4">
                        <h4>REGISTRATION FEE FOR SPC2024</h4>
                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <h6>Registration types</h6>
                      </td>
                      <td>
                        <h6>Early bird Registration 15 May - 15 August 2024</h6>
                      </td>
                      <td>
                        <h6>Regular Registration 16 August - 16 October 2024</h6>
                      </td>
                      <td>
                        <h6>Late Registration 17 October - 1 November 2024</h6>
                      </td>
                    </tr>
                    <?php
                    $datenows = date("Y-m-d");
                    $date1 = date('Y-m-d', strtotime("2024/05/15"));
                    $date2 = date('Y-m-d', strtotime("2024/08/16"));
                    $date3 = date('Y-m-d', strtotime("2024/10/17"));
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
                        <td>
                          <?php echo $row['pay_name']; ?>
                        </td>
                        <td>
                          <input class="form-check-input" type="radio" name="fee" value="<?php echo $row['id']; ?>"
                            onchange="openamount(this.value)" required <?php echo $data1; ?>>
                          <!-- <input type="text" id="b_pay" value="<?php echo $row['a_price']; ?>"> -->
                          <label class="form-check-label" for="fee">
                            <?php echo $row['a_amount']; ?>
                          </label>
                        </td>
                        <td>
                          <input class="form-check-input" type="radio" name="fee" value="<?php echo $row['id']; ?>" <?php echo $data2; ?> onchange="openamount(this.value)">
                          <!-- <input type="text" id="a_pay" value="<?php echo $row['b_price']; ?>"> -->
                          <label class="form-check-label" for="fee">
                            <?php echo $row['b_amount']; ?>
                          </label>
                        </td>
                        <td>
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
                    <tr id="studencard" style="display:none;">
                      <td colspan="4">
                        <span class="centerer">
                          กรุณาแนบสำเนาบัตรนักศึกษาเป็นไฟล์รูปภาพ ไม่ใช่ pdf (Attach your student ID card, Only png ,jpg
                          Not pdf)
                          <input type="file" name="studencard" accept="image/png, image/jpeg, image/jpg">
                        </span>
                      </td>
                    </tr>
                    <tr></tr>
                    <tr id="myDiv" style="display:none;">
                      <td colspan="4">
                        <span class="centerer">
                          จำนวน Abstract ที่ต้องการส่ง
                          <input type="number" id="amount" name="amount" value="1"> เรื่อง
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="4">
                        <span class="centerer">จำนวนเงิน รวมทั้งสิ้น <div id="result"></div> บาท</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <label class="mb-3">Choose an money transfer slip to upload (Only png ,jpg Not pdf)</label>
                <input type="file" name="fileupload" accept="image/png, image/jpeg, image/jpg" required>

                <!-- <p style="padding: 25px;background-color:rgb(0 74 85)">
                  Payment
                  <br>
                  <br>Bank's full name : Krungthai Bank
                  <br>Bank's Swift Code : KRTHTHBK
                  <br>Bank account no : 549-0-25626-5
                  <br>Beneficiary name : THAI PHYSICS SOCIETY 2560
                  <br>
                  <br>บัญชี ธนาคารกรุงไทย สาขาถนนห้วยแก้ว
                  <br>ชื่อบัญชี สมาคมฟิสิกส์ไทย 2560
                  <br>เลขที่บัญชี 549-0-25626-5
                </p> -->
              </div>

              <!-- <p>* เลือกชำระแบบ Non Member of Thai Physics Society รับสิทธิพิเศษ ได้เป็นสมาชิก 1 ปี</p> -->
              <p>** นักเรียน/นักศึกษา ต้องแนบสำเนาบัตรประจำตัวนักเรียน/นักศึกษา</p>

              <!-- Check input -->
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="check" id="check" required>
                <label class="form-check-label" for="check">
                  ACCEPT CONDITIONS AND CANCELLATION OF PAYMENT
                </label>
              </div>

              <!-- Submit button -->
              <?php if ($datenows > $date4) {
                echo "หมดเวลาลงทะเบียน";
              } else { ?>
                <div class="text-end">
                  <!-- <button type="submit" class="btn btn-download mt-2" name="register" style="width: 20rem;
    font-size: 25px;">Submit</button> -->
                </div>
              <?php } ?>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php
    include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/footer.php');
    include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/script/script.php');
    include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/script/calculate.php');
    ?>
  </body>
  </html>
<?php } ?>