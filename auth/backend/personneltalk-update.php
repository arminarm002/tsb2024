<?php
session_start();
include ($_SERVER['DOCUMENT_ROOT'] . '/connectdb.php');
if ($_SESSION['role'] == "superadmin") {
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Speaker</title>
    <link rel="stylesheet" href="/theme/css/bootstrap-theme.css">
    <link rel="stylesheet" href="/theme/css/self.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  </head>

  <body>
    <?php include ($_SERVER['DOCUMENT_ROOT'] . '/components/navbar.php'); ?>
    <div class="container-fluid">
      <div class="row mt-3">
        <div class="col-sm-12 col-md-4 col-lg-3">
          <?php include ($_SERVER['DOCUMENT_ROOT'] . '/components/sidebar.php'); ?>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-9">
          <div class="card" style="background-color: rgb(255 122 1 / 20%);box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
            <div class="card-header bg-l text-white text-center">
              <h5>
                Add Speakers
              </h5>
            </div>
            <form action="data/alladd.php" method="POST" enctype="multipart/form-data">
              <?php 
              if (isset($_POST['update'])) {
                $id = $_POST['id'];
                $sql = $conn->query("SELECT * FROM tb_speaker WHERE id=$id");
                foreach ($sql as $row) { ?>
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
                              data-bs-toggle="dropdown" name="symposium" style="border-color:black;">
                              <option value="<?php echo $row['symposium_id'];?>" selected><?php echo $row['sk_symposium'];?></option>
                              <?php $symposium = $conn->query("SELECT * FROM tb_symposium");
                              foreach ($symposium as $rowsym) { ?>
                                <option value="<?php echo $rowsym['symposium_id']; ?>">
                                  <?php echo $rowsym['symposium_name']; ?>
                                </option>
                              <?php } ?>
                            </select>
                          </div>

                        </div>
                      </div>
                    </div>

                    <div class="form-outline mb-2">
                      <div class="row">
                        <div class="col-3">
                          <label class="form-label" for="type">ประเภทของผู้บรรยาย :
                          </label>
                        </div>
                        <div class="col-9">
                          <div class="dropdown">
                            <select class="btn btn-secondary dropdown-toggle titlebut" type="button" id="dropdownMenuButton1"
                              data-bs-toggle="dropdown" name="type" style="border-color:black;" required>
                              <option value="<?php echo $row['sk_type'];?>" selected disabled><?php echo $row['sk_type'];?></option>
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
                        <input type="text" id="name" name="name" class="form-control" value="<?php echo $row['sk_name'];?>" required />
                      </div>
                    </div>

                    <!-- Affiliation input -->
                    <div class="row">
                      <div class="col-3">
                        <div class="form-outline mb-2" style="display: -webkit-box;">
                          <label class="form-label" for="affiliation" style="margin-right: 0.5rem;">
                            ต้นสังกัด :</label>
                        </div>
                      </div>
                      <div class="col-9">
                        <input type="text" id="affiliation" name="affiliation" class="form-control" value="<?php echo $row['sk_position'];?>" required />
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
                        <textarea row="3" id="title" name="title" class="form-control" required><?php echo $row['sk_title'];?></textarea>
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
                        <textarea row="3" id="option" name="option" class="form-control"><?php echo $row['sk_description'];?></textarea>
                      </div>
                    </div>

                    <!-- Image input -->
                    <div class="row mt-1">
                      <div class="col-3">
                        <div class="form-outline mb-2" style="display: -webkit-box;">
                          <label class="form-label" for="file_upload" style="margin-right: 0.5rem;">รูปผู้บรรยาย :</label>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="form-outline mb-2" style="display: -webkit-box;">
                          <img class="w-100" src="../../file/upload/speaker/<?php echo $row['sk_img'];?>">
                        </div>
                      </div>
                      <div class="col-6">
                        <input type="file" name="file_upload" accept="image/jpeg, image/jpg, image/png" required>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-l btn-block text-white mb-2" name="updatespeakers">เพิ่ม</button>
                </form>
              </div>
            </div>
          </div>
        </div><!-- row ใหญ่ -->
        </div><!-- container -->
      <?php }
              } ?>


    <?php
    include ($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
    include ($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');
    ?>

  </body>

  </html>
<?php } else {
  header("refresh: 1; url= /auth/register.php");
} ?>