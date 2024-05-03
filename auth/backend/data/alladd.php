<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/connectdb.php');

//Add Poster
if (isset($_POST['addposter'])) {
  $addposter = (isset($_POST['poster']) ? $_POST['poster'] : '');

  //ฟังก์ชั่นวันที่
  date_default_timezone_set('Asia/Bangkok');
  $date = date("Ymd");
  //ฟังก์ชั่นสุ่มตัวเลข
  $numrand = (mt_rand());
  //เพิ่มไฟล์
  $upload = $_FILES['poster'];
  //โฟลเดอร์ที่จะ upload file เข้าไป 
  $path = "../../../file/upload/poster/";
  //เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
  $type = strrchr($_FILES['poster']['name'], ".");
  //ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
  $newname = $date . $numrand . $type;
  //คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
  move_uploaded_file($_FILES['poster']['tmp_name'], $path . $newname);
  $addposter = $conn->query("INSERT INTO tb_poster (pt_image) VALUES ('$newname')");

    if ($addposter) {
      echo '<script language="javascript">';
      echo 'alert("Successfully")';
      echo '</script>';
      header("refresh: 1; url=/tsb2024/index.php");

    } else {
      echo '<script language="javascript">';
      echo 'alert("Somthing Wrong!")';
      echo '</script>';
      header("refresh: 1; url=/tsb2024/auth/backend/poster.php");
    }
}

//Add Announcement
if (isset($_POST['addannounce'])) {
  $coverupload = (isset($_POST['coverupload']) ? $_POST['coverupload'] : '');
  $showtime = $_POST['date'];
  $link = $_POST['link'];
  $detail = htmlspecialchars($_POST['detail'], ENT_QUOTES);
  $more = htmlspecialchars($_POST['more'], ENT_QUOTES);
  $more2 = htmlspecialchars($_POST['more2'], ENT_QUOTES);
  //ฟังก์ชั่นวันที่
  date_default_timezone_set('Asia/Bangkok');
  $date = date("Ymd");

  //ฟังก์ชั่นสุ่มตัวเลข
  $numrand = (mt_rand());
  //เพิ่มไฟล์
  $upload = $_FILES['coverupload'];
  //โฟลเดอร์ที่จะ upload file เข้าไป 
  $path = "../../../file/upload/news/";
  //เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
  $type = strrchr($_FILES['coverupload']['name'], ".");
  //ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
  $newname = $date . $numrand . $type;
  //คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
  move_uploaded_file($_FILES['coverupload']['tmp_name'], $path . $newname);

  $addannouncement = $conn->query("INSERT INTO tb_announcement (an_image, an_date, an_detail, an_link, an_moredetail, an_moredetail2) VALUES ('$newname', '$showtime', '$detail', '$link', '$more', '$more2')");

    if ($addannouncement) {
      echo '<script language="javascript">';
      echo 'alert("Successfully")';
      echo '</script>';
      header("refresh: 1; url=/tsb2024/index.php");

    } else {
      echo '<script language="javascript">';
      echo 'alert("Somthing Wrong!")';
      echo '</script>';
      header("refresh: 1; url=/tsb2024/auth/backend/superadmin.php");
    }
}

//Add Logo
if (isset($_POST['addlogo'])) {
  $logoupload = (isset($_POST['logoupload']) ? $_POST['logoupload'] : '');
  $namecompany = htmlspecialchars($_POST['name'], ENT_QUOTES);
  $class = $_POST['class'];
  $link = $_POST['link'];
  
  //ฟังก์ชั่นวันที่
  date_default_timezone_set('Asia/Bangkok');
  $date = date("Ymd");

  //ฟังก์ชั่นสุ่มตัวเลข
  $numrand = (mt_rand());
  //เพิ่มไฟล์
  $upload = $_FILES['logoupload'];
  //โฟลเดอร์ที่จะ upload file เข้าไป 
  $path = "../../../file/upload/logo/";
  //เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
  $type = strrchr($_FILES['logoupload']['name'], ".");
  //ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
  $newfilename = $date . $numrand . $type;
  //คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
  move_uploaded_file($_FILES['logoupload']['tmp_name'], $path . $newfilename);

  $addlogo = $conn->query("INSERT INTO tb_logo (lg_image, lg_name, lg_class, lg_link) VALUES ('$newfilename', '$namecompany', '$class', '$link')");

    if ($addlogo) {
      echo '<script language="javascript">';
      echo 'alert("Successfully")';
      echo '</script>';
      header("refresh: 1; url=/tsb2024/pages/sponsors.php");

    } else {
      echo '<script language="javascript">';
      echo 'alert("Somthing Wrong!")';
      echo '</script>';
      header("refresh: 1; url=/tsb2024/auth/backend/logo.php");
    }
}
?>