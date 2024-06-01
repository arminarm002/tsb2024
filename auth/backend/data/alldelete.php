<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/db/connectdb.php');

//Delete Poster
if (isset($_POST['deleteposter'])) {
  $id = $_POST['id'];
  $filename = $_POST['filename'];

  $deleteposter = $conn->query("DELETE FROM tb_poster WHERE id=$id;");

  if ($deleteposter) {
    unlink('../../../file/upload/poster/' . $filename);
    echo '<script language="javascript">';
    echo 'alert("ลบ สำเร็จ")';
    echo '</script>';
    header("refresh: 1; url=/index.php");

  } else {
    echo '<script language="javascript">';
    echo 'alert("Somthing Wrong!")';
    echo '</script>';
    header("refresh: 1; url=/auth/backend/superadmin.php");
  }

}

//Delete Announcement
if (isset($_POST['delete'])) {
  $id = $_POST['id'];
  $filename = $_POST['filename'];

  $deleteannouncement = $conn->query("DELETE FROM tb_announcement WHERE id=$id;");

  if ($deleteannouncement) {
    unlink('../../../file/upload/news/' . $filename);
    echo '<script language="javascript">';
    echo 'alert("ลบ สำเร็จ")';
    echo '</script>';
    header("refresh: 1; url=/index.php");

  } else {
    echo '<script language="javascript">';
    echo 'alert("Somthing Wrong!")';
    echo '</script>';
    header("refresh: 1; url=/auth/backend/superadmin.php");
  }

}
//Delete Logo
if (isset($_POST['deletelogo'])) {
  $id = $_POST['id'];
  $oldname = $_POST['oldname'];

  $deleteannouncement = $conn->query("DELETE FROM tb_logo WHERE id=$id;");

  if ($deleteannouncement) {
    unlink('../../../file/upload/logo/' . $oldname);
    echo '<script language="javascript">';
    echo 'alert("ลบ สำเร็จ")';
    echo '</script>';
    header("refresh: 1; url=/pages/sponsors.php");

  } else {
    echo '<script language="javascript">';
    echo 'alert("Somthing Wrong!")';
    echo '</script>';
    header("refresh: 1; url=/auth/backend/superadmin.php");
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
    echo '<script language="javascript">';
    echo 'alert("ลบ สำเร็จ")';
    echo '</script>';
    header("refresh: 1; url=/pages/talk.php");

  } else {
    echo '<script language="javascript">';
    echo 'alert("Somthing Wrong!")';
    echo '</script>';
    header("refresh: 1; url=/auth/backend/personneltalk-update.php");
  }

}
?>