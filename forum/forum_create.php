<?php
    include "../db_conn.php";

    $tit = $_POST['title'];
    $content = $_POST['content'];
    $pw = md5($_POST['password']);
    
    $sql = "INSERT INTO posts (title, password, content) VALUE ('".$tit."','".$pw."','".$content."');";
    $conn -> query($sql);
    ?><script> alert('글작성 완료 '); location.href="../forum/forum_main.html";</script><?php
?>