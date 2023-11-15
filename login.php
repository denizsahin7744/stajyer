<?php
include("connection.php");

$username = $_POST['username'];
$password = $_POST['password'];

$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

$sql = "SELECT * FROM users WHERE username = '$username' AND upassword = '$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if ($row["username"] == $username && $row["upassword"] == $password) {
    echo "Giriş Yapıldı.";
    session_start();
    $session["username"] = $username;
}else {
    echo "Giriş Yapılamadı";
}
?>
