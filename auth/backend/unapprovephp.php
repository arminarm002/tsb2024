<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/connectdb.php');

$pass = $_POST['password'];
$id = $_GET['userid'];

if ($_SESSION['role'] == "thaiphysic") {
  $sql = $conn->query("SELECT * FROM tb_user WHERE email='" . $_SESSION['email'] . "'");
  foreach ($sql as $row) {
    $thupass = $row['password'];
    $password = password_verify($pass, $thupass);
    if ($password) {
      $qry = $conn->query("UPDATE tb_user SET approve='approve' WHERE user_id = '" . $id . "'");
      date_default_timezone_set('Asia/Bangkok');
      $date = date("Ymd");
      $nameby = $_SESSION['title'].$_SESSION['firstname']." ".$_SESSION['lastname'];
      $insert = $conn->query("INSERT INTO tb_approve (ap_date, ap_by, user_id) VALUES ('$date', '$nameby', '$id')");
      echo '<script language="javascript">';
      echo 'alert("Successfull.")';
      echo '</script>';
      header("refresh: 1; url=thaiphysic.php");
    } else {
      echo '<script language="javascript">';
      echo 'alert("Password Invalid")';
      echo '</script>';
      header("refresh: 1; url=detail.php");
    }
  }
}
?>