<?php
var_dump($_GET);
if(isset($_GET["sifre1"]) and isset($_GET["sifre2"]))

$sifre1=$_GET["sifre1"];
$sifre2=$_GET["sifre2"];
if($sifre1==$sifre2)
echo "Kayıt tamam";
else 
echo "Şifreler uyumsuz, tekrar dene.";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>My Form</h1>
        <form>
            <div>Adı Soyadı <input type="text" name="adi-soyadi"></div>
            <div>Adres <textarea name="adres" rows="10" cols="30"></textarea></div>
            <div>Şifre <input type="password" name="sifre1"></div>
            <div>Şifre tekrar <input type="password" name="sifre2"></div>
            <div><input type="submit" value="Gönder"></div>
            <?php
            if ($sifre1==$sifre2){
            echo "Kayıt tamamlandı";}
            else{ 
            echo "Şifreler uyumsuz, tekrar dene.";}
            ?>
        </form>

    </body>
</html>
