<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    require 'includes/database.php';
    $sql = "INSERT INTO article(title,content) VALUES('" . mysqli_escape_string($conn,$_POST["title"]) ." ' ,
     '" . mysqli_escape_string($conn,$_POST["content"]) ."' )";
    echo $sql;
    $results = mysqli_query($conn,$sql);
    if ($results==false){
        echo mysqli_error($conn);
    }
    else { //hata olmadı kaydetti
        $id=mysqli_insert_id($conn);
        echo "Kaydınız {$id} kayıt numarasıyla oluşturuldu";
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
