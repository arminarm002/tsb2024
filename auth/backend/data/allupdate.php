<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/connectdb.php');

//Delete Announcement
if (isset($_POST['update'])) {
  $id = $_POST['id'];
  $filename = $_POST['file'];
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
   
   $apdateannouncement = $conn->query("UPDATE tb_announcement SET an_image='$newname', an_date='$showtime', an_detail='$detail', an_link='$link', an_moredetail='$more', an_moredetail2='$more2' WHERE id=$id;");

    if ($apdateannouncement) {
      unlink('../../../file/upload/news/'.$filename);
      echo '<script language="javascript">';
      echo 'alert("แก้ไข สำเร็จ")';
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