<?php

var_dump($_POST);

$servername = "localhost";
$username = "";
$password = "";
$database = "dashein1_job_api";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}

$companyname = $_POST['companyname'];
$location = $_POST['location'];
$phone = $_POST['phone'];
$town = $_POST['town'];
$section = $_POST['section'];
$howmanystudents = $_POST['howmanystudents'];
$gender = $_POST['gender'];
$description = $_POST['description'];

$sql = "INSERT INTO companyform (companyname, companylocation, phone, town, section, howmanystudents, gender, companydescription)
        VALUES ('$companyname', '$location', '$phone', '$town', '$section', '$howmanystudents', '$gender', '$description')";

echo "SQL Query: $sql";

if ($conn->query($sql) === TRUE) {
    echo "Form data inserted successfully!";
    header("index.html")
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
