<?php

    include "../db_conn.php";

    $sql = "SELECT * FROM posts WHERE 1";
    $posts = $conn -> query($sql);
    
    echo "<table border='1'>";
    echo "<tr>";
        echo "<th class='jb-th-1'>제목</th>";
        echo "<th>조회수</th>";
    echo "</tr>";
    foreach($posts as $post){
        echo "<tr>";
        echo '<th><a href="forum_read.html?idx='.$post['idx'].'">'.$post['title'].'</a></th>';
        echo '<th>'.$post['count'].'</th>';
    }
    echo "</table>";
?>