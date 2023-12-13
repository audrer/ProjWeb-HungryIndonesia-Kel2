<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "HungryIndonesia";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "success";
}



?>
