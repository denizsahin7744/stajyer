<?php

include("connection.php");

$companyname = $_POST["companyname"];
$location = $_POST["location"];
$phone = $_POST["phone"];
$town = $_POST["town"];
$section = $_POST["section"];
$howmanystudents = $_POST["howmanystudents"];
$gender = $_POST["gender"];
$description = $_POST["description"];

$sql = "INSERT INTO companyform (companyname, companylocation, phone, town, section, howmanystudents, gender, companydescription)
        VALUES ('$companyname', '$location', '$phone', '$town', '$section', '$howmanystudents', '$gender', '$description')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
