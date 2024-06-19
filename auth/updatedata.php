<?php
session_start();
include ($_SERVER['DOCUMENT_ROOT'] . '/db/connectdb.php');
if ($_SESSION['role'] && $_SESSION['role'] == "user") {
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TSB2024 KMITL</title>
    <link rel="stylesheet" href="/theme/css/bootstrap-theme.css">
    <link rel="stylesheet" href="/theme/css/self.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  </head>

  <body class="font-mitr">
    <?php
    include ($_SERVER['DOCUMENT_ROOT'] . '/components/navbar.php');

    $sql = $conn->query("SELECT * FROM tb_user INNER JOIN tb_pay 
    ON tb_user.pay_id = tb_pay.pay_id WHERE email='" . $_SESSION['email'] . "'");
    foreach ($sql as $row) { ?>

      <div class="container-fluid">
        <div class="row mt-3">
          <div class="col-sm-3 col-md-2">
            <?php include ($_SERVER['DOCUMENT_ROOT'] . '/components/sidebar.php'); ?>
          </div>
          <div class="col">
            <div class="row">
              <div class="col-sm-8">
                <!-- ข้อมูลหลัก -->
                <div class="card">
                  <div class="cardbody" style="padding:2% 5%;">
                    <form action="authen.php" method="POST">

                      <!-- Title input -->
                      <div class="form-outline mb-2">
                        <label class="form-label" for="title">Prefix</label>
                        <div class="dropdown">
                          <select class="btn btn-secondary dropdown-toggle titlebut" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" name="title" style="border-color:#6da729;" required>
                            <option value="<?php echo $row['title']; ?>" selected><?php echo $row['title']; ?>
                            </option>
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
                      <div class="form-outline mt-4">
                        <label class="form-label" for="name">First name :</label>
                        <input type="text" id="name" name="name" class="form-control"
                          value="<?php echo $row['firstname']; ?>" required style="border-color:#6da729;" />
                      </div>

                      <!-- Lastname input -->
                      <div class="form-outline mt-4">
                        <label class="form-label" for="lastname">Last name :</label>
                        <input type="text" id="lastname" name="lastname" class="form-control"
                          value="<?php echo $row['lastname']; ?>" required style="border-color:#6da729;" />
                      </div>

                      <!-- Address input -->
                      <div class="form-outline mt-4">
                        <label class="form-label" for="address">Contact Address :</label>
                        <textarea rows="3" cols="" name="address" class="form-control" required
                          style="border-color:#6da729;"><?php echo $row['address']; ?></textarea>
                      </div>

                      <!-- Telephone input -->
                      <div class="form-outline mt-4">
                        <label class="form-label" for="tel">Telephone :</label>
                        <input type="text" id="tel" name="tel" class="form-control" value="<?php echo $row['telephone']; ?>"
                          required style="border-color:#6da729;" />
                      </div>

                      <!-- Fax input -->
                      <div class="form-outline mt-4">
                        <label class="form-label" for="fax">Fax :</label>
                        <input type="text" id="fax" name="fax" class="form-control" style="border-color:#6da729;"
                          value="<?php echo $row['fax']; ?>" />
                      </div>

                      <!-- Abstract Number -->
                      <?php if ($row['pay_id'] == 1 || $row['pay_id'] == 2 || $row['pay_id'] == 3) {
                        $data1 = "";
                      } else {
                        $data1 = "display:none;";
                      }
                      ?>
                      <div class="form-outline mt-4" style="<?php echo $data1; ?>">
                        <label class="form-label">Abstract Number <br>If there is more than 1 abstract, separate them with " , " (comma) :</label>
                        <input type="text" id="ab-number" name="ab-number" class="form-control"
                          style="border-color:#6da729;" value="<?php echo $row['abstract_number']; ?>" />
                      </div>

                      <!-- Address Receipt input -->
                      <div class="form-outline">
                        <label class="form-label mt-4" for="namepaymane">Name for payment receipt
                          (ชื่อสำหรับออกใบเสร็จ) :</label>
                        <input type="text" id="namepaymane" name="receipt_name" class="form-control"
                          value="<?php echo $row['receipt_name']; ?>" required style="border-color:#6da729;" />
                        <label class="form-label mt-4">Address for payment receipt (ที่อยู่สำหรับออกใบเสร็จ)
                          :</label>
                        <textarea rows="3" cols="" name="receipt_address" class="form-control" required
                          style="border-color:#6da729;"><?php echo $row['receipt_address']; ?></textarea>
                        <label class="form-label mt-4" for="tax">Taxpayer Identification No.
                          (เลขที่ผู้เสียภาษี) :</label>
                        <input type="text" id="tax" name="receipt_tax" class="form-control"
                          value="<?php echo $row['receipt_tax']; ?>" required style="border-color:#6da729;" />
                      </div>

                      <!-- Submit button -->
                      <button type="submit" class="btn btn-l btn-block text-white mb-2 mt-3"
                        name="updatedetail">Submit</button>
                    </form>
                  </div>
                </div>
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

    <?php } ?>

    <?php
    include ($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
    include ($_SERVER['DOCUMENT_ROOT'] . '/script/numberonly.php');
    include ($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');

    ?>

  </body>

  </html>

  <?php
} else {
  header("refresh: 1; url= /../index.php");
} ?>