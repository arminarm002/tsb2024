<?php
session_start();
include ($_SERVER['DOCUMENT_ROOT'] . '/db/connectdb.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Abstract Submission</title>
  <link rel="stylesheet" href="/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/theme/css/self.css">
</head>

<body>
  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/components/navbar.php');
  ?>
  <a href="https://www.messenger.com/t/279532238569467/?messaging_source=source%3Apages%3Amessage_shortlink&source_id=1441792&recurring_notification=0"
    target="_blank">
    <img src="/../img/messenger.png" class="img-fluid messenger">
  </a>
  <div class="container">
    <h1 class="card-title centerer mt-3">Abstract Submission</h1>
    <h4 class="centerer mt-3">
      <span style="padding-top: 7px;">Submit your abstract using Microsoft CMT for TSB2024 conference >>> </span>&nbsp;
      <a href="https://cmt3.research.microsoft.com/User/Login?ReturnUrl=%2FTSB2024" class="btn btn-download"
        target="_blank">Click</a>
    </h4>
    <div class="row" style="margin: 15px auto;">
      <div class="col-12">
        <div class="card border-0" style="color: #494949;">
          <h5>Abstract submission open : 15 May - <span class="redmidline" style="color:#f78787">15 July 2024</span><span class="red"> 31 July 2024</span>
            <br>Abstract submission guideline and abstract template for TSB 2024
            <a href="https://drive.google.com/drive/folders/1zEyLq_Od_VRhBVpH18UmYWcYERRjaBpk?usp=sharing"
              class="btn btn-download" target="_blank">Download
              File</a><br>Please do not modify the format.<br>
          </h5>
          <h5>Topics : </h5>

          <p>
            A) Molecular and Medical Biotechnology<br>
            B) Industrial and Environmental Biotechnology<br>
            C) Food Technology and Food Engineering<br>
            D) Agricultural Biotechnology<br>
            E) Bioinformatics and Systems Biology<br>
            F) Biodiversity, Bioactive Compounds, and Applications
          </p>
          <h5>Note :</h5>
          <ul class="unlist">
            <li>The length of the abstract must not exceed 200 words.</li>
            <li>One registration is allowed to submit only one abstract and one full paper of the same title.</li>
            <li>Each accepted abstract must be accompanied by full registration payment by the August 16, 2024 for early
              bird registration or October 16, 2024 for late registration to ensure inclusion in the abstract book.</li>
          </ul>
          <p>Plagiarism and self-plagiarism are not allowed.</p>

        </div>
      </div>
      <hr>

      <h1 class="card-title centerer">Full paper submission</h1>
      <div class="row" style="margin: 15px auto;">
        <div class="col-12">
          <div class="card border-0" style="color: #494949;">
            <h5>Full paper submission open: May 15 – August 16 2024</h5>
            <h5>Full paper submission guideline and full paper template for TSB 2024 >>> <a
                href="https://drive.google.com/drive/folders/1zEyLq_Od_VRhBVpH18UmYWcYERRjaBpk?usp=sharing"
                class="btn btn-download" style="margin: 5px 0px 2px 0px;" target="_blank">Download File</a></h5>
            <h5>Please do not modify the format.</h5>
            <h5>Full Paper's Important Details</h5>
            <ul class="unlist">
              <li>Each registered participant is not allowed to submit more than one manuscript for publication
                consideration.</li>
              <li>Please choose only one type of publication for your manuscript. A manuscript submitted for publication
                in the electronic conference proceeding book is not allowed to be submitted to the journal of Current
                Applied Science and Technology or the Suan Sunandha Science and Technology Journal or the Thai Journal
                of Nanoscience and Nanotechnology and vice versa.</li>
              <li>Manuscripts rejected from publications in the journals will not be re-considered for publication in
                the electronic conference proceeding book.
              </li>
            </ul>
            <h5>TSB2024 Publications</h5>
            <p>
              1. Thai Society for Biotechnology and International Conference (TSB) Proceeding
            </p>
            <hr>
            <p>
              2. Current Applied Science and Technology - <b style="color:red">Scopus (Q3) SJR (Q4) Indexed </b><br>
              Journal Website : >>>
              <a style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" href="https://li01.tci-thaijo.org/index.php/cast"
                class="btn btn-warning" target="_blank"> Click </a>
              <br>
              <br>
              <img class="border-bottom border-warning w-25" src="/img/journals2.jpg"
                style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
            </p>
            <hr>
            <p>
              3. The Suan Sunandha Science and Technology Journal (SSSTJ) - <b style="color:red">TCI1 indexed</b><br>
              Journal Website : >>>
              <a style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"
                href="https://li02.tci-thaijo.org/index.php/ssstj" class="btn btn-warning" target="_blank"> Click
              </a><br>
              <br>
              <img class="border-bottom border-warning w-25" src="/img/journals3.jpg"
                style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
            </p>
            <hr>
            <p>
              4. The Thai Journal of Nanoscience and Nanotechnology (TJNN)- <b style="color:red">TCI2 indexed</b><br>
              Download Template : >>>
              <a style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"
                href="https://ph05.tci-thaijo.org/index.php/TJNN/index" class="btn btn-warning" target="_blank"> Click
              </a><br>
              <br>
              <img class="border-bottom border-warning w-25" src="/img/journals4.jpg"
                style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');
  ?>
</body>

</html>