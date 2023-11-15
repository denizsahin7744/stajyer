<?php

include("connection.php");

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "INSERT INTO users (username, upassword)
        VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: login.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>