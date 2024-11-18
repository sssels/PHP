<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"
    </head>
    <body>
        <h1>Welcome to My BLOG!</h1>
        <?php
        $db_host = "localhost";//internet adresi
        $db_name = "world";//veri tabanının adı
        $db_user ="cms_www";//kullanıcı adı
        $db_pass = "cms123";//kullanıcı şifresi
        //mysqli_connect fonksiyonu veritabanına bağlanmak için
        //bu fonksiyon true verirse bağlanıldı.
        $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
        if($conn)
            echo "veri tabanına bağlanıldı";
        else
            echo "veri tabanına bağlanılamadı";
        

            $sql = "SELECT * FROM countries";

            //Veri tabanında bir sql sorgusu işletmek için mysqli_query fonk.
            //Eğer bu fonksiyon false verirse bir hata var.
            $results = mysqli_query($conn,$sql);
            if ($results == false){ //hata var
                echo mysqli_error($conn);
            } else // hata yok
            {
                echo "<p>Hata yok</p>";
                //sonuçları bir array içerisine koymak için mysqli_fetch_all fonksiyonu
                $ulkeler = mysqli_fetch_all($results,MYSQLI_ASSOC);
                echo "<ul>";
                foreach($ulkeler as $ulke){
                    echo "<li><a href=selen2.php?id={$ulke["id"]}>" . $ulke["name"] . "</a></li>";
                };
                echo "</ul>";
                
            };
        ?>
    </body>
</html>
