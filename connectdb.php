<?php
//สร้างตัวแปรเพื่อใช้เชื่อม db
$servername = "localhost";
$username = "user_arm";
$password = "suradech1993";
$dbname = "db_tsb2024";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
date_default_timezone_set('Asia/Bangkok');
?>