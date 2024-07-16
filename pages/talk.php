<?php
session_start();
include ($_SERVER['DOCUMENT_ROOT'] . '/db/connectdb.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personnel Talks & Speakers</title>
  <link rel="stylesheet" href="/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/theme/css/self.css">
</head>

<body>
  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/components/navbar.php');
  ?>
<a href="https://www.messenger.com/t/279532238569467/?messaging_source=source%3Apages%3Amessage_shortlink&source_id=1441792&recurring_notification=0" target="_blank">
    <img src="/../img/messenger.png" class="img-fluid messenger">
  </a>
  <div class="container">
    <h1 class="card-title centerer mt-3">Speakers</h1>
    <h4 class="card-title centerer mt-3" style="padding-bottom: 25px;">****************</h4>
    <!-- *** Plenary Talks *** -->
    <h2 style="text-align: center;">Plenary Speakers</h2>
    <div class="row">
      <?php $speaker = $conn->query("SELECT * FROM tb_speaker WHERE sk_type='Plenary Talks'");
      if ($speaker->num_rows > 0) {
        foreach ($speaker as $sk) { ?>

          <div class="col-lg-12 col-md-6 col-sm-12" style="text-align: center;">
            <img src="../file/upload/speaker/<?php echo $sk['sk_img']; ?>" class="w-25" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;border-radius: 25px;">
            <h2 style="color:#df6a00"><?php echo $sk['sk_name']; ?></h2>
            <h5 style="color:#df6a00"><?php echo $sk['sk_position']; ?></h5>
            <h5 style="color:#df6a00"><b>Title : </b> <?php echo $sk['sk_title']; ?></h5>
            <p class="color-black" style="text-align:justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
              <?php echo $sk['sk_description']; ?>
            </p>

            <?php if (isset($_SESSION['role']) == "superadmin") { ?>
            <div style="display: -webkit-inline-box;">
              <form action="/auth/backend/personneltalk-update.php" method="POST" style="float:left;padding: 0px 20px;">
                <input type="text" name="id" class="form-control" style="display:none;" value="<?php echo $sk['id']; ?>">

                <button class="btn btn-update-logo" type="submit" name="update">
                  <box-icon type='solid' name='pencil'></box-icon>
                </button>
              </form>

              <form action="/auth/backend/data/alldelete.php" method="POST" style="float:left;padding: 0px 20px;">
                <input type="text" name="id" class="form-control" style="display:none;" value="<?php echo $sk['id']; ?>">

                <button class="btn btn-delete-logo" type="submit" name="deletespeaker"
                  onclick="return confirm('ยืนยันที่จะลบ ?')">
                  <box-icon type='solid' name='trash'></box-icon>
                </button>
              </form>
            </div>
            <?php } ?>

          </div>

        <?php }
      } else { ?>
        <img src="/img/soon.png" style="display:block; margin:auto; width:50%;">
      <?php } ?>
    </div>

    <hr>
    <!-- *** Keynote Speakers *** -->
    <h2 style="text-align: center;">Keynote Speakers</h2>
    <div class="row">

      <?php $speaker2 = $conn->query("SELECT * FROM tb_speaker INNER JOIN tb_symposium ON tb_speaker.sk_symposium = tb_symposium.symposium_id WHERE sk_type='Keynote Lectures'");
      if ($speaker2->num_rows > 0) {
        foreach ($speaker2 as $sk2) { ?>

          <div class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;">
            <br>
            <h5 style="color:#df6a00">Symposium : <?php echo $sk2['symposium_name']; ?></h4>
              <img src="../file/upload/speaker/<?php echo $sk2['sk_img']; ?>" class="w-50">
              <h6><?php echo $sk2['sk_name']; ?><br>
                <span style="font-size: 0.8rem;"><?php echo $sk2['sk_position']; ?>
                </span><br>Title : <?php echo $sk2['sk_title']; ?>
              </h6>

              <?php if (isset($_SESSION['role']) == "superadmin") { ?>
              <div style="display: -webkit-inline-box;">
                <form action="/auth/backend/personneltalk-update.php" method="POST" style="float:left;padding: 0px 20px;">
                  <input type="text" name="id" class="form-control" style="display:none;" value="<?php echo $sk2['id']; ?>">

                  <button class="btn btn-update-logo" type="submit" name="update">
                    <box-icon type='solid' name='pencil'></box-icon>
                  </button>
                </form>

                <form action="/auth/backend/data/alldelete.php" method="POST" style="float:left;padding: 0px 20px;">
                  <input type="text" name="id" class="form-control" style="display:none;" value="<?php echo $sk2['id']; ?>">

                  <button class="btn btn-delete-logo" type="submit" name="deletespeaker"
                    onclick="return confirm('ยืนยันที่จะลบ ?')">
                    <box-icon type='solid' name='trash'></box-icon>
                  </button>
                </form>
              </div>
              <?php } ?>
          </div>

        <?php }
      } else { ?>
        <img src="/img/soon.png" style="display:block; margin:auto; width:50%;">
      <?php } ?>
    </div>

    <hr>

    <!-- *** Invited Speakers *** -->
    <h2 style="text-align: center;">Invited Speakers</h2>
    <?php $speaker3 = $conn->query("SELECT * FROM tb_speaker WHERE sk_type='Invited Speakers'");
    if ($speaker3->num_rows > 0) {
      $symposium = $conn->query("SELECT * FROM tb_symposium");
      foreach ($symposium as $sym) { ?>
        <div class="row mt-3" style="background-color: #f6dab8;">
          <div class="col-lg-5 col-md-6 col-sm-6" style="margin: auto;">
            <h5 style="color:#df6a00">Symposium : <?php echo $sym['symposium_name']; ?></h4>
          </div>
          <div class="col-lg-7 col-md-6 col-sm-6">
            <div class="row mt-3" style="text-align: center;">

              <?php $invitespeaker = $conn->query("SELECT * FROM tb_speaker INNER JOIN tb_symposium ON tb_speaker.sk_symposium = tb_symposium.symposium_id WHERE sk_type='Invited Speakers' 
              AND symposium_id='" . $sym['symposium_id'] . "' ");
              foreach ($invitespeaker as $sk3) { ?>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <img src="../file/upload/speaker/<?php echo $sk3['sk_img']; ?>" class="w-50">
                  <h6><?php echo $sk3['sk_name']; ?><br>
                    <span style="font-size: 0.8rem;"><?php echo $sk3['sk_position']; ?>
                    </span><br>Title : <?php echo $sk3['sk_title']; ?>
                  </h6>

                  <?php if (isset($_SESSION['role']) == "superadmin") { ?>
                  <div style="display: -webkit-inline-box;">
                    <form action="/auth/backend/personneltalk-update.php" method="POST" style="float:left;padding: 0px 10px;">
                      <input type="text" name="id" class="form-control" style="display:none;"
                        value="<?php echo $sk3['id']; ?>">

                      <button class="btn btn-update-logo" type="submit" name="update">
                        <box-icon type='solid' name='pencil'></box-icon>
                      </button>
                    </form>

                    <form action="/auth/backend/data/alldelete.php" method="POST" style="float:left;padding: 0px 10px;">
                      <input type="text" name="id" class="form-control" style="display:none;"
                        value="<?php echo $sk3['id']; ?>">

                      <button class="btn btn-delete-logo" type="submit" name="deletespeaker"
                        onclick="return confirm('ยืนยันที่จะลบ ?')">
                        <box-icon type='solid' name='trash'></box-icon>
                      </button>
                    </form>
                  </div>
                  <?php } ?>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      <?php }
    } else {
      ?> <img src="/img/soon.png" style="display:block; margin:auto; width:50%;"> <?php
    } ?>

  </div>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');

  ?>
</body>

</html>