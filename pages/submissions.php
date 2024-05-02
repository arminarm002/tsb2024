<?php
session_start();
include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/connectdb.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TSB2024 KMITL</title>
  <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/tsb2024/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/tsb2024/theme/css/self.css">
</head>

<body class="font-concert">
  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/navbar.php');
  ?>

  <div class="container">
    <h1 class="card-title centerer mt-3">Abstract Submission</h1>
    <div class="row" style="margin: 15px auto;">
      <div class="col-12">
        <div class="card border-0" style="color: #494949;">
          <h5>Abstract submission open : 15 May - 15 July 2024
            <br>Template for tsb 2024 abstract.
            <a href="/tsb2024/file/download/full paper template.docx" class="btn btn-download">Download
              File</a><br>Please do not modify
            the format
            and please convert to pdf. for submission.<br><br>Topic :
          </h5>
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
            <li>The recommended length of the abstract is 250-300 words.</li>
            <li>One registration is allowed to submit only one abstract and one full paper.</li>
            <li>Each accepted abstract should make full registration payment by the deadline to have the abstract
              included in the abstract book.</li>
            <li>To comply with IOP's standard, all research works must have enough Biology (in terms of both quality to
              generate qualified new knowledge in Biology and Biology content to be greater than 50%).</li>
          </ul>
          <p>Plagiarism and self-plagiarism are not allowed.</p>

          <h4><b>** Guidelines on submitting an abstract **</b> >>> <a
              style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"
              href="/tsb2024/file/download/submission guidelines.docx" class="btn btn-download" target="_blank">Click</a>
          </h4>
        </div>
      </div>
      <hr>

      <h1 class="card-title centerer">Journals & Publications</h1>
      <div class="row" style="margin: 15px auto;">
        <div class="col-12">
          <div class="card border-0" style="color: #494949;">
            <h5>Journal Publication’s Important details</h5>
            <p>Each registrant can submit only ONE manuscript for publication consideration.
              Please select only ONE journal for your full-paper submission.
              The conference participants who choose to submit a full paper for publication in the
              <b style="color:red">Conference E-Proceedings</b> will not be able to submit a full paper for publication
              in
              the journals.
            </p>
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
              <img class="border-bottom border-warning w-25" src="/tsb2024/img/journals2.jpg"
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
              <img class="border-bottom border-warning w-25" src="/tsb2024/img/journals3.jpg"
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
              <img class="border-bottom border-warning w-25" src="/tsb2024/img/journals4.jpg"
                style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
            </p>
          </div>
        </div>
      </div>
    </div>

    <?php
    include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/footer.php');
    include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/script/script.php');
    include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/script/messenger.php');
    ?>
</body>

</html>