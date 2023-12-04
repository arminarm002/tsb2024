<div class="list-group"
  style="--bs-list-group-bg: rgb(255 122 1 / 20%);--bs-list-group-action-hover-bg: rgb(127 94 65 / 44%);">
  <a class="list-group-item list-group-item-action active" aria-current="true"
    style="background-color: #ff7a01;border-color: #813d00;">Profile</a>
  <a href="/spc2024/auth/profile.php" class="list-group-item list-group-item-action">Home</a>
  <a href="/spc2024/auth/changepass.php" class="list-group-item list-group-item-action">Change Password</a>
  <?php if ($_SESSION['role'] != "user") { ?>
    <a href="/spc2024/auth/backend/thaiphysic.php" class="list-group-item list-group-item-action">รอการอนุมัติ</a>
    <a href="/spc2024/auth/backend/approved.php" class="list-group-item list-group-item-action">อนุมัติแล้ว</a>
    <a href="/spc2024/auth/backend/disapprove.php" class="list-group-item list-group-item-action">ไม่ผ่านการอนุมัติ</a>
  <?php } ?>
</div>