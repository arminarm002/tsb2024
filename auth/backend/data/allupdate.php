<?php
include($_SERVER['DOCUMENT_ROOT'] . '/db/connectdb.php');

//Update User
if (isset($_POST['userupdate'])) {
  $id = $_POST['id'];
  $role = $_POST['role'];

  $updateuser = $conn->query("UPDATE tb_user SET role='$role' WHERE user_id=$id;");

  if ($updateuser) {
    header("refresh: 1; url=/auth/backend/manageuser.php");
    echo '<script language="javascript">';
    echo 'alert("แก้ไข สำเร็จ")';
    echo '</script>';
  } else {
    header("refresh: 1; url=/auth/backend/manageuser.php");
    echo '<script language="javascript">';
    echo 'alert("Somthing Wrong!")';
    echo '</script>';
  }
}

//Update Poster
if (isset($_POST['updateposter'])) {
  $id = $_POST['id'];
  $oldname = $_POST['oldname'];
  $poster = (isset($_POST['poster']) ? $_POST['poster'] : '');

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

  $updateposter = $conn->query("UPDATE tb_poster SET pt_image='$newname' WHERE id=$id;");

  if ($updateposter) {
    unlink('../../../file/upload/poster/' . $oldname);
    header("refresh: 1; url=/index.php");
    echo '<script language="javascript">';
    echo 'alert("แก้ไข สำเร็จ")';
    echo '</script>';
  } else {
    header("refresh: 1; url=/auth/backend/superadmin.php");
    echo '<script language="javascript">';
    echo 'alert("Somthing Wrong!")';
    echo '</script>';
  }
}

//Update Announcement
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

  $updateannouncement = $conn->query("UPDATE tb_announcement SET an_image='$newname', an_date='$showtime', an_detail='$detail', an_link='$link', an_moredetail='$more', an_moredetail2='$more2' WHERE id=$id;");

  if ($updateannouncement) {
    unlink('../../../file/upload/news/' . $filename);
    header("refresh: 1; url=/index.php");
    echo '<script language="javascript">';
    echo 'alert("แก้ไข สำเร็จ")';
    echo '</script>';
  } else {
    header("refresh: 1; url=/auth/backend/superadmin.php");
    echo '<script language="javascript">';
    echo 'alert("Somthing Wrong!")';
    echo '</script>';
  }
}

//Update Logo
if (isset($_POST['updatelogo'])) {
  $id = $_POST['id'];
  $oldname = $_POST['oldname'];
  $logo = (isset($_POST['logoupdate']) ? $_POST['logoupdate'] : '');
  $namecompany = htmlspecialchars($_POST['name'], ENT_QUOTES);
  $class = $_POST['class'];
  $link = $_POST['link'];

  //ฟังก์ชั่นวันที่
  date_default_timezone_set('Asia/Bangkok');
  $date = date("Ymd");

  //ฟังก์ชั่นสุ่มตัวเลข
  $numrand = (mt_rand());
  //เพิ่มไฟล์
  $upload = $_FILES['logoupdate'];
  //โฟลเดอร์ที่จะ upload file เข้าไป 
  $path = "../../../file/upload/logo/";
  //เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
  $type = strrchr($_FILES['logoupdate']['name'], ".");
  //ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
  $newname = $date . $numrand . $type;
  //คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
  move_uploaded_file($_FILES['logoupdate']['tmp_name'], $path . $newname);

  $updatelogo = $conn->query("UPDATE tb_logo SET lg_image='$newname', lg_name='$namecompany', lg_class='$class', lg_link='$link' WHERE id=$id;");

  if ($updatelogo) {
    unlink('../../../file/upload/logo/' . $oldname);
    header("refresh: 1; url=/pages/sponsors.php");
    echo '<script language="javascript">';
    echo 'alert("แก้ไข สำเร็จ")';
    echo '</script>';
  } else {
    header("refresh: 1; url=/auth/backend/superadmin.php");
    echo '<script language="javascript">';
    echo 'alert("Somthing Wrong!")';
    echo '</script>';
  }
}

//Update Speaker 
if (isset($_POST['updatespeakers'])) {
  $id = $_POST['sk_id'];
  $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
  $symposium = $_POST['symposium'];
  $typesk = $_POST['type'];
  $from = htmlspecialchars($_POST['affiliation'], ENT_QUOTES);
  $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
  $optional = $_POST['option'];

  $updatespeaker = $conn->query("UPDATE tb_speaker SET sk_type='$typesk', 
    sk_name='$name', sk_symposium='$symposium', sk_position='$from', sk_title='$title', sk_description='$optional' WHERE id=$id;");

  $speaker = $conn->query("SELECT * FROM tb_speaker WHERE id=$id");
  foreach ($speaker as $sk) {

    if ($updatespeaker) {
      if (!file_exists($_FILES['file_upload']['tmp_name']) || !is_uploaded_file($_FILES['file_upload']['tmp_name'])) {
        header("refresh: 1; url=/pages/talk.php");
        echo '<script language="javascript">';
        echo 'alert("แก้ไข สำเร็จ")';
        echo '</script>';

      } else {
        date_default_timezone_set('Asia/Bangkok');
        $date = date("Ymd");
        $numrand = (mt_rand());
        $upload = $_FILES['file_upload'];
        $path = "../../../file/upload/speaker/";
        $type = strrchr($_FILES['file_upload']['name'], ".");
        $newname = $date . $numrand . $type;
        move_uploaded_file($_FILES['file_upload']['tmp_name'], $path . $newname);
        unlink('../../../file/upload/speaker/' . $sk['sk_img']);
        $updatespeakerimage = $conn->query("UPDATE tb_speaker SET sk_img='$newname' WHERE id=$id;");

        if ($updatespeakerimage) {
          header("refresh: 1; url=/pages/talk.php");
          echo '<script language="javascript">';
          echo 'alert("แก้ไข สำเร็จ")';
          echo '</script>';
        } else {
          header("refresh: 1; url=/auth/backend/personneltalk-update.php");
          echo '<script language="javascript">';
          echo 'alert("Somthing Wrong! abount image")';
          echo '</script>';
        }
      }
    } else {
      header("refresh: 1; url=/auth/backend/personneltalk-update.php");
      echo '<script language="javascript">';
      echo 'alert("Somthing Wrong!")';
      echo '</script>';
    }
  }
}
?>