<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SPC2024 KMITL</title>
  <link rel="stylesheet" href="/SPC2024/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/SPC2024/theme/css/self.css">
</head>

<body class="font-mitr">
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/navbar.php');
  ?>
  <div class="container mt-5">
    <div class="row" style="margin: 15% 0%;">
      <div class="col-6 centerer">
        <a href="register.php">
          <button type="button" class="btn btn-outline-primary">
            <p style="font-size:5vw;">Participant</p>
          </button>
        </a>
      </div>
      <div class="col-6 centerer">
        <a href="https://cmt3.research.microsoft.com/User/Login?ReturnUrl=%2F">
          <button type="button" class="btn btn-outline-info">
            <p style="font-size:5vw;">Presentater</p>
          </button>
        </a>
      </div>
    </div>
  </div>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script.php');
  ?>

</body>

</html>