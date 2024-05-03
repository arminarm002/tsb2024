<div class="list-group"
  style="--bs-list-group-bg: rgb(255 122 1 / 20%);--bs-list-group-action-hover-bg: rgb(127 94 65 / 44%);">
  <?php if ($_SESSION['role'] == "superadmin") {
    $data1 = "display:none;";
    $data2 = "";
  } else {
    $data1 = "";
    $data2 = "display:none;";
  }
  ?>
  <a class="list-group-item list-group-item-action active" aria-current="true"
    style="background-color: #ff7a01;border-color: #813d00;<?php echo $data2; ?>">Setting</a>
  <? ?>
  <a class="list-group-item list-group-item-action active" aria-current="true"
    style="background-color: #ff7a01;border-color: #813d00;<?php echo $data1; ?>">Profile</a>
  <?php ?>
  <a href="/tsb2024/auth/profile.php" class="list-group-item list-group-item-action">Home</a>
  <a href="/tsb2024/auth/changepass.php" class="list-group-item list-group-item-action">Change Password</a>
  <?php if ($_SESSION['role'] == "thaiphysic") { ?>
    <a href="/tsb2024/auth/backend/thaiphysic.php" class="list-group-item list-group-item-action">รอการอนุมัติ</a>
    <a href="/tsb2024/auth/backend/approved.php" class="list-group-item list-group-item-action">อนุมัติแล้ว</a>
    <a href="/tsb2024/auth/backend/disapprove.php" class="list-group-item list-group-item-action">ไม่ผ่านการอนุมัติ</a>
  <?php } ?>
  <?php if ($_SESSION['role'] == "superadmin") { ?>
    <a href="/tsb2024/auth/backend/superadmin.php" class="list-group-item list-group-item-action">Announcement</a>
    <a href="/tsb2024/auth/backend/poster-add.php" class="list-group-item list-group-item-action">Poster</a>
    <a href="/tsb2024/auth/backend/personneltalk-add.php" class="list-group-item list-group-item-action">Plenary Talks</a>
    <a href="/tsb2024/auth/backend/logo-add.php" class="list-group-item list-group-item-action">Logo</a>
  <?php } ?>
</div>