<?php
use PHPMailer\PHPMailer\PHPMailer;
$email = $_POST['user_forget'];
$name = "ARM";
$header = "หัวข้อ";
$detail = "รายละเอียด";
echo $email;

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

$mail = new PHPMailer();

// SMTP Settings
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "suradech.ku@kmitl.ac.th"; // enter your email address
$mail->Password = "aC8yijfmsl"; // enter your password
$mail->Port = 857;
$mail->SMTPSecure = "ssl";

//Email Settings
$mail->isHTML(true);
$mail->setFrom($email, $name);
$mail->addAddress("alarm.1993@gmail.com"); // Send to mail
$mail->Subject = $header;
$mail->Body = $detail;

if ($mail->send()) {
    $status = "success";
    $response = "Email is sent";
} else {
    $status = "failed";
    $response = "Something is wrong" . $mail->ErrorInfo;
}

exit(json_encode(array("status" => $status, "response" => $response)));
?>