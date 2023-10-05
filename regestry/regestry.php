<?php
    include "../db_conn.php";

    $id = $_POST["id"];
    $pw = $_POST["pw"];

    $sql = "INSERT INTO users(username, password) VALUE ('".$id."','".$pw."');";
    echo $sql;
    $conn->query($sql);
    ?>
    <script> alert('회원가입이 완료되었습니다. '); location.href="..";</script>
