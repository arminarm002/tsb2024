<?php
include($_SERVER['DOCUMENT_ROOT'] . '/db/connectdb.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";
if (isset($_POST['forgot'])) {
    $inputemail = $_POST['user_forget'];
    $numrand = (mt_rand());
    $password = password_hash($numrand, PASSWORD_DEFAULT);

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0; //อาร์ม : "SET = 0 to redirect , SET = SMTP::DEBUG_SERVER to Defaul
        $mail->isSMTP();                                  //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                   //Set the SMTP server to send through
        $mail->SMTPAuth = true;                           //Enable SMTP authentication
        $mail->Username = 'noreplytsb2024@gmail.com';      //SMTP username
        $mail->Password = 'xxjt iuav ucza eicu';          //SMTP password
        $mail->SMTPSecure = "SSL";                        //Enable implicit TLS encryption
        $mail->Port = 587;                                //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('noreplytsb2024@gmail.com', 'Admin TSB2024');
        $mail->addAddress($inputemail, 'User');     //Add a recipient
        $mail->addReplyTo('noryply@kmitl.ac.th', 'Information');

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'TSB2024 : New Password';
        $mail->Body = 'New Password for Login TSB2024 Website : ' . $numrand;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $sql = $conn->query("UPDATE tb_user SET password='$password' WHERE email='" . $inputemail . "' ");
        if ($sql) {
            $mail->send();
            header("refresh: 1; url=login.php");
            echo '<script language="javascript">';
            echo 'alert("Message has been sent")';
            echo '</script>';
        } else {
            header("refresh: 1; url=forgetpassword.php");
            echo '<script language="javascript">';
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            echo '</script>';
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

// exit(json_encode(array("status" => $status, "response" => $response)));
?>