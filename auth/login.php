<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link rel="stylesheet" href="/spc2024/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/spc2024/theme/css/self.css">
  
</head>

<body class="font-mitr">
  <?php
  include($_SERVER['DOCUMENT_ROOT'].'/spc2024/components/navbar.php');
  ?>
  <div class="container">
   

    <div class="d-flex justify-content-center align-items-center" style="height: 80vh;">
      <div class="card mb-3" style="width: 500px;">
        <div class="card-header bg-l text-white text-center">
          <h4>Login เข้าสู่ระบบ</h4>
        </div>
        <div class="card-body">
          <div class="mt-2">
            <img src="/spc2024/img/logo-b.png" alt="" style="display:table; margin: 0 auto; max-width:200px;">
          </div>
          <form action="#" class="mb-3" method="POST">
            <div class="form-group mt-5">
              <label for="email">Email :</label>
              <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="password">Password :</label>
              <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="text-end">
              <button type="submit" class="btn btn-l mt-2 text-white" name="check">Login</button>
            </div>
          </form>
          <a href="register.php"><button type="submit" class="btn btn-l text-white" style="float: right;">Register</button></a>
        </div>
      </div>
    </div>
  </div>
  <?php
  include($_SERVER['DOCUMENT_ROOT'].'/spc2024/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script.php');
  ?>
</body>

</html>