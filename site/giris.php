<?php
$ogrenci = "12345";
$osifre= "1416";

if(isset($_POST["ogrencino"])){
    $ogrencino =$_POST["ogrencino"];
    $sifre = $_POST["sifre"];

    if($ogrencino == $ogrenci && $sifre ==$osifre){   
        echo "";
        header("Refresh:0; url=ortalama.php");
    }
    else {
        echo "yanlış giriş";
        header("Refresh:5; url=giris.php");
    }
}


?>

        <form action="giris.php" method="post">
        <label for="ad"> Kullanıcı Adı </label><br>
        <input type="text" name="ogrencino"/><br>
        <label for="s">Sifre</label><br>
        <input type="password" name="sifre"/><br>
        <input type="submit" value="Giris Yap"/>

</form>


 
 



