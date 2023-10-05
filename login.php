<?php
    include "db_conn.php";

    $id = $_POST['id'];
    $pw = $_POST['pw'];

    $sql = "SELECT * FROM users WHERE username='".$id."'";    
    $result = $conn->query($sql);
    $row = $result->fetch_array();


    if($row != null){
        if($row['password'] == $pw){
            ?><script> alert('로그인 완료 '); location.href="../forum/forum_main.html";</script><?php
            
        } else{
            ?><script> alert('로그인 실패 '); location.href="..";</script><?php
        }
    }else{
        ?><script> alert('로그인 실패 '); location.href="..";</script><?php
    }



?>