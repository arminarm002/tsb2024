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
    <title>TSB2024 KMITL</title>
    <link rel="stylesheet" href="/tsb2024/theme/css/bootstrap-theme.css">
    <link rel="stylesheet" href="/tsb2024/theme/css/self.css">
  </head>

  <body>
    <?php include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/navbar.php'); ?>

    <div class="container-fluid">
      <div class="row mt-3">
        <div class="col-sm-12 col-md-4 col-lg-3">
          <?php include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/sidebar.php'); ?>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-9">
          <div class="card" style="background-color: rgb(255 122 1 / 20%);box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
            <div class="card-header bg-l text-white text-center">
              <h5>
                Add Poster
              </h5>
            </div>
            <form action="data/alladd.php" method="POST" enctype="multipart/form-data">
              <div class="card-body" style="margin: 0px 10%;">
                <div class="form-outline mb-2">
                  <div class="row">
                    <div class="col-3">
                      <label class="form-label" for="symposium">เลือกหัวข้อหลัก :
                      </label>
                    </div>
                    <div class="col-9">
                      <div class="dropdown">
                        <select class="btn btn-secondary dropdown-toggle titlebut" type="button" id="symposium"
                          data-bs-toggle="dropdown" name="symposium" style="border-color:black;" required>
                          <option value="" selected disabled>เลือก Symposium</option>
                          <option value="AAA">AAA</option>
                          <option value="BBB">BBB</option>
                          <option value="CCC">CCC</option>
                          <option value="DDD">DDD</option>
                          <option value="EEE">EEE</option>
                          <option value="FFF">FFF</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-2">
                  <div class="row">
                    <div class="col-3">
                      <label class="form-label" for="title">ประเภทของผู้บรรยาย :
                      </label>
                    </div>
                    <div class="col-9">
                      <div class="dropdown">
                        <select class="btn btn-secondary dropdown-toggle titlebut" type="button" id="dropdownMenuButton1"
                          data-bs-toggle="dropdown" name="title" style="border-color:black;" required>
                          <option value="" selected disabled>เลือกประเภทของผู้บรรยาย</option>
                          <option value="Plenary Talks">Plenary Talks</option>
                          <option value="Keynote Lectures">Keynote Lectures</option>
                          <option value="Invited Speakers">Invited Speakers</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Fullname input -->
                <div class="row">
                  <div class="col-3">
                    <div class="form-outline mb-2">
                      <label class="form-label" for="name" style="margin-right: 0.5rem;">ชื่อเต็มพร้อมคำนำหน้า :</label>
                    </div>
                  </div>
                  <div class="col-9">
                    <input type="text" id="name" name="name" class="form-control" required />
                  </div>
                </div>

                <!-- Affiliation input -->
                <div class="row">
                  <div class="col-3">
                    <div class="form-outline mb-2" style="display: -webkit-box;">
                      <label class="form-label" for="" style="margin-right: 0.5rem;">
                        ต้นสังกัด :</label>
                    </div>
                  </div>
                  <div class="col-9">
                    <input type="text" id="affiliation" name="affiliation" class="form-control" required />
                  </div>
                </div>

                <!-- Title input -->
                <div class="row mt-1">
                  <div class="col-3">
                    <div class="form-outline mb-2" style="display: -webkit-box;">
                      <label class="form-label" for="title" style="margin-right: 0.5rem;">หัวข้อที่พูด :</label>
                    </div>
                  </div>
                  <div class="col-9">
                    <textarea row="3" id="title" name="title" class="form-control" required></textarea>
                  </div>
                </div>

                <!-- Option input -->
                <div class="row mt-1">
                  <div class="col-3">
                    <div class="form-outline mb-2" style="display: -webkit-box;">
                      <label class="form-label" for="option" style="margin-right: 0.5rem;">เพิ่มเติม :</label>
                    </div>
                  </div>
                  <div class="col-9">
                    <textarea row="3" id="option" name="option" class="form-control" required></textarea>
                  </div>
                </div>

                <button type="submit" class="btn btn-l btn-block text-white mb-2" name="addposter">เพิ่ม</button>
            </form>
          </div>
        </div>
      </div>
    </div><!-- row ใหญ่ -->
    </div><!-- container -->

    <?php
    include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/footer.php');
    include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/script/script.php');
    ?>

  </body>

  </html>
<?php } else {
  header("refresh: 1; url= /tsb2024/auth/register.php");
} ?>