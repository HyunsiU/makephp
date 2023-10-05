<?php
    include '../db_conn.php';

    $idx = $_GET['idx'];
    $sql = "SELECT * FROM posts where idx=".$idx;
    
    $post = $conn -> query($sql);
    $row = $post -> fetch_array();

    echo '<h2>'.$row['title'].'</h2>';
    echo ''.$row['content'];
?>