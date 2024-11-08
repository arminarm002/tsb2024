<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/db/connectdb.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Organizer & Sponsors</title>
  <link rel="stylesheet" href="/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/theme/css/self.css">
</head>

<body>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/components/navbar.php');
  ?>
  <a href="https://www.messenger.com/t/279532238569467/?messaging_source=source%3Apages%3Amessage_shortlink&source_id=1441792&recurring_notification=0"
    target="_blank">
    <img src="/../img/messenger.png" class="img-fluid messenger">
  </a>
  <div class="container">
    <h1 class="card-title centerer mt-3 mb-3">Organizer</h1>
    <div class="blog-con">
      <div class="row">
        <?php
        $query = $conn->query("SELECT * FROM tb_logo WHERE lg_class='organizer'");
        foreach ($query as $row) { ?>
          <div class="col-lg-2 col-md-3 col-3" style="text-align: center;">
            <a href="<?php echo $row['lg_link'] ?>" target="_blank">
              <img src="/file/upload/logo/<?php echo $row['lg_image'] ?>" class="img-fluid w-75">
              <?php if (isset($_SESSION['role'])) {
                if ($_SESSION['role'] == "superadmin") { ?>

                  <form action="/auth/backend/logo-update.php" method="POST" style="float: left; margin-left: 30px;">
                    <input type="text" name="id" class="form-control" style="display:none;" value="<?php echo $row['id']; ?>">

                    <button class="btn btn-update-logo" type="submit" name="updatelogo">
                      <box-icon type='solid' name='pencil'></box-icon>
                    </button>
                  </form>

                  <form action="/auth/backend/data/alldelete.php" method="POST">
                    <input type="text" name="id" class="form-control" style="display:none;" value="<?php echo $row['id']; ?>">
                    <input type="text" name="oldname" class="form-control" style="display:none;"
                      value="<?php echo $row['lg_image']; ?>">

                    <button class="btn btn-delete-logo" type="submit" name="deletelogo"
                      onclick="return confirm('ยืนยันที่จะลบ ?')">
                      <box-icon type='solid' name='trash'></box-icon>
                    </button>
                  </form>
                <?php }
              } ?>
            </a>
          </div>
          <div class="col-lg-2 col-md-3 col-3" style="margin: auto 0px;">
            <a href="<?php echo $row['lg_link'] ?>" target="_blank" style="text-decoration: none;">
              <h6 class="abw resfont2" style="word-wrap: break-word;display: block;"><?php echo $row['lg_name']; ?></h6>
            </a>
          </div>
        <?php } ?>
      </div>
    </div>

    <hr>
    <h1 class="card-title centerer mt-3">Sponsors</h1>

    <h3 class="mt-3" style="text-align:center;color:#346f00;"><b>Platinum</b></h3>
    <div class="row">
      <div class="col-2"></div>
      <div class="col-2" style="text-align: center;">
        <a href="https://www.barascientific.com/product/" target="_blank">
          <img src="../img/sponsors/07.png" class="img-fluid w-75">

        </a>
      </div>
      <div class="col-2" style="margin: auto 0px;">
        <a href="https://www.barascientific.com/product/" target="_blank" style="text-decoration: none;">
          <h6 class="abw resfont2" style="word-wrap: break-word;display: block;">Bara Scientific Co., Ltd.</h6>
        </a>
      </div>
      <div class="col-2" style="text-align: center;">
        <a href="https://www.buchi.com" target="_blank">
          <img src="../img/sponsors/10.png" class="img-fluid w-75">

        </a>
      </div>
      <div class="col-2" style="margin: auto 0px;">
        <a href="https://www.buchi.com" target="_blank" style="text-decoration: none;">
          <h6 class="abw resfont2" style="word-wrap: break-word;display: block;">BUCHI (Thailand) Ltd.</h6>
        </a>
      </div>
      <div class="col-2"></div>
    </div>

    <!-- Gold Plus -->
    <h3 class="mt-3" style="text-align:center;color:#346f00;"><b>Gold Plus</b></h3>
    <div class="row">
      <div class="col-2"></div>
      <div class="col-2"></div>
      <div class="col-2" style="text-align: center;">
        <a href="https://www.official.co.th/" target="_blank">
          <img src="../img/sponsors/12.png" class="img-fluid w-75">

        </a>
      </div>
      <div class="col-2" style="margin: auto 0px;">
        <a href="https://www.official.co.th/" target="_blank" style="text-decoration: none;">
          <h6 class="abw resfont2" style="word-wrap: break-word;display: block;">Office Equipment Manufacturing</h6>
        </a>
      </div>
      <div class="col-2"></div>
      <div class="col-2"></div>
    </div>


    <!-- Gold -->
    <?php $class = $conn->query("SELECT * FROM tb_class_logo WHERE cl_name!='organizer'");
    foreach ($class as $rowclass) {

      $query2 = $conn->query("SELECT * FROM tb_logo WHERE lg_class='" . $rowclass['cl_name'] . "'");
      if ($query2->num_rows > 0) { ?>

        <div class="row">
          <h3 class="mt-3" style="text-align:center;color:#346f00;"><b><?php echo $rowclass['cl_name'] ?></b></h3>
          <?php
          foreach ($query2 as $row2) { ?>
            <div class="col-lg-2 col-md-3 col-3" style="text-align: center;">
              <a href="<?php echo $row2['lg_link'] ?>" target="_blank">
                <img src="/file/upload/logo/<?php echo $row2['lg_image'] ?>" class="img-fluid w-75">
                <?php if (isset($_SESSION['role'])) {
                  if ($_SESSION['role'] == "superadmin") { ?>

                    <form action="/auth/backend/logo-update.php" method="POST" style="float: left; margin-left: 30px;">
                      <input type="text" name="id" class="form-control" style="display:none;" value="<?php echo $row2['id']; ?>">

                      <button class="btn btn-update-logo" type="submit" name="updatelogo">
                        <box-icon type='solid' name='pencil'></box-icon>
                      </button>
                    </form>

                    <form action="/auth/backend/data/alldelete.php" method="POST">
                      <input type="text" name="id" class="form-control" style="display:none;" value="<?php echo $row2['id']; ?>">
                      <input type="text" name="oldname" class="form-control" style="display:none;"
                        value="<?php echo $row['lg_image']; ?>">

                      <button class="btn btn-delete-logo" type="submit" name="deletelogo"
                        onclick="return confirm('ยืนยันที่จะลบ ?')">
                        <box-icon type='solid' name='trash'></box-icon>
                      </button>
                    </form>
                  <?php }
                } ?>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3" style="margin: auto 0px;">
              <a href="<?php echo $row2['lg_link'] ?>" target="_blank" style="text-decoration: none;">
                <h6 class="abw resfont2" style="word-wrap: break-word;display: block;"><?php echo $row2['lg_name']; ?></h6>
              </a>
            </div>
          <?php } ?>
        </div>
        <hr>
      <?php }
    } ?>

  </div>

  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');
  ?>
</body>

</html>