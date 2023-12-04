<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/connectdb.php');

$pass = $_POST['password'];
$id = $_GET['userid'];
if (isset($_POST['request'])) {
  $sql = $conn->query("SELECT * FROM tb_user WHERE email='" . $_SESSION['email'] . "'");
  foreach ($sql as $row) {
    $thupass = $row['password'];
    $password = password_verify($pass, $thupass);
    if ($password) {
      $qry = $conn->query("UPDATE tb_user SET approve='' WHERE user_id = '" . $id . "'");
      echo '<script language="javascript">';
      echo 'alert("Successfull.")';
      echo '</script>';
      header("refresh: 1; url=profile.php");
    } else {
      echo '<script language="javascript">';
      echo 'alert("Password Invalid")';
      echo '</script>';
      header("refresh: 1; url=profile.php");
    }
  }
}
?>