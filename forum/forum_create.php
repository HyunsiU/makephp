<?php
    include "../db_conn.php";

    $tit = $_POST['title'];
    $content = $_POST['content'];
    $pw = md5($_POST['password']);
    
    $sql = "INSERT INTO posts (title, password, content, see, screte, count) VALUE ('".$tit."','".$pw."','".$content."','1','1','0');";
    print($sql);
    $conn -> query($sql);
    ?><script> alert('글작성 완료 '); location.href="../forum/forum_main.html";</script><?php
?>