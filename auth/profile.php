<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/SPC2024/connectdb.php');
if (isset($_SESSION['role'])) {
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPC2024 KMITL</title>
    <link rel="stylesheet" href="/spc2024/theme/css/bootstrap-theme.css">
    <link rel="stylesheet" href="/spc2024/theme/css/self.css">
  </head>

  <body class="font-mitr">
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/navbar.php');
    ?>

    <?php
    echo $_SESSION['email'];
    echo $_SESSION['title'];
    echo $_SESSION['firstname'];
    echo $_SESSION['lastname'];
    echo $_SESSION['company'];
    echo $_SESSION['career'];
    echo $_SESSION['address'];
    echo $_SESSION['country'];
    echo $_SESSION['phone'];
    echo $_SESSION['fax'];
    echo $_SESSION['extrameal'];
    echo $_SESSION['type'];
    echo $_SESSION['slip'];
    ?>


    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/footer.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/script.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/messenger.php');
    ?>

  </body>

  </html>
<?php } else {
  header("refresh: 1; url= /spc2024/auth/register.php");
} ?>