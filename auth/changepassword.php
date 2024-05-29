<?php
include($_SERVER['DOCUMENT_ROOT'] . '/connectdb.php');
session_start();
if (isset($_POST['change'])) {
  $oldpassword = $_POST["password"];
  $password = $_POST["newpassword"];
  $repassword = $_POST["repassword"];

  if ($password != $repassword)
    die("<script>
    			alert('New Password is not same');
    			history.back();
    		 </script>");

  $sql = $conn->query("SELECT * FROM tb_user WHERE email='" . $_SESSION['email'] . "'");

  if ($sql->num_rows > 0) {
    foreach ($sql as $row) {
      $oldpass = $row['password'];
    }
    // ตรวจสอบว่าพาสเวิดเก่าที่กรอกมา กับ พาสเวิดเก่าใน DB ตรงกันไหม
    $check = password_verify($oldpassword, $oldpass);
    if ($check) {
      $passwordok = password_hash($password, PASSWORD_DEFAULT);

      $result = $conn->query("UPDATE tb_user SET password='$passwordok' WHERE email='" . $_SESSION['email'] . "' ");
      mysqli_close($conn);
      if ($result) {
        echo '<script language="javascript">';
        echo 'alert("Successfully Change Password")';
        echo '</script>';
        header("refresh: 1; url=logout.php");
      } else {
        echo '<script language="javascript">';
        echo 'alert("Somthing Wrong!!!")';
        echo '</script>';
        header("refresh: 1; url=changepass.php");
      }
    } else {
      echo '<script language="javascript">';
        echo 'alert("Old Password Incorrect")';
        echo '</script>';
        header("refresh: 1; url=changepass.php");
    }
  }
}
?>