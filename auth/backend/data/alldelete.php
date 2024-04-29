<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/connectdb.php');

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
?>