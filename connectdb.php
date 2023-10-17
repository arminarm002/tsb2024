<?php
//สร้างตัวแปรเพื่อใช้เชื่อม db
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_spc2024";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>