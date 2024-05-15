<?php
session_start();
include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/connectdb.php');
if ($_SESSION['role'] == "superadmin") {
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="/tsb2024/theme/css/bootstrap-theme.css">
    <link rel="stylesheet" href="/tsb2024/theme/css/self.css">
  </head>

  <body>
    <?php
    include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/navbar.php');

    $sql = $conn->query("SELECT * FROM tb_user INNER JOIN tb_pay 
    ON tb_user.pay_id = tb_pay.pay_id WHERE email='" . $_SESSION['email'] . "'");
    foreach ($sql as $row) { ?>

      <div class="container-fluid">
        <div class="row mt-3">
          <div class="col-sm-12 col-md-4 col-lg-3">
            <?php include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/sidebar.php'); ?>
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
                    <table class="table table-striped strip" style="--bs-table-bg: #ff7a0145;">
                      <thead>
                        <tr style="text-align: center;--bs-table-bg: #ff7a01;">
                          <th>Name</th>
                          <th>Type</th>
                          <th>E-mail</th>
                          <th>Role</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 0;
                        $sql2 = $conn->query("SELECT * FROM tb_user");
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
                              <?php echo $tr['role'] ?>
                              <form action="data/allupdate.php" method="POST">
                                <input type="text" name="id" style="display:none;" value="<?php echo $tr['user_id']; ?>">
                                <div class="dropdown">
                                  <select class="btn btn-secondary dropdown-toggle titlebut" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" name="role"
                                    style="border-color:white;color:black" required>
                                    <option value="<?php echo $tr['role']; ?>" selected disabled><?php echo $tr['role']; ?></option>
                                    <option value="user">User</option>
                                    <option value="admin">Admin</option>
                                    <option value="superadmin">Super Admin</option>
                                    <option value="thaibio">สมาคม TSB</option>
                                  </select>
                                </div>
                                <button type="submit" class="btn btn-download mt-2" name="userupdate">Update</button>
                              </form>
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
    include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/footer.php');
    include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/script/script.php');
    include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/script/messenger.php');
    ?>

  </body>

  </html>
<?php } else {
  header("refresh: 1; url= /tsb2024/auth/register.php");
} ?>