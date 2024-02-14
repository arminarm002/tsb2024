<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/connectdb.php');
if ($_SESSION['role']) {
  if ($_SESSION['role'] == "thaiphysic") {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>SPC2024 KMITL</title>
      <link rel="stylesheet" href="/spc2024/theme/css/bootstrap-theme.css">
      <link rel="stylesheet" href="/spc2024/theme/css/self.css">
    </head>

    <body class="font-mitr">
      <?php
      include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/navbar.php');

      $sql = $conn->query("SELECT * FROM tb_user WHERE approve = 'wait' AND role = 'user' ");
      $i = 0;
      foreach ($sql as $row) {
        $i++;
      } ?>

      <div class="container-fluid">
        <div class="row mt-3">
          <div class="col-sm-12 col-md-4 col-lg-3">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/sidebar.php'); ?>
          </div>
          <div class="col-sm-12 col-md-8 col-lg-9">
            <?php if ($i != 0) { ?>
              <div class="alert alert-secondary" role="alert">
                มีข้อมูลที่ยังไม่ได้ตรวจสอบ จำนวน
                <?php echo $i; ?> ข้อมูล
              </div>
            <?php } else { ?>
              <div class="alert alert-success" role="alert">
                ตรวจสอบข้อมูลทั้งหมดแล้ว
              </div>
            <?php } ?>
            <div class="card">
              <div class="cardbody" style="padding:2% 5%;">
                <h2>
                  <?php
                  echo $_SESSION['title'] . $_SESSION['firstname'] . " " . $_SESSION['lastname'] . "<br>";
                  ?>
                </h2>
                <h2>รายชื่อผู้สมัคร รอการอนุมัติ</h2>
                <div class="table-responsive">
                  <table class="table table-striped strip">
                    <thead>
                      <tr style="text-align: center;">
                        <th>Name</th>
                        <th>Type</th>
                        <th>E-mail</th>
                        <th>Telephone</th>
                        <th>fax</th>
                        <th>extrameal</th>
                        <th>Evidence</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 0;
                      $sql2 = $conn->query("SELECT * FROM tb_user WHERE approve = 'wait' AND role = 'user' ");
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
                            <?php echo $tr['fax'] ?>
                          </td>
                          <td>
                            <?php echo $tr['extrameal'] ?>
                          </td>
                          <td>
                            <a class="btn btn-l text-white" href="detail.php?userid=<?php echo $tr['user_id']; ?>">Detail</a>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div><!-- row ใหญ่ -->
      </div><!-- container -->

      <?php
      include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/footer.php');
      include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/script.php');
      include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/messenger.php');
      ?>

    </body>

    </html>
  <?php } else if ($_SESSION['role'] == "user") {
    header("refresh: 1; url= /spc2024/auth/profile.php");
  } else if ($_SESSION['role'] == "admin") {
    header("refresh: 1; url= /spc2024/auth/backend/admin.php");
  }
} else {
  header("refresh: 1; url= /spc2024/auth/register.php");
} ?>