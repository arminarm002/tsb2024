<?php
include($_SERVER['DOCUMENT_ROOT'] . '/db/connectdb.php');
session_start();

//Register
$secret = "6Lcnkj8qAAAAABFLHgu7UUK9M-Au8KCmV5u59nkm";
if (isset($_POST['g-recaptcha-response'])) {
  $captcha = $_POST['g-recaptcha-response'];
  $verifyResponse = file_get_contents('https://google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $captcha);
  $reponseData = json_decode($verifyResponse);

  if (!$captcha) {
    $_SESSION['error'] = "Please enter reCAPTCHA!";
    echo "<script>
    alert('Please enter reCAPTCHA!');
    window.location.href = 'register.php';
    </script>";
  }

  if (isset($_POST['register']) && $reponseData->success) {

    if (isset($_POST['ab-number'])) {
      $abnumber = $_POST['ab-number'];
    } else {
      $abnumber = "";
    }
    if (isset($_POST['kmitl'])) {
      $kmitl = $_POST['kmitl'];
    } else {
      $kmitl = "";
    }
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $title = $_POST['title'];
    $fname = $_POST['name'];
    $lname = $_POST['lastname'];
    $company = htmlspecialchars($_POST['company'], ENT_QUOTES);
    $career = htmlspecialchars($_POST['career'], ENT_QUOTES);
    $address = htmlspecialchars($_POST['address'], ENT_QUOTES);
    $country = $_POST['country'];
    $tel = $_POST['tel'];
    $fax = $_POST['fax'];
    $extrameal = "";
    $i = 0;
    $j = "";
    foreach ($_POST['meal'] as $meal) {
      if ($i > 0) {
        $j = ",";
      }
      $extrameal .= $j . " " . $meal;
      $i++;
    }
    // echo $extrameal;
    $food = $_POST['food'];
    $typeu = $_POST['type'];
    $receipt_name = htmlspecialchars($_POST['receipt-name'], ENT_QUOTES);
    $receipt_address = htmlspecialchars($_POST['receipt-address'], ENT_QUOTES);
    $receipt_tax = htmlspecialchars($_POST['receipt-tax'], ENT_QUOTES);
    $fee = $_POST['fee'];
    $amount = $_POST['amount'];
    $role = "user";
    $password = password_hash($pass, PASSWORD_DEFAULT);
    //ฟังก์ชั่นวันที่
    date_default_timezone_set('Asia/Bangkok');
    $date = date("Ymd");
    $numrand = sprintf("%06d", rand(0, 999999));
    if ($fee == "4" || $fee == "5") {
      $amount = 1;
    }

    $date_end = $conn->query("SELECT * FROM tb_setdate");
    $datenows = date("Y-m-d");

    if ($datenows <= "2024-08-30") {

      if ($fee == "1") {
        $total = $amount * 4500;

      } else if ($fee == "2") {
        $total = $amount * 5000;

      } else if ($fee == "3") {
        $total = $amount * 3500;

      } else if ($fee == "4") {
        $total = $amount * 3500;

      } else if ($fee == "5") {
        $total = $amount * 1500;
      }

    } else if ($datenows <= "2024-10-31") {

      if ($fee == "1") {
        $total = $amount * 5000;

      } else if ($fee == "2") {
        $total = $amount * 6000;

      } else if ($fee == "3") {
        $total = $amount * 4000;

      } else if ($fee == "4") {
        $total = $amount * 3500;

      } else if ($fee == "5") {
        $total = $amount * 1500;
      }

    } else if ($datenows <= "2024-11-15") {

      if ($fee == "1") {
        $total = $amount * 5500;

      } else if ($fee == "2") {
        $total = $amount * 7000;

      } else if ($fee == "3") {
        $total = $amount * 4500;

      } else if ($fee == "4") {
        $total = $amount * 3500;

      } else if ($fee == "5") {
        $total = $amount * 1500;
      }

    }
    $sql = $conn->query("SELECT * FROM tb_user WHERE email='" . $email . "' ");

    if ($sql->num_rows > 0) {
      header("refresh: 1; url=register.php");
      echo '<script language="javascript">';
      echo 'alert("This email is already done, Can not register again.")';
      echo '</script>';
    } else {
      $sql2 = $conn->query("INSERT INTO tb_user (email, password, title, firstname, lastname, company, career, address, country, telephone, fax, extrameal, food, type, receipt_name, receipt_address, receipt_tax, pay_id, amount, total_price, role, kmitl, approve, abstract_number) VALUES ('$email', '$password', '$title', '$fname', '$lname', '$company', '$career', '$address', '$country', '$tel', '$fax', '$extrameal', '$food', '$typeu', '$receipt_name','$receipt_address','$receipt_tax', '$fee', '$amount', '$total', '$role', '$kmitl', 'wait', '$abnumber')");

      if ($sql2) {
        $slip = $conn->query("INSERT INTO tb_confirm (slip_date, slip_name, email) VALUES ('$date', '$numrand', '$email')");
        if ($slip) {
          header("refresh: 1; url=login.php");
          echo '<script language="javascript">';
          echo 'alert("Successfully registrater, Please Log in to get KEY for Attach confirm transfer file")';
          echo '</script>';
        } else {
          header("refresh: 1; url=register.php");
          echo '<script language="javascript">';
          echo 'alert("Somthing Wrong about KEY")';
          echo '</script>';
        }

      } else {
        header("refresh: 1; url=register.php");
        echo '<script language="javascript">';
        echo 'alert("Somthing Wrong abouy information")';
        echo '</script>';
      }
    }
  }
}

// Log in
if (isset($_POST['login'])) {
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
        $_SESSION['abstract_number'] = $row['abstract_number'];

        if ($_SESSION['role'] == "user") {
          if ($_SESSION['type'] == "Oral Presenter" || $_SESSION['type'] == "Poster Presenter") {
            if ($_SESSION['abstract_number'] == 0) {
              header("refresh: 1; url=/auth/fillabnum.php");
            } else {
              header("refresh: 1; url=/auth/profile.php");
            }
          } else {
            header("refresh: 1; url=/auth/profile.php");
          }
        } else if ($_SESSION['role'] == "admin") {
          header("refresh: 1; url=/auth/backend/admin.php");
        } else if ($_SESSION['role'] == "superadmin") {
          header("refresh: 1; url=/auth/backend/superadmin.php");
        }
      } else {
        header("refresh: 1; url=login.php");
        echo '<script language="javascript">';
        echo 'alert("Password Invalid")';
        echo '</script>';
      }
    }
  } else {
    header("refresh: 1; url=login.php");
    echo '<script language="javascript">';
    echo 'alert("Username Invalid")';
    echo '</script>';
  }
}

//Update Personal Data
if (isset($_POST['updatedetail'])) {
  if (isset($_POST['ab-number'])) {
    $abnumber = $_POST['ab-number'];
  } else {
    $abnumber = "";
  }
  $title = $_POST['title'];
  $fname = $_POST['name'];
  $lname = $_POST['lastname'];
  $address = htmlspecialchars($_POST['address'], ENT_QUOTES);
  $tel = $_POST['tel'];
  $fax = $_POST['fax'];

  $sqlupdate = "UPDATE tb_user SET title='$title', firstname='$fname', lastname='$lname', address='$address', telephone='$tel', fax='$fax', abstract_number='$abnumber' WHERE email='" . $_SESSION['email'] . "' ";

  $updatedata = $conn->query($sqlupdate);

  if ($updatedata) {
    header("refresh: 1; url=profile.php");
    echo '<script language="javascript">';
    echo 'alert("Successfully Update")';
    echo '</script>';
  } else {
    header("refresh: 1; url=updatedetail.php");
    echo '<script language="javascript">';
    echo 'alert("Somthing Wrong!")';
    echo '</script>';
  }
}

// Add Abstract Number
if (isset($_POST['abstractnumber'])) {
  session_start();
  $abnumber = $_POST['abnumber'];

  $result = $conn->query("SELECT * FROM tb_user WHERE abstract_number='" . $abnumber . "'");

  if ($result->num_rows > 0) {
    echo '<script language="javascript">';
    echo 'alert("This Abstract Number is Already in The System, Please Contact The Staff.")';
    echo '</script>';
    header("refresh: 1; url=fillabnum.php");
  } else {

    $updateabnum = $conn->query("UPDATE tb_user SET abstract_number='$abnumber' WHERE email='" . $_SESSION['email'] . "' ");

    if ($updateabnum) {
      $_SESSION['abstract_number'] = $abnumber;
      header("refresh: 1; url=/auth/profile.php");
      echo '<script language="javascript">';
      echo 'alert("Successfully")';
      echo '</script>';

    } else {
      header("refresh: 1; url=/auth/fillabnum.php");
      echo '<script language="javascript">';
      echo 'alert("Somthing Wrong!")';
      echo '</script>';
    }
  }
}

//Super admin change user password
if (isset($_POST['adminchang'])) {
  $email = $_POST['email'];
  $numrand = sprintf("%06d", rand(0, 999999));
  $password = password_hash($numrand, PASSWORD_DEFAULT);

  $result = $conn->query("SELECT * FROM tb_user WHERE email='" . $email . "'");

  if ($result->num_rows > 0) {

    $update = $conn->query("UPDATE tb_user SET password='$password' WHERE email='$email' ");
    mysqli_close($conn);
    if ($update) {
      echo $numrand;
    } else {
      header("refresh: 1; url=changepass.php");
      echo '<script language="javascript">';
      echo 'alert("Somthing Wrong!!!")';
      echo '</script>';
    }

  } else {
    header("refresh: 1; url=backend/manageuser.php");
    echo '<script language="javascript">';
    echo 'alert("not found this email")';
    echo '</script>';
  }
}
?>