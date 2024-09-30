<?php
session_start();
if (isset($_GET['act'])) {
  if ($_GET['act'] == 'export') {
    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename=register-disapproved.xls");
    header("Pragma: no-cache");
    header("Expires: 0");
  }
}
include($_SERVER['DOCUMENT_ROOT'] . '/db/connectdb.php');
if (isset($_SESSION['role'])) {
  if ($_SESSION['role'] == "admin" || $_SESSION['role'] == "superadmin") {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Admin</title>
    </head>

    <body>
      <div class="container-fluid">
        <div class="row mt-3">
          <div class="card">
            <div class="cardbody" style="padding:2% 5%;">
              <h2>รายชื่อผู้สมัคร ไม่ผ่านการอนุมัติ</h2>
              <div class="table-responsive">
                <table class="table table-striped strip">
                  <thead>
                    <tr style="text-align: center;">
                      <th>Name</th>
                      <th>Type</th>
                      <th>E-mail</th>
                      <th>Telephone</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 0;
                    $sql2 = $conn->query("SELECT * FROM tb_user WHERE approve = 'disapprove' AND role = 'user' ");
                    foreach ($sql2 as $tr) {
                      $no++;
                      ?>
                      <tr style="text-align: center;">
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
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div><!-- row ใหญ่ -->
      </div><!-- container -->
    </body>

    </html>
  <?php } else if ($_SESSION['role'] == "user") {
    header("refresh: 1; url= /auth/profile.php");
  }
} else {
  header("refresh: 1; url= /auth/register.php");
} ?>