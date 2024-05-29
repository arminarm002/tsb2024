<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/connectdb.php');
if (isset($_SESSION['role'])) {
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="/theme/css/bootstrap-theme.css">
    <link rel="stylesheet" href="/theme/css/self.css">
  </head>

  <body>
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/components/navbar.php');

    $sql = $conn->query("SELECT * FROM tb_user INNER JOIN tb_pay 
    ON tb_user.pay_id = tb_pay.pay_id WHERE email='" . $_SESSION['email'] . "'");
    foreach ($sql as $row) { ?>

      <div class="container-fluid">
        <div class="row mt-3">
          <div class="col-sm-3 col-md-2">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/sidebar.php'); ?>
          </div>
          <div class="col">
            <div class="d-flex justify-content-center align-items-center">
              <div class="card mb-3"
                style="width:100%;background-color: rgb(255 122 1 / 20%);box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;align-items: center;">
                <div class="card-body">
                <h1 style="text-align:center;">Change Password</h1>
                  <form action="changepassword.php" class="mb-3" method="POST">
                    <div class="form-group mt-3">
                      <label for="oldpassword">Old Password :</label>
                      <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="newpassword">New Password :</label>
                      <input type="password" name="newpassword" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="repassword">Re-New Password :</label>
                      <input type="password" name="repassword" class="form-control" required>
                    </div>
                    <div class="text-end">
                      <button type="submit" class="btn btn-l mt-3 text-white" name="change">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div><!-- row ใหญ่ -->
      </div><!-- container-fluid -->

    <?php } ?>

    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');
    
    ?>

  </body>

  </html>
<?php } else {
  header("refresh: 1; url= /auth/register.php");
} ?>