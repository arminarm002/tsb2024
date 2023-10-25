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
            <!-- Username input -->
            <div class="form-outline mb-2">
              <label class="form-label" for="username">username :</label>
              <input type="text" id="username" class="form-control" name="username" required />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-2">
              <label class="form-label" for="password">Password :</label>
              <input type="password" id="password" class="form-control" name="password" required />
            </div>

            <!-- Email input -->
            <div class="form-outline mb-2">
              <label class="form-label" for="email">Email Address :</label>
              <input type="email" id="email" class="form-control" name="email" required />
            </div>

            <!-- Title input -->
            <div class="form-outline mb-2">
              <label class="form-label" for="title">Title ( Mr., Mrs, Ms, Dr., Assist.Prof., Assoc.Prof., Prof. )
                :</label>
              <input type="title" id="title" class="form-control" name="title" required />
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
              <label class="form-label">Extra Meal :</label>
              <div class="form-check" style="margin-left: 30px;">
                <input class="form-check-input" type="radio" name="meal" value="general food">
                <label class="form-check-label" for="meal1">
                  general food
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
                    <td colspan="3">REGISTRATION FEE FOR SPC2024</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Registration types</td>
                    <td>EARLY-BIRD Before 5 May 2023</td>
                    <td>After 5 May 2023</td>
                  </tr>
                  <tr>
                    <td>General audience</td>
                    <td>
                      <input class="form-check-input" type="radio" name="fee" value="General audience 5,000 THB">
                      <label class="form-check-label" for="fee1">5,000 THB</label>
                    </td>
                    <td>
                      <input class="form-check-input" type="radio" name="fee" value="General audience 6,000 THB">
                      <label class="form-check-label" for="fee2">6,000 THB</label>
                    </td>
                  </tr>
                  <tr>
                    <td>Permanent Member of Thai Physics Society</td>
                    <td>
                      <input class="form-check-input" type="radio" name="fee" value="Permanent Member of Thai Physics Society 4,000 THB">
                      <label class="form-check-label" for="fee3">4,000 THB</label>
                    </td>
                    <td>
                      <input class="form-check-input" type="radio" name="fee" value="Permanent Member of Thai Physics Society 5,000 THB">
                      <label class="form-check-label" for="fee4">5,000 THB</label>
                    </td>
                  </tr>
                  <tr>
                    <td>Non Member of Thai Physics Society *</td>
                    <td>
                      <input class="form-check-input" type="radio" name="fee" value="Non Member of Thai Physics Society 4,000 THB">
                      <label class="form-check-label" for="fee5">4,000 THB</label>
                    </td>
                    <td>
                      <input class="form-check-input" type="radio" name="fee" value="Non Member of Thai Physics Society 5,000 THB">
                      <label class="form-check-label" for="fee6">5,000 THB</label>
                    </td>
                  </tr>
                  <tr>
                    <td>Student *</td>
                    <td>
                      <input class="form-check-input" type="radio" name="fee" value="Student 3,000 THB">
                      <label class="form-check-label" for="fee7">3,000 THB</label>
                    </td>
                    <td>
                      <input class="form-check-input" type="radio" name="fee" value="Student 4,000 THB">
                      <label class="form-check-label" for="fee8">4,000 THB</label>
                    </td>
                  </tr>
                  <tr>
                    <td>Accompany person</td>
                    <td>
                      <input class="form-check-input" type="radio" name="fee" value="Accompany person 3,000 THB">
                      <label class="form-check-label" for="fee9">3,000 THB</label>
                    </td>
                    <td>
                      <input class="form-check-input" type="radio" name="fee" value="Accompany person 4,000 THB">
                      <label class="form-check-label" for="fee10">4,000 THB</label>
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
</body>

</html>