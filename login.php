<?php
include("connection.php");

$username = $_POST['username'];
$password = $_POST['password'];

$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

$sql = "SELECT * FROM users WHERE username = '$username' AND upassword = '$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
if ($username == NULL || $username == "") {
    header("Location: login.html");
}elseif ($password == NULL || $password =="") {
    header("Location: login.html");
}else {

    if ($row["username"] == $username && $row["upassword"] == $password) {
        echo "Giriş Yapıldı.";
        session_start();
        $_SESSION["id"] = $row["id"];
        echo "session " . $_SESSION['id'] . " row " . $row["id"];
        $_SESSION["formid"] = 1;
        header("Location: panel.php");
    }else {
        echo "Giriş Yapılamadı";
    }
}


?>

