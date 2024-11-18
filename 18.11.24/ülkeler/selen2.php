<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
    mysqli_report(MYSQLI_REPORT_OFF); //MySQL de hatalara rağmen devam et
    ini_set('display_errors', 0); //PHP de hata mesajlarını gösterme
    $db_host = "localhost"; //internet adresi
    $db_name = "world"; //veri tabanının adı
    $db_user = "cms_www"; //kullanıcı adı
    $db_pass = "cms123"; //kullanıcı şifresi
    //mysqli_connect fonksiyonu veritabanına bağlanmak için
    //bu fonksiyon true verirse bağlanıldı.
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    $gelen = $_GET;
    $gelenid = $gelen["id"];
    $sql = "SELECT * FROM countries where id={$gelenid}";
    $results = mysqli_query($conn, $sql);
    $country = mysqli_fetch_assoc($results);
    echo "<h1>{$country["name"]}</h1>";
    echo "<p>Başkenti: {$country["capital"]}</p>";
    echo "<p>Para birimi: {$country["currency_name"]}</p>";
    ?>
</body>

</html>
