<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/connectdb.php');
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

<body class="font-concert">
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/navbar.php');
  ?>

  <div class="container">
    <h1 class="card-title centerer mt-3">Abstract Submission</h1>
    <div class="row" style="margin: 15px auto;">
      <div class="col-12">
        <div class="card border-0" style="color: #494949;">
          <h5>Abstract submission open : 1 February - 31 March 2024<br>Template for SPC 2024 abstract.
            <a href="/spc2024/file/download/spc2024-abstract-template.docx">Download File</a><br>Please do not modify
            the format
            and please convert to pdf. for submission.<br><br>Topic :
          </h5>
          <p>
            1) Physics Innovation & Education<br>
            2) Condensed Matters & Material Physics<br>
            3) Astronomy, Astrophysics & Cosmology<br>
            4) Accelerators & Synchrotron radiations<br>
            5) Mathematics, Computational & Numerical Physics<br>
            6) Quantum Physics & Technology<br>
            7) Optical Physics & Technology<br>
            8) Applied Physics & Technology<br>
            9) High Energy & Particles Physics<br>
          </p>
          <h5>Note :</h5>
          <ul class="unlist">
            <li>The recommended length of the abstract is 250-300 words.</li>
            <li>One registration is allowed to submit only one abstract and one full paper.</li>
            <li>Each accepted abstract should make full registration payment by the deadline to have the abstract
              included in the abstract book.</li>
            <li>To comply with IOP's standard, all research works must have enough Physics (in terms of both quality to
              generate qualified new knowledge in Physics and Physics content to be greater than 50%). Plagiarism and
              self-plagiarism are not allowed.</li>
          </ul>
          <h5><b>** Guidelines on submitting an abstract **</b></h5>
          <h5>Abstracts must be submitted using the MS CMT platform >>> <a
              href="https://cmt3.research.microsoft.com/User/Login?ReturnUrl=%2FSPC2024" target="_blank">Click</a></h5>
          <br>
          <h5>The outcome of the review will be emailed to the main author by 30 April 2024.</h5><br>
          <h5>Note, however, that any accepted abstracts will be cancelled if the presenting author has not registered
            and paid >>> <a href="/spc2024/auth/register.php" target="_blank">Click</a> the registration fee for the
            congress by 15 May 2024.
          </h5>
        </div>
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
            <b style="color:red">Conference E-Proceedings</b> will not be able to submit a full paper for publication in
            the journals.</>
          <h5>SPC2024 Publications</h5>
          <p>
            1. Journal of Physics: Conference Series (JPCS) – <b style="color:red">Scopus and SJR Indexed</b> (On
            process)<br>
            2. Current Applied Science and Technology - <b style="color:red">Scopus (Q3) SJR (Q4) Indexed </b><br>
            Journal Website : <a href="https://li01.tci-thaijo.org/index.php/cast" target="_blank">>>> Click <<< </a>
                <br>
                <br>
                <img class="border-bottom border-warning" src="/spc2024/img/journals2.jpg" style="width:100%; ">
                <br><br>
                3. Thai Journal of Nanoscience and Nanotechnology - <b style="color:red">TCI2 Indexed</b><br>
                Journal Website : <a href="https://ph05.tci-thaijo.org/index.php/TJNN/index" target="_blank">>>> Click
                  <<<</a><br>
                    <br>
                    <img class="border-bottom border-warning" src="/spc2024/img/journals3.jpg" style="width:100%; ">
                    <br><br>
          </p>
        </div>
      </div>
    </div>
  </div>

  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/script.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/messenger.php');
  ?>
</body>

</html>