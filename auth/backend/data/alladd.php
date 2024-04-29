<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/connectdb.php');

//Add Announcement
if (isset($_POST['add'])) {
  $coverupload = (isset($_POST['coverupload']) ? $_POST['coverupload'] : '');
  $showtime = $_POST['date'];
  $detail = $_POST['detail'];
  $link = $_POST['link'];
  $more = $_POST['more'];
  $more2 = $_POST['more2'];
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

  $addannouncement = $conn->query("INSERT INTO tb_announcement (an_image, an_date, an_detail, an_link, an_moredetail, an_moredetail2) VALUES ('$newname', '$showtime', '$detail', '$link', '$more1', '$more2')");

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
?>