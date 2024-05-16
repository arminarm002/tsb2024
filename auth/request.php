<?php
session_start();
include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/connectdb.php');

$pass = $_POST['password'];
$id = $_GET['userid'];
if (isset($_POST['request'])) {
  $sql = $conn->query("SELECT * FROM tb_user WHERE email='" . $_SESSION['email'] . "'");
  foreach ($sql as $row) {
    $thupass = $row['password'];
    $password = password_verify($pass, $thupass);
    if ($password) {
      $qry = $conn->query("UPDATE tb_user SET approve='wait' WHERE user_id = '" . $id . "'");
      if ($qry) {
        echo '<script language="javascript">';
        echo 'alert("Sent to Admin")';
        echo '</script>';
        header("refresh: 1; url=profile.php");
      } else {
        echo '<script language="javascript">';
        echo 'alert("Something Wrong!!!")';
        echo '</script>';
        header("refresh: 1; url=profile.php");
      }
    } else {
      echo '<script language="javascript">';
      echo 'alert("Password Invalid")';
      echo '</script>';
      header("refresh: 1; url=profile.php");
    }
  }
}
?>