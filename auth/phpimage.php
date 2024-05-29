<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/connectdb.php');

//Slipe
if (isset($_POST['add'])) {
  $email = $_SESSION['email'];
  $fileupload = (isset($_POST['moreslip']) ? $_POST['moreslip'] : '');
  //ฟังก์ชั่นวันที่
  date_default_timezone_set('Asia/Bangkok');
  $date = date("Ymd");
  //ฟังก์ชั่นสุ่มตัวเลข
  $numrand = (mt_rand());
  //เพิ่มไฟล์
  $upload = $_FILES['moreslip'];
  //โฟลเดอร์ที่จะ upload file เข้าไป 
  $path = "../file/upload/slip/";
  //เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
  $type = strrchr($_FILES['moreslip']['name'], ".");
  //ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
  $newname = $date . $numrand . $type;
  //คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
  move_uploaded_file($_FILES['moreslip']['tmp_name'], $path . $newname);

  $sql = $conn->query("SELECT * FROM tb_user WHERE email='" . $email . "' ");
  if ($sql->num_rows > 0) {
    $slip = $conn->query("INSERT Into tb_slip (slip_date, slip_name, email) values ('$date', '$newname', '$email')");
    mysqli_close($conn);
    if ($slip) {
      echo '<script language="javascript">';
      echo 'alert("Successfully add new slip")';
      echo '</script>';
      header("refresh: 1; url=profile.php");

    } else {
      echo '<script language="javascript">';
      echo 'alert("Somthing Wrong!!!")';
      echo '</script>';
      header("refresh: 1; url=profile.php");
    }
  }
}

//Profile
if (isset($_POST['update'])) {
  $email = $_SESSION['email'];
  $profile = (isset($_POST['profile']) ? $_POST['profile'] : '');
  //ฟังก์ชั่นวันที่
  date_default_timezone_set('Asia/Bangkok');
  $date = date("Ymd");
  //ฟังก์ชั่นสุ่มตัวเลข
  $numrand = (mt_rand());
  //เพิ่มไฟล์
  $upload = $_FILES['profile'];
  //โฟลเดอร์ที่จะ upload file เข้าไป 
  $path = "../file/upload/profile/";
  //เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
  $type = strrchr($_FILES['profile']['name'], ".");
  //ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
  $newprofilename = $date . $numrand . $type;
  //คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
  move_uploaded_file($_FILES['profile']['tmp_name'], $path . $newprofilename);
  $copy = $conn->query("SELECT profile FROM tb_user WHERE email='" . $email . "' ");
  foreach ($copy as $row) {
    $old = $row['profile'];
  }
  $insert = $conn->query("UPDATE tb_user SET profile='$newprofilename' WHERE email='" . $email . "' ");

  mysqli_close($conn);
  if ($insert) {
    if ($old != 'user3528.jpg') {
      unlink('../file/upload/profile/' . $old);
      echo '<script language="javascript">';
      echo 'alert("Successfully add new Profile")';
      echo '</script>';
      header("refresh: 1; url=profile.php");
    }
  } else {
    echo '<script language="javascript">';
    echo 'alert("Somthing Wrong!!!")';
    echo '</script>';
    header("refresh: 1; url=profile.php");
  }
}

//Change Student Card
if (isset($_POST['changestudentcard'])) {
  $email = $_SESSION['email'];
  $student = (isset($_POST['changestudentcard']) ? $_POST['changestudentcard'] : '');
  //ฟังก์ชั่นวันที่
  date_default_timezone_set('Asia/Bangkok');
  $date = date("Ymd");
  //ฟังก์ชั่นสุ่มตัวเลข
  $numrand = (mt_rand());
  //เพิ่มไฟล์
  $upload = $_FILES['changestudentcard'];
  //โฟลเดอร์ที่จะ upload file เข้าไป 
  $path = "../file/upload/studentcard/";
  //เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
  $type = strrchr($_FILES['changestudentcard']['name'], ".");
  //ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
  $studentcardname = $date . $numrand . $type;
  //คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
  move_uploaded_file($_FILES['changestudentcard']['tmp_name'], $path . $studentcardname);
  $update = $conn->query("SELECT student_name FROM tb_student WHERE email='" . $email . "' ");
  foreach ($update as $row) {
    $old = $row['student_name'];
  }
  $insert = $conn->query("UPDATE tb_student SET student_name='$studentcardname' WHERE email='" . $email . "' ");

  mysqli_close($conn);
  if ($insert) {
    unlink('../file/upload/studentcard/' . $old);
    echo '<script language="javascript">';
    echo 'alert("Successfully add new Profile")';
    echo '</script>';
    header("refresh: 1; url=profile.php");
  } else {
    echo '<script language="javascript">';
    echo 'alert("Somthing Wrong!!!")';
    echo '</script>';
    header("refresh: 1; url=profile.php");
  }
}
?>