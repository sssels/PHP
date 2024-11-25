<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    require 'includes/database.php';

    $sql = "INSERT INTO article(title,content) VALUES(?, ?)";
    $stmt =mysqli_prepare($conn,$sql);
    if($stmt==false)
        echo mysqli_error($conn,$sql);
    else{
        //sql komutuna parametreleri bağlıyoruz:
        mysqli_stmt_bind_param($stmt,"ss",$_POST["title"],$_POST["content"]);
        //sql komutunu çalıştır:
        if(mysqli_stmt_execute($stmt)){//hata yok
            $id=mysqli_insert_id($conn);
            echo "Kaydınız {$id} kayıt numarasıyla oluşturuldu";
        }
        else //hata var
            echo mysqli_stmt_error($stmt);
    }
}
?>
<!DOCTYPE html>
<html>
    <?php require "includes/header.html";?>
    <body>
        <h1>New Article</h1>
        <form method = "POST">
            <div><label for ="title">Title</label><input type="text" name ="title" id="title"></div>
            <div><label for ="content">content</label><textarea name ="content" id="content" rows="10" cols="30"></textarea></div>
            <div><input type="submit" value="Save"></div>
        </form>

    </body>
</html>
