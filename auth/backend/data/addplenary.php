<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/connectdb.php');
if ($_SESSION['role'] != "superadmin") {
  header("refresh: 1; url= /tsb2024/auth/profile.php");
} else {
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link rel="stylesheet" href="/tsb2024/theme/css/bootstrap-theme.css">
    <link rel="stylesheet" href="/tsb2024/theme/css/self.css">

  </head>

  <body class="font-mitr">
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/navbar.php');
    ?>
    <div class="container mt-5">
      <div class="card" style="background-color: rgb(255 122 1 / 20%);box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <div class="card-header bg-l text-white text-center">
          <h5>
            Register
          </h5>
        </div>
        <div class="card-body" style="margin: 0px 10%;">
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
                        data-bs-toggle="dropdown" name="title" style="border-color:black;" required>
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
                  $sql = $conn->query("SELECT * FROM tb_meal");
                  foreach ($sql as $row) {
                    echo '<input class="form-check-input" type="radio" name="meal" value="' . htmlspecialchars($row['meal_name']) . '" required> ' . $row['meal_name'] . '<br>';
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
                    echo '<input class="form-check-input" type="radio" name="type" value="' . htmlspecialchars($row['type_name']) . '" required> ' . $row['type_name'] . '<br>';
                    ?>
                  <?php } ?>
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
                      <td colspan="3">
                        <h4>REGISTRATION FEE FOR tsb2024</h4>
                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <h6>Registration types</h6>
                      </td>
                      <td>
                        <h6>EARLY-BIRD Before 5 May 2024</h6>
                      </td>
                      <td>
                        <h6>After 5 May 2024</h6>
                      </td>
                    </tr>
                    <?php
                    $date_end = $conn->query("SELECT * FROM tb_setdate");
                    foreach ($date_end as $rowdate) {
                      $datepro = $rowdate['date_end'];
                    }
                    $datenows = date("Y-m-d");
                    if ($datenows > $datepro) {
                      $data1 = "disabled";
                      $data2 = "";
                    } else {
                      $data1 = "";
                      $data2 = "disabled";
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
                          <!-- <input type="text" id="b_pay" value="<?php echo $row['b_price']; ?>"> -->
                          <label class="form-check-label" for="fee">
                            <?php echo $row['b_amount']; ?>
                          </label>
                        </td>
                        <td>
                          <input class="form-check-input" type="radio" name="fee" value="<?php echo $row['id']; ?>" <?php echo $data2; ?> onchange="openamount(this.value)">
                          <!-- <input type="text" id="a_pay" value="<?php echo $row['a_price']; ?>"> -->
                          <label class="form-check-label" for="fee">
                            <?php echo $row['a_amount']; ?>
                          </label>
                        </td>
                        </td>
                      </tr>
                      <?php
                    }
                    ?>
                    <tr id="studencard" style="display:none;">
                      <td colspan="3">
                        <span class="centerer">
                          กรุณาแนบสำเนาบัตรนักศึกษา (Attach your student ID card.)
                          <input type="file" name="studencard">
                        </span>
                      </td>
                    </tr>
                    <tr></tr>
                    <tr id="myDiv" style="display:none;">
                      <td colspan="3">
                        <span class="centerer">
                          จำนวน Abstract ที่ต้องการส่ง
                          <input type="number" id="amount" name="amount" value="1"> เรื่อง
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="3">
                        <span class="centerer">จำนวนเงิน รวมทั้งสิ้น <div id="result"></div> บาท</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <label class="mb-3">Choose an money transfer slip to upload:</label>
                <input type="file" name="fileupload" required>

                <p class="bg-info" style="padding: 25px">
                  Payment
                  <br>Bank's full name : Krungthai Bank
                  <br>Bank's Swift Code : KRTHTHBK
                  <br>Bank account no : 549-0-25626-5
                  <br>Beneficiary name : THAI PHYSICS SOCIETY 2560
                  <br>
                  <br>บัญชี ธนาคารกรุงไทย สาขาถนนห้วยแก้ว
                  <br>ชื่อบัญชี สมาคมฟิสิกส์ไทย 2560
                  <br>เลขที่บัญชี 549-0-25626-5
                </p>
              </div>

              <p>* เลือกชำระแบบ Non Member of Thai Physics Society รับสิทธิพิเศษ ได้เป็นสมาชิก 1 ปี</p>
              <p>** นักเรียน/นักศึกษา ต้องแนบสำเนาบัตรประจำตัวนักเรียน/นักศึกษา</p>

              <!-- Check input -->
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="check" id="check" required>
                <label class="form-check-label" for="check">
                  ACCEPT CONDITIONS AND CANCELLATION OF PAYMENT
                </label>
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-l btn-block text-white mb-2" name="add">สมัครสมาชิก</button>

              <!-- Register buttons -->
              <div class="text-center">
                <p>Already member? <a href="login.php">Log in</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script>

    </script>
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/footer.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/script/script.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/script/messenger.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/script/calculate.php');
    ?>
  </body>

  </html>
<?php } ?>