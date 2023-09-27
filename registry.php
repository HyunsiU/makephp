<?php
    $ID = $_POST['ID'];
    $PW = $_POST['PW'];

    $con = mysqli_connect("localhost", "root", "", "login") or die ("Can't accress DB");

    $sql = "select * from info where id='".$ID."'";
    $row = mysqli_query($con, $sql);
    $total = mysqli_num_rows($row);
    
    if($total>0){
        ?> <script> alert('중복된 아이디입니다. 다른 아이디로 가입하세요 '); location.href=".."; </script> <?php
    } else{
        $sql = "insert into info (ID,PW) values('".$ID."','".md5($PW)."')";
        $result = mysqli_query($con, $sql);
        ?> <script> alert('회원가입이 완료되었습니다. '); location.href="..";</script> <?php
        
    }

?>