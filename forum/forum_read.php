<?php
    include '../db_conn.php';

    $idx = $_GET['idx'];
    $sql = "SELECT * FROM posts where idx=".$idx;
    $post = $conn -> query($sql);
    $row = $post -> fetch_array();
    $count = $row['count']+1;

    echo '<h2>'.$row['title'].'</h2>';
    echo ''.$row['content']."<br>";

    $sql = "UPDATE posts SET count='".$count."' WHERE idx='".$idx."'";
    $conn -> query($sql)
?>