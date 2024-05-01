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
          <h5>Participants in the TSB 2024 conference are encouraged to submit their work for publication. The topics of
            TSB 2024 are listed below.</h5>
          <p>
            1) Molecular and Medical Biotechnology<br>
            2) Industrial and Environmental Biotechnology<br>
            3) Food Technology and Food Engineering<br>
            4) Agricultural Biotechnology<br>
            5) Bioinformatics and Systems Biology<br>
            6) Biodiversity, Bioactive Compounds, and Applications
          </p>
          <h5>Note :</h5>
          <p>Please note that all oral and poster presenters must at least submit their abstract for consideration of
            publication in the program and abstract book of TSB 2024. Presenter’s name must be underlined on the first
            page of the abstract or the full paper.</p>
          <!-- <ul class="unlist">
            <li>The recommended length of the abstract is 250-300 words.</li>
            <li>One registration is allowed to submit only one abstract and one full paper.</li>
            <li>Each accepted abstract should make full registration payment by the deadline to have the abstract
              included in the abstract book.</li>
            <li>To comply with IOP's standard, all research works must have enough Physics (in terms of both quality to
              generate qualified new knowledge in Physics and Physics content to be greater than 50%). Plagiarism and
              self-plagiarism are not allowed.</li>
          </ul> -->

          <h5>Abstract submission</h5>
          <p>All abstracts must be submitted through <span class="red">online submission.</span> The deadline for
            abstract submission is July 15th, 2024. The abstract template can be downloaded from
            <a href="/tsb2024/file/download/TSB2024 full paper template.docx" class="btn btn-download"
              target="_blank">Here</a>
            <br>The content of the abstract must not exceed 200 words. Notification of abstract acceptance will be
            issued via E-mail during August 1st – 15th, 2024. All accepted abstracts will be published in the electronic
            program and abstract book.<br><u>Please note that all papers accepted for publication in the conference
              proceeding book must not be submitted to the journal of Current Applied Science and Technology for
              publication.</u>
          </p>
          <h5>Full paper submission for publication in the journal of Current Applied Science and Technology (CAST)</h5>
          <p>Participants who wish to submit their manuscript for consideration of publication in CAST must submit their
            abstract to TSB 2024 as indicated above. Upon abstract acceptance, the committee will issue a recommendation
            letter which must be submitted to CAST along with the participant’s manuscript. Participants must follow
            <span class="red">the
              journal’ s template and guidelines</span> for manuscript preparation as shown on the journal’s website.
            The
            submission is performed through <span class="red">the journal’s online submission
              system.</span><br><u>Please note that the
              publication of the participant’s paper depends upon the journal’s standard and consideration.
              Participation in TSB 2024 does not guarantee publication in CAST. Please also note that papers that are
              not accepted for publication in CAST will not be published in the proceeding book.</u></p>
        </div>
      </div>
    </div>
    <hr>

    <h1 class="card-title centerer">Journals & Publications</h1>
    <div class="row" style="margin: 15px auto;">
      <div class="col-12">
        <img src="/tsb2024/img/soon.png" style="width: 100%; height: auto;">
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