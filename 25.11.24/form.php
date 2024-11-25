<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
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
    //<form method="GET"> boş girilen bilgiler GET metoduyla aynı forma gönderilir.
        <form method="POST">
            <fieldset>
                <legend>Kisisel Bilgiler</legend>
                <div><label for="Ad">Adı Soyadı</label> <input type="text" id="ad" required></div>
                <div>Doğum Yeri <input type="text" name="dogumyeri" placeholder="Doğduğunuz Şehir"></div>
                <div>Doğum Tarihi <input type="date" name="dogumtarihi"></div>
                <div>Cinsiyet 
                <input type="radio" name = "cinsiyet" value="1" id="kadin"> <label for = "kadin">Kadin</label>
                <input type="radio" name = "cinsiyet" value="2" id="erkek"> <label for = "erkek">Erkek</label>
                <input type="radio" name = "cinsiyet" value="0" checked> Belirtmek İstemiyorum
                </div>
                <div><input type="submit" value="kaydet"></div>
            </fieldset>
            <fieldset>
                <legend>İletisim Bilgileri </legend>
                <div>Telefon <input type="number" name="telefon" disabled></div>
                <div>Email<input type="email" name="mail"></div>
                <div>Adres <textarea name="adres" rows="10" cols="30"></textarea></div>
                <div>Sehir<select name="sehir">
                        <option value="1">Adana</option>
                        <option value="2" disabled>Adıyaman</option>
                        <option value="3">Afyonkarahisar</option>
                        <option value="4">Ağrı</option>
                        <option value="26" selected>Eskisehir</option>
                    </select></div>
            </fieldset>
            <fieldset>
                <legend>İlgi Alanları</legend>
                <div><input type ="checkbox" name="ilgi" value="1" id = "muzik"><label for ="muzik">Müzik dinlemek</label></div>
                <div><input type ="checkbox" name="ilgi" value="2" id = "spor"><label for ="spor">Spor yapmak</label></div>
                <div><input type ="checkbox" name="ilgi" value="3" id = "meditasyon"><label for ="meditasyon">Meditasyon yapmak</label></div>
                <select name ="ders" multiple>
                    <optgroup label="1.sınıf">
                    <option value ="1">Analitik Geometri</option>
                    <option value ="2">Soyut Matematik</option>
                    </optgroup>
                    <optgroup label="2.sınıf">
                    <option value ="3">Analiz</option>
                    <option value ="4">Programlama</option>
                    </optgroup>
                    <optgroup label="3.sınıf">
                    <option value ="5">Topoloji</option>
                    <option value ="5">Soyut Cebir</option>
                    </optgroup>
                </select>
            </fieldset>
            //<div><input type="reset" value="temizle"></div>
            <div><input type="submit" value="kaydet"></div>
        </form>
</body>

</html>
