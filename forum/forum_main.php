<?php

    include "../db_conn.php";

    $sql = "SELECT * FROM posts WHERE 1";
    $posts = $conn -> query($sql);
    
    foreach($posts as $post){
        echo '<div class="post-item">';
        echo '<a href="forum_read.html?idx='.$post['idx'].'"><h2 class="post-title">'.$post['title'].'</h2></a>';
        echo '</div>';
    }

?>