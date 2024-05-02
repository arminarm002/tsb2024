<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/connectdb.php');
if ($_SESSION['role'] == "admin") {
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPC2024 KMITL</title>
    <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wdth,wght@80,100..900&family=Open+Sans:ital,wdth,wght@0,75,300..800;1,75,300..800&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="/spc2024/theme/css/bootstrap-theme.css">
    <link rel="stylesheet" href="/spc2024/theme/css/self.css">
  </head>

  <body class="noto-sans-thai">
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/navbar.php');

    $sql = $conn->query("SELECT * FROM tb_user INNER JOIN tb_pay 
    ON tb_user.pay_id = tb_pay.pay_id WHERE email='" . $_SESSION['email'] . "'");
    foreach ($sql as $row) { ?>

      <div class="container-fluid">
        <div class="row mt-3">
          <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="list-group"
              style="--bs-list-group-bg: rgb(255 122 1 / 20%);--bs-list-group-action-hover-bg: rgb(127 94 65 / 44%);">
              <a class="list-group-item list-group-item-action active" aria-current="true"
                style="background-color: #ff7a01;border-color: #813d00;">Profile</a>
              <a href="/spc2024/index.php" class="list-group-item list-group-item-action">Home</a>
              <a href="/spc2024/auth/changepass.php" class="list-group-item list-group-item-action">Change Password</a>
            </div>
          </div>
          <div class="col-sm-12 col-md-8 col-lg-9">
            <div class="row">
              <div class="card">
                <div class="cardbody" style="padding:2% 5%;">
                  <h2>
                    <?php
                    echo $_SESSION['title'] . $_SESSION['firstname'] . " " . $_SESSION['lastname'] . "<br>";
                    ?>
                  </h2>
                  <h4>รายชื่อผู้สมัคร ทั้งหมด</h4>
                  <div class="table-responsive">
                    <table class="table table-striped strip">
                      <thead>
                        <tr style="text-align: center;">
                          <th>Name</th>
                          <th>Type</th>
                          <th>E-mail</th>
                          <th>Telephone</th>
                          <th>extrameal</th>
                          <th>Food allergy and intolerance</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 0;
                        $sql2 = $conn->query("SELECT * FROM tb_user WHERE role = 'user' ORDER BY approve");
                        foreach ($sql2 as $tr) {
                          $no++;
                          ?>
                          <tr>
                            <td>
                              <?php echo $tr['title'] . $tr['firstname'] . " " . $tr['lastname'] ?>
                            </td>
                            <td>
                              <?php echo $tr['type'] ?>
                            </td>
                            <td>
                              <?php echo $tr['email'] ?>
                            </td>
                            <td>
                              <?php echo $tr['telephone'] ?>
                            </td>
                            <td>
                              <?php echo $tr['extrameal'] ?>
                            </td>
                            <td>
                              <?php echo $tr['food'] ?>
                            </td>
                            <td>
                              <?php echo $tr['approve'] ?>
                            </td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
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