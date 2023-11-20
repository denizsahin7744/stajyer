<?php

session_start();
if (!isset($_SESSION["id"])) {
    header("location: login.html");
} else {
    echo "Admin Panel";
}
?>
