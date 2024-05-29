<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/connectdb.php');
if (isset($_SESSION['role'])) {
  header("refresh: 1; url=profile.php");
} else {
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgetpassword</title>
    <link rel="stylesheet" href="/theme/css/bootstrap-theme.css">
    <link rel="stylesheet" href="/theme/css/self.css">
  </head>
 
  <body>
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/components/navbar.php');
    ?>
    <div class="container">
        <div class="card mt-5" style="background-color: rgb(255 122 1 / 20%);box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
          <div class="cardbody" style="padding:2% 5%;">
          <h1 style="text-align:center;">Forget Password?</h1>
            <form action="forgetpassword2.php" method="POST">
              <div class="form-outline mb-2">
                <label class="form-label" for="email">Please Enter Your Email with Register.<br>Email Address :</label>
                <input type="email" class="form-control" name="user_forget" required />
              </div>
              <button type="submit" class="btn btn-l btn-block text-white mb-2" name="forgot">Send Request</button>
            </form>
          </div>
        </div>
    </div><!-- container -->

    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');
    
    ?>

  </body>

  </html>
<?php } ?>