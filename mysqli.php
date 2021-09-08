<?php
$servername = "localhost";
$username = "root";
$password = "Daun2600!@";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("mySQL 연결 실패" . $conn->connect_error);
}
echo "mySQL 연결 성공!";
?>


