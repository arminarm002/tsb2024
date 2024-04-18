<?php
include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/connectdb.php');

//Register
if (isset($_POST['add'])) {
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $title = $_POST['title'];
  $fname = $_POST['name'];
  $lname = $_POST['lastname'];
  $company = htmlspecialchars($_POST['company'], ENT_QUOTES);
  $career = $_POST['career'];
  $address = $_POST['address'];
  $country = $_POST['country'];
  $tel = $_POST['tel'];
  $fax = $_POST['fax'];
  $extrameal = $_POST['meal'];
  $food = $_POST['food'];
  $typeu = $_POST['type'];
  $receipt = $_POST['receipt'];
  $fee = $_POST['fee'];
  $amount = $_POST['amount'];
  $fileupload = (isset($_POST['fileupload']) ? $_POST['fileupload'] : '');
  $role = "user";
  $profile = "user3528.jpg";
  $password = password_hash($pass, PASSWORD_DEFAULT);

  //ฟังก์ชั่นวันที่
  date_default_timezone_set('Asia/Bangkok');
  $date = date("Ymd");
  //ฟังก์ชั่นสุ่มตัวเลข
  $numrand = (mt_rand());
  //เพิ่มไฟล์
  $upload = $_FILES['fileupload'];
  //โฟลเดอร์ที่จะ upload file เข้าไป 
  $path = "../file/upload/slip/";
  //เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
  $type = strrchr($_FILES['fileupload']['name'], ".");
  //ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
  $newname = $date . $numrand . $type;
  //คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
  move_uploaded_file($_FILES['fileupload']['tmp_name'], $path . $newname);

  if ($fee == "1") {
    $amount = 1;
  } else if ($fee == "5") {
    $amount = 1;
  }
  if ($fee == "1") {
    $total = $amount * 5000;

  } else if ($fee == "2") {
    $total = $amount * 4000;

  } else if ($fee == "3") {
    $total = $amount * 4000;

  } else if ($fee == "4") {
    $fileupload2 = (isset($_POST['studencard']) ? $_POST['studencard'] : '');
    $total = $amount * 3000;
    $numrand2 = (mt_rand());
    $upload2 = $_FILES['studencard'];
    $path2 = "../file/upload/studentcard/";
    $type2 = strrchr($_FILES['studencard']['name'], ".");
    $newname2 = $date . $numrand2 . $type2;
    $student = $conn->query("INSERT INTO tb_student (student_name, email) VALUES ('$newname2', '$email')");
    move_uploaded_file($_FILES['studencard']['tmp_name'], $path2 . $newname2);

  } else if ($fee == "5") {
    $total = $amount * 3000;
  }
  $sql = $conn->query("SELECT * FROM tb_user WHERE email='" . $email . "' ");

  if ($sql->num_rows > 0) {
    echo '<script language="javascript">';
    echo 'alert("This email is already done, Can not register again.")';
    echo '</script>';
    header("refresh: 1; url=register.php");
  } else {
    $sql = $conn->query("INSERT INTO tb_user (email, password, title, firstname, lastname, company, career, address, country, telephone, fax, extrameal, food, type, receipt, pay_id, amount, total_price, role, profile, approve) VALUES ('$email', '$password', '$title', '$fname', '$lname', '$company', '$career', '$address', '$country', '$tel', '$fax', '$extrameal', '$food', '$typeu', '$receipt', '$fee', '$amount', '$total', '$role', '$profile', 'wait')");

    if ($sql) {
      $slip = $conn->query("INSERT INTO tb_slip (slip_date, slip_name, email) VALUES ('$date', '$newname', '$email')");
      echo '<script language="javascript">';
      echo 'alert("Successfully registrater")';
      echo '</script>';
      header("refresh: 1; url=login.php");

    } else {
      echo '<script language="javascript">';
      echo 'alert("Somthing Wrong!")';
      echo '</script>';
      header("refresh: 1; url=register.php");
    }
  }
}

// Log in
if (isset($_POST['login'])) {
  session_start();
  $email = $_POST['email'];
  $pass = $_POST['password'];

  $result = $conn->query("SELECT * FROM tb_user WHERE email='" . $email . "'");

  if ($result->num_rows > 0) {
    foreach ($result as $row) {
      $newpass = $row['password'];
      $password = password_verify($pass, $newpass);
      if ($password) {
        $_SESSION['id'] = $row['user_id'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['title'] = $row['title'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['company'] = $row['company'];
        $_SESSION['career'] = $row['career'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['country'] = $row['country'];
        $_SESSION['phone'] = $row['telephone'];
        $_SESSION['fax'] = $row['fax'];
        $_SESSION['extrameal'] = $row['extrameal'];
        $_SESSION['type'] = $row['type'];
        $_SESSION['pay_id'] = $row['pay_id'];
        $_SESSION['role'] = $row['role'];

        if ($_SESSION['role'] == "user") {
          header("refresh: 1; url=/tsb2024/auth/profile.php");
        } else if ($_SESSION['role'] == "admin") {
          header("refresh: 1; url=/tsb2024/auth/backend/admin.php");
        } else if ($_SESSION['role'] == "thaiphysic") {
          header("refresh: 1; url=/tsb2024/auth/backend/thaiphysic.php");
        } else if ($_SESSION['role'] == "superadmin") {
          header("refresh: 1; url=/tsb2024/auth/backend/superadmin.php");
        }
      } else {
        echo '<script language="javascript">';
        echo 'alert("Password Invalid")';
        echo '</script>';
        header("refresh: 1; url=login.php");
      }
    }
  } else {
    echo '<script language="javascript">';
    echo 'alert("Username Invalid")';
    echo '</script>';
    header("refresh: 1; url=login.php");
  }
}
?>