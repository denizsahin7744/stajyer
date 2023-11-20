<!DOCTYPE html>
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
        background-color: #60adff;
    }
    
    .navbuttontype1 {
        background-color: #007bff;
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
        <?php 
        session_start();
        if (!isset($_SESSION["id"])) {
            $hedef = "login.html";
            $yazi = "Giriş Yap";
        }else{
            $hedef = "panel.php";
            $yazi = "Öğretmen Paneli";
        }
        ?>
        <a class="navbuttontype1" style="float:right" href="<?php echo $hedef;?>"><?php echo $yazi;?></a>
      </div>
    <div class="container mt-4">
        <h2>İşyeri Bilgi Formu</h2>
        
        

        <form action="savetodb.php" method="post">
            <div class="form-group">
                <label for="isyeriAdi">İşyeri Adı:</label>
                <input type="text" class="form-control" id="companyname" name="companyname" placeholder="İşyeri Adı" required>
            </div>
            <div class="form-group">
                <label for="isyeriAdresi">İşyeri Adresi:</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="İşyeri Adresi" required>
            </div>
            <div class="form-group">
                <label for="telefonNumarasi">Telefon Numarası:</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Telefon Numarası" required>
            </div>
            <div class="form-group">
                <label for="town">İlçe:</label>
                <input type="text" class="form-control" id="town" name="town" placeholder="İlçe" required>
            </div>
            <div class="form-group">
                <label for="section">İstenilen Öğrenci Bölümü:</label>
                <select required class="form-control" id="section" name="section">
                    <option selected disabled>Seçiniz</option>
                    <option value="accounting">Muhasebe</option>
                    <option value="informatics">Bilişim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="howmanystudents">İstenilen Erkek Öğrenci Sayısı:</label>
                <input type="number" class="form-control" id="howmanyboystudents" name="howmanyboystudents" placeholder="İstenilen Erkek Öğrenci Sayısı" max="10" min="0" required>
            </div>
            <div class="form-group">
                <label for="howmanystudents">İstenilen Kız Öğrenci Sayısı:</label>
                <input type="number" class="form-control" id="howmanygirlstudents" name="howmanygirlstudents" placeholder="İstenilen Kız Öğrenci Sayısı" max="10" min="0" required>
            </div>
            <div class="form-group">
                <label for="description">Açıklama:</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Açıklama"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" >Formu Gönder</button>   
        </form>
    </div>
</body>
</html>