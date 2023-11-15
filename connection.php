<?php
$servername = "localhost";
$username = "";
$password = "";
$database = "dashein1_job_api";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}

?>