<?php
//Register
include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/connectdb.php');

if (isset($_POST['add'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
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
  $type = $_POST['type'];
  $receipt = $_POST['receipt'];
  $fee = $_POST['fee'];

  $sql = $conn->query("SELECT * FROM tb_user WHERE email='" . $email . "' ");

  if ($sql->num_rows > 0) {
    echo '
    <script language="javascript"> 
    alert("This email is already done, Can not register again.")
    </script>
    ';
    header("refresh: 1; url=register.php");
  } else {
      $sql = ("INSERT Into tb_user (
        username, password, email, title, firstname, lastname, company, career, address, country, 
        telephone, fax, extrameal, type, fee) values (
          '$username','$password', '$email', '$title', '$fname', '$lname', '$company', '$career', '$address', '$country', 
          '$tel', '$fax', '$extrameal', '$type', '$fee')");
       $query = $conn->query($sql);
      if ($query) {
        echo '<script language="javascript">';
        echo 'alert("Successfully registrater, Please wait for confirm by email")';
        echo '</script>';
        header("refresh: 1; url=../index.php");

      } else {
        echo '<script language="javascript">';
        echo 'alert("Somthing Wrong!!!")';
        echo '</script>';
        header("refresh: 1; url=registerpage.php");
      }
  }
}

// Log in
if (isset($_POST['login'])) {
  session_start();
  $username = $_POST['username'];
  $pass = $_POST['password'];
  
  $result = $conn->query("SELECT * FROM tb_user WHERE username='" . $username . "'");

  if ($result->num_rows > 0) {
    foreach ($result as $row) {
      $newpass=$row['password'];
      $password = password_verify($pass , $newpass);
      if($password){
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['title'] = $row['title'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['company'] = $row['company'];
        $_SESSION['career'] = $row['career'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['country'] = $row['country'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['fax'] = $row['fax'];
        $_SESSION['extrameal'] = $row['extrameal'];
        $_SESSION['type'] = $row['type'];

        header("refresh: 1; url=showscan.php");
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