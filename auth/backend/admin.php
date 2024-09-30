<?php
session_start();
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
      <link rel="stylesheet" href="/theme/css/bootstrap-theme.css">
      <link rel="stylesheet" href="/theme/css/self.css">
    </head>

    <body>
      <?php
      include($_SERVER['DOCUMENT_ROOT'] . '/components/navbar.php');

      $sql = $conn->query("SELECT * FROM tb_user WHERE approve = 'wait' AND role = 'user' ");
      $i = 0;
      foreach ($sql as $row) {
        $i++;
      } ?>

      <div class="container-fluid">
        <div class="row mt-3">
          <div class="col-sm-12 col-md-4 col-lg-3">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/sidebar.php'); ?>
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
                <a href="export-wait.php?act=export" class="btn btn-primary"> Export->Excel </a>
                <div class="table-responsive">
                  <table class="table table-striped strip">
                    <thead>
                      <tr style="text-align: center;">
                        <th>Key</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>E-mail</th>
                        <th>Telephone</th>
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
                        <tr style="text-align: center;">
                          <td>
                            <?php $getkey = $conn->query("SELECT * FROM tb_confirm WHERE email = '" . $tr['email'] . "' ");
                            foreach ($getkey as $showkey) {
                              echo $showkey['slip_name'];
                            } ?>
                          </td>
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
      include($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
      include($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');

      ?>

    </body>

    </html>
  <?php } else if ($_SESSION['role'] == "user") {
    header("refresh: 1; url= /auth/profile.php");
  }
} else {
  header("refresh: 1; url= /auth/register.php");
} ?>