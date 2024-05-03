<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/connectdb.php');

//Delete Poster
if (isset($_POST['deleteposter'])) {
  $id = $_POST['id'];
  $filename = $_POST['filename'];

  $deleteposter = $conn->query("DELETE FROM tb_poster WHERE id=$id;");

    if ($deleteposter) {
      unlink('../../../file/upload/poster/'.$filename);
      echo '<script language="javascript">';
      echo 'alert("ลบ สำเร็จ")';
      echo '</script>';
      header("refresh: 1; url=/tsb2024/index.php");

    } else {
      echo '<script language="javascript">';
      echo 'alert("Somthing Wrong!")';
      echo '</script>';
      header("refresh: 1; url=/tsb2024/auth/backend/superadmin.php");
    }
  
}

//Delete Announcement
if (isset($_POST['delete'])) {
  $id = $_POST['id'];
  $filename = $_POST['filename'];

  $deleteannouncement = $conn->query("DELETE FROM tb_announcement WHERE id=$id;");

    if ($deleteannouncement) {
      unlink('../../../file/upload/news/'.$filename);
      echo '<script language="javascript">';
      echo 'alert("ลบ สำเร็จ")';
      echo '</script>';
      header("refresh: 1; url=/tsb2024/index.php");

    } else {
      echo '<script language="javascript">';
      echo 'alert("Somthing Wrong!")';
      echo '</script>';
      header("refresh: 1; url=/tsb2024/auth/backend/superadmin.php");
    }
  
}
//Delete Logo
if (isset($_POST['deletelogo'])) {
  $id = $_POST['id'];
  $oldname = $_POST['oldname'];

  $deleteannouncement = $conn->query("DELETE FROM tb_logo WHERE id=$id;");

    if ($deleteannouncement) {
      unlink('../../../file/upload/logo/'.$oldname);
      echo '<script language="javascript">';
      echo 'alert("ลบ สำเร็จ")';
      echo '</script>';
      header("refresh: 1; url=/tsb2024/pages/sponsors.php");

    } else {
      echo '<script language="javascript">';
      echo 'alert("Somthing Wrong!")';
      echo '</script>';
      header("refresh: 1; url=/tsb2024/auth/backend/superadmin.php");
    }
  
}
?>