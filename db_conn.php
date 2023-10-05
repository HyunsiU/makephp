
<?php
    //mysql 연결 정보
    $servername = "localhost"; //서버의 실제 주소
    $username = "root"; //mysql ID
    $password = 'kdt_test';
    $dbname = "kdt_test";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn -> connect_error){
        die("Mysql 연결 실패" . $conn->connect_error);
    };
?>
