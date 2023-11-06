<?php
include($_SERVER['DOCUMENT_ROOT'] . '/SPC2024/connectdb.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration</title>
  <link rel="stylesheet" href="/spc2024/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/spc2024/theme/css/self.css">

</head>

<body class="font-mitr">
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/navbar.php');
  ?>
  <div class="container mt-3">
    <div class="card" style="margin: 0px auto;">
      <div class="card-header bg-l text-white text-center">
        <h5>
          Register
        </h5>
      </div>
      <div class="card-body" style="margin: 0px 10%;">
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
              <div class="row">
                <div class="col-4">
                  <label class="form-label" for="title">Title ( Mr., Mrs, Ms, Dr., Assist.Prof., Assoc.Prof., Prof. )
                    :</label>
                </div>
                <div class="col-8">
                  <div class="dropdown">
                    <select class="btn btn-secondary dropdown-toggle border" type="button" id="dropdownMenuButton1"
                      data-bs-toggle="dropdown" name="title">
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
              <input type="text" id="company" name="company" class="form-control" />
            </div>

            <!-- Career input -->
            <div class="form-outline mb-2">
              <label class="form-label" for="career">Career/Position :</label>
              <input type="text" id="career" name="career" class="form-control" />
            </div>

            <!-- Address input -->
            <div class="form-outline mb-2">
              <label class="form-label" for="address">Contact Address :</label>
              <input type="text" id="address" name="address" class="form-control" />
            </div>

            <!-- Country input -->
            <div class="form-outline mb-2">
              <label class="form-label" for="country">Country :</label>
              <input type="text" id="country" name="country" class="form-control" />
            </div>

            <!-- Telephone input -->
            <div class="form-outline mb-2">
              <label class="form-label" for="tel">Telephone :</label>
              <input type="text" id="tel" name="tel" class="form-control" />
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
                <input class="form-check-input" type="radio" name="meal" value="general food">
                <label class="form-check-label" for="meal1">
                  General food
                </label>
              </div>
              <div class="form-check" style="margin-left: 30px;">
                <input class="form-check-input" type="radio" name="meal" value="Muslim food">
                <label class="form-check-label" for="meal2">
                  Muslim food
                </label>
              </div>
              <div class="form-check" style="margin-left: 30px;">
                <input class="form-check-input" type="radio" name="meal" value="Vegetarian Food">
                <label class="form-check-label" for="meal3">
                  Vegetarian Food
                </label>
              </div>
              <div class="row" style="margin-left:2.7rem;">
                <div class="col-2">

                  <label>Food allergy and intolerance : </label>
                </div>
                <div class="col-10">
                  <input type="text" id="food" name="food" class="form-control" />
                </div>
              </div>

            </div>

            <!-- Type input -->
            <div class="form-outline mb-2">
              <label class="form-label">Type :</label>
              <div class="form-check" style="margin-left: 30px;">
                <input class="form-check-input" type="radio" name="type" value="Thai Physics Society Committee">
                <label class="form-check-label" for="type1">
                  Thai Physics Society Committee
                </label>
              </div>
              <div class="form-check" style="margin-left: 30px;">
                <input class="form-check-input" type="radio" name="type" value="Invited Speaker">
                <label class="form-check-label" for="type2">
                  Invited Speaker
                </label>
              </div>
              <div class="form-check" style="margin-left: 30px;">
                <input class="form-check-input" type="radio" name="type" value="Oral Presenter">
                <label class="form-check-label" for="type3">
                  Oral Presenter
                </label>
              </div>
              <div class="form-check" style="margin-left: 30px;">
                <input class="form-check-input" type="radio" name="type" value="Poster Presenter">
                <label class="form-check-label" for="type4">
                  Poster Presenter
                </label>
              </div>
              <div class="form-check" style="margin-left: 30px;">
                <input class="form-check-input" type="radio" name="type" value="Participant">
                <label class="form-check-label" for="type5">
                  Participant
                </label>
              </div>
              <div class="form-check" style="margin-left: 30px;">
                <input class="form-check-input" type="radio" name="type" value="Accompany Person">
                <label class="form-check-label" for="type6">
                  Accompany Person
                </label>
              </div>
            </div>

            <!-- Address Receipt input -->
            <div class="form-outline mb-2">
              <label class="form-label" for="receipt">Name and address for payment
                receipt<br>(ชื่อและที่อยู่ในใบเสร็จสำหรับเบิก) :</label>
              <input type="text" id="receipt" name="receipt" class="form-control" />
            </div>

            <!-- Fee input -->
            <div class="form-outline mb-2">
              <table class="table table-active table-bordered border-danger">
                <thead style="text-align: center;">
                  <tr>
                    <td class="fs-24" colspan="3">REGISTRATION FEE FOR SPC2024</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="fs-22">Registration types</td>
                    <td class="fs-22">EARLY-BIRD Before 5 May 2024</td>
                    <td class="fs-22">After 5 May 2024</td>
                  </tr>
                  <?php
                  $sql = $conn->query("SELECT * FROM tb_pay");
                  foreach ($sql as $row) {
                    $i=0;
                    $cal=[];
                    // $name = $row['type'];
                    ?>
                    <tr>
                      <td>
                        <?php echo $row['type']; ?>
                      </td>
                      <td>
                        <input class="form-check-input" type="radio" name="fee" value="<?php echo $row['type'].$row['b_amount']; ?>" onchange="openamount(this.value)">
                        <label class="form-check-label" for="fee1"><?php 
                        echo $row['b_amount'];
                        $cal[$i]=$row['b_amount']; 
                        ?></label>
                      </td>
                      <td>
                        <input class="form-check-input" type="radio" name="fee" value="<?php echo $row['type'].$row['a_amount']; ?>" disabled>
                        <label class="form-check-label" for="fee2"><?php echo $row['a_amount']; ?></label>
                      </td>
                      </td>
                    </tr>
                    <?php
                  $i++;}
                  ?>
                  <tr id="myDiv" style="display:none;">
                    <td colspan="3">
                      <span class="centerer">
                          จำนวน Abstract ที่ต้องการส่ง <input type="number" id="amount" name="amonut" value=""> เรื่อง
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
                <br>
                <br>** Payment can be made after registration.
              </p>
            </div>

            <!-- Check input -->
            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" name="check" id="check" required>
              <label class="form-check-label" for="check">
                ACCEPT CONDITIONS AND CANCELLATION OF PAYMENT
              </label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-l btn-block mb-2" name="add">สมัครสมาชิก</button>

            <!-- Register buttons -->
            <div class="text-center">
              <p>Already member? <a href="login.php">Log in</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
  
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script.php');
  ?>
  <script>
    function openamount(val) {
      if (val == 'General audience5,000') {
        document.getElementById('myDiv').style.display = 'contents';
      } else if(val == 'Permanent Member of Thai Physics Society4,000'){
        document.getElementById('myDiv').style.display = 'contents';
      } else if(val == 'Non Member of Thai Physics Society *4,000'){
        document.getElementById('myDiv').style.display = 'contents';
      } else {
        document.getElementById('myDiv').style.display = 'none';
      }
    }
  </script>
    

    <script>
        const amount = document.getElementById('amount');
        const resultDiv = document.getElementById('result');

        amount.addEventListener('input', function() {
            const number = parseFloat(amount.value);
            if (!isNaN(number)) {
                // ทำการคำนวณหรือแสดงผลตามต้องการ
                resultDiv.textContent = ` : ${number * 2} `;
            } else {
                resultDiv.textContent = 'โปรดป้อนตัวเลขที่ถูกต้อง';
            }
        });
        var myDataFromPHP = "<?php echo $cal[$i]; ?>";
        console.log(myDataFromPHP);
    </script>
</body>

</html>