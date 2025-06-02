<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "daftar_laisa";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $connh->connect_error);
}
?>