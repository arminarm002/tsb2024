<?php
include($_SERVER['DOCUMENT_ROOT'] . '/db/connectdb.php');

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
    header("refresh: 1; url=/index.php");
    echo '<script language="javascript">';
    echo 'alert("Successfully")';
    echo '</script>';
  } else {
    header("refresh: 1; url=/auth/backend/poster.php");
    echo '<script language="javascript">';
    echo 'alert("Somthing Wrong!")';
    echo '</script>';
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
    header("refresh: 1; url=/index.php");
    echo '<script language="javascript">';
    echo 'alert("Successfully")';
    echo '</script>';
  } else {
    header("refresh: 1; url=/auth/backend/superadmin.php");
    echo '<script language="javascript">';
    echo 'alert("Somthing Wrong!")';
    echo '</script>';
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
    header("refresh: 1; url=/pages/sponsors.php");
    echo '<script language="javascript">';
    echo 'alert("Successfully")';
    echo '</script>';
  } else {
    header("refresh: 1; url=/auth/backend/logo-add.php");
    echo '<script language="javascript">';
    echo 'alert("Somthing Wrong!")';
    echo '</script>';
  }
}

//Add Speakers
if (isset($_POST['addspeakers'])) {
  $image = (isset($_POST['file_upload']) ? $_POST['file_upload'] : '');
  $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
  if (isset($_POST['symposium'])) {
    $symposium = $_POST['symposium'];
  } else {
    $symposium = '0';
  }
  $typesk = $_POST['type'];
  $from = htmlspecialchars($_POST['affiliation'], ENT_QUOTES);
  $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
  $optional = $_POST['option'];

  //ฟังก์ชั่นวันที่
  date_default_timezone_set('Asia/Bangkok');
  $date = date("Ymd");

  //ฟังก์ชั่นสุ่มตัวเลข
  $numrand = (mt_rand());
  //เพิ่มไฟล์
  $upload = $_FILES['file_upload'];
  //โฟลเดอร์ที่จะ upload file เข้าไป 
  $path = "../../../file/upload/speaker/";
  //เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
  $type = strrchr($_FILES['file_upload']['name'], ".");
  //ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
  $newfilename = $date . $numrand . $type;

  $addspeaker = $conn->query("INSERT INTO tb_speaker (sk_img, sk_type, sk_name, sk_symposium, sk_position, sk_title, sk_description) VALUES ('$newfilename', '$typesk', '$name', '$symposium', '$from', '$title', '$optional')");

  if ($addspeaker) {
    move_uploaded_file($_FILES['file_upload']['tmp_name'], $path . $newfilename);
    header("refresh: 1; url=/pages/talk.php");
    echo '<script language="javascript">';
    echo 'alert("Successfully")';
    echo '</script>';
  } else {
    header("refresh: 1; url=/auth/backend/logo.php");
    echo '<script language="javascript">';
    echo 'alert("Somthing Wrong!")';
    echo '</script>';
  }
}
?>