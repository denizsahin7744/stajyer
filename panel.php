<?php

session_start();
if (!isset($_SESSION["id"])) {
    header("location: login.html");
}

?>

<html>
<head>
    <title>İşyeri Bilgi Formu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    .topnav {
        overflow: hidden;
        background-color: #333;
    }
    
    .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }
    
    .navbuttontype1:hover {
        background-color: #ea0f0f;
    }
    
    .navbuttontype1 {
    background-color: #ca0707;
    }

    .navbuttontype2:hover {
        background-color: #b0b0b0;
    }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
</head>
<body>
    <div class="topnav">
        <a class="navbuttontype2" href="index.php">Başvuru Formu</a>
        <a class="navbuttontype1" style="float:right" href="logout.php">Çıkış Yap</a>
      </div>

</body>
</html>

