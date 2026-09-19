<?php
$conn = new mysqli("localhost", "root", "", "sample_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>