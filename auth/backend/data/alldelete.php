<?php
include($_SERVER['DOCUMENT_ROOT'] . '/db/connectdb.php');

//Delete Poster
if (isset($_POST['deleteposter'])) {
  $id = $_POST['id'];
  $filename = $_POST['filename'];

  $deleteposter = $conn->query("DELETE FROM tb_poster WHERE id=$id;");

  if ($deleteposter) {
    unlink('../../../file/upload/poster/' . $filename);
    header("refresh: 1; url=/index.php");
    echo '<script language="javascript">';
    echo 'alert("ลบ สำเร็จ")';
    echo '</script>';
  } else {
    header("refresh: 1; url=/auth/backend/superadmin.php");
    echo '<script language="javascript">';
    echo 'alert("Somthing Wrong!")';
    echo '</script>';
  }

}

//Delete Announcement
if (isset($_POST['delete'])) {
  $id = $_POST['id'];
  $filename = $_POST['filename'];

  $deleteannouncement = $conn->query("DELETE FROM tb_announcement WHERE id=$id;");

  if ($deleteannouncement) {
    unlink('../../../file/upload/news/' . $filename);
    header("refresh: 1; url=/index.php");
    echo '<script language="javascript">';
    echo 'alert("ลบ สำเร็จ")';
    echo '</script>';
  } else {
    header("refresh: 1; url=/auth/backend/superadmin.php");
    echo '<script language="javascript">';
    echo 'alert("Somthing Wrong!")';
    echo '</script>';
  }

}
//Delete Logo
if (isset($_POST['deletelogo'])) {
  $id = $_POST['id'];
  $oldname = $_POST['oldname'];

  $deleteannouncement = $conn->query("DELETE FROM tb_logo WHERE id=$id;");

  if ($deleteannouncement) {
    unlink('../../../file/upload/logo/' . $oldname);
    header("refresh: 1; url=/pages/sponsors.php");
    echo '<script language="javascript">';
    echo 'alert("ลบ สำเร็จ")';
    echo '</script>';
  } else {
    header("refresh: 1; url=/auth/backend/superadmin.php");
    echo '<script language="javascript">';
    echo 'alert("Somthing Wrong!")';
    echo '</script>';
  }

}

//Delete Speaker
if (isset($_POST['deletespeaker'])) {
  $id = $_POST['id'];
  $join = $conn->query("SELECT * FROM tb_speaker WHERE id=$id");
  foreach ($join as $sk)
    $deletespeaker = $conn->query("DELETE FROM tb_speaker WHERE id=$id;");

  if ($deletespeaker) {
    unlink('../../../file/upload/speaker/' . $sk['sk_img']);
    header("refresh: 1; url=/pages/talk.php");
    echo '<script language="javascript">';
    echo 'alert("ลบ สำเร็จ")';
    echo '</script>';
  } else {
    header("refresh: 1; url=/auth/backend/personneltalk-update.php");
    echo '<script language="javascript">';
    echo 'alert("Somthing Wrong!")';
    echo '</script>';
  }

}
?>