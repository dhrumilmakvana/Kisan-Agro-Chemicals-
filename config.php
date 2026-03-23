<?php
$conn = new mysqli("localhost", "root", "", "kisan_agro");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>