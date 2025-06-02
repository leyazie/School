<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "nilai_mkk";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $connh->connect_error);
}
?>