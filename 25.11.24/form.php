<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
    echo "POST:" . var_dump($_POST);
else
echo "GET:" . var_dump($_GET);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1> My Form </h1>
        //<form method ="GET">  boş girilen bilgiler GET metoduyla aynı forma gönderilir.
          <form method="POST">
            <fieldset>
                <legend>Kisisel Bilgiler</legend>
            <div>Adı Soyadı <input type = "text" name ="ad" required></div>
            <div>Doğum Yeri <input type = "text" name ="dogumyeri"></div>
            <div>Doğum Tarihi <input type = "date" name ="dogumtarihi"></div>
            <div><input type = "submit" value ="kaydet"></div>
            </fieldset>
            <fieldset>
                <legend>İletisim Bilgileri </legend>
                <div>Telefon <input type = "number" name ="telefon"></div>
                <div>Email<input type = "email" name="mail"></div>
                <div>Adres <textarea name="adres" rows="10" cols="30"></textarea></div>
                <div>Sehir<input type = "text" name="sehir"></div>
                <div><input type ="submit" value ="kaydet"></div>
            </fieldset>
        </form>
    </body>
</html>
