<?php
session_start();

if (!isset($_SESSION["id"])) {
    header("location: login.html");
} elseif (!isset($_SESSION["formid"])) {
    header("location: login.html");
} else {
    include("connection.php");
    $sql = "SELECT * FROM companyform WHERE id = ". (int)$_SESSION["formid"];
    $result = mysqli_query($conn, $sql);
    $form = mysqli_fetch_array($result);

    $isyeriadi=$form["companyname"];
    $isyeriadresi=$form["companylocation"];
    $telefonnumarasi=$form["phone"];
    $ilce =$form["town"];
    $bolum ="";
    $istenilenogrenci=$form["howmanystudents"];
    $cinsiyet ="";
    $aciklama=$form["companydescription"];

    if($form["section"] == "informatics"){
        $bolum = "Bilişim";
    }elseif($form["section"] == "accounting"){
        $bolum = "Muhasebe";
    }else{
        $bolum = " Bulunamadı";
    }

    if($form["gender"] == "woman"){
        $cinsiyet = "Kız";
    }elseif($form["gender"] == "man"){
        $cinsiyet = "Erkek";
    }elseif($form["gender"] == "both"){
        $cinsiyet = "Hem Kız Hem Erkek";
    }else{
        $cinsiyet = " Bulunamadı";
    }

}

?>

<html>
<head>
    <title>İşyeri Bilgi Formu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div class="container mt-4">
    <form>
            <div class="form-group">
                <label for="isyeriAdi">İşyeri Adı:</label>
                <input type="text" class="form-control" id="companyname" name="companyname" placeholder="İşyeri Adı" value="<?php echo $isyeriadi; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="isyeriAdresi">İşyeri Adresi:</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="İşyeri Adresi" value="<?php echo $isyeriadresi; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="telefonNumarasi">Telefon Numarası:</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Telefon Numarası" value="<?php echo $telefonnumarasi; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="town">İlçe:</label>
                <input type="text" class="form-control" id="town" name="town" placeholder="İlçe" value="<?php echo $ilce; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="section">İstenilen Öğrenci Bölümü:</label>
                <input type="text" class="form-control" id="town" name="town" placeholder="Bölüm" value="<?php echo $bolum; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="howmanystudents">İstenilen Öğrenci Sayısı:</label>
                <input type="number" class="form-control" id="howmanystudents" name="howmanystudents" placeholder="İstenilen Öğrenci Sayısı" value="<?php echo $istenilenogrenci; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="gender">İstenilen Öğrenci Cinsiyeti:</label>

                <input type="text" class="form-control" id="town" name="town" placeholder="Cinsiyet" value="<?php echo $cinsiyet; ?>" readonly>

           
            </div>
            <div class="form-group">
                <label for="description">Açıklama:</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Açıklama" readonly><?php echo $aciklama; ?></textarea>
            </div>
        </form>
    </div>
</body>
</html>
