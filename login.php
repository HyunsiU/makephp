<?php
    $ID = $_POST['ID'];
    $PW = md5($_POST['PW']);
    $con = mysqli_connect("localhost", "root", "", "login") or die ("Can't access DB");;
    $sql = "SELECT *  FROM `info` WHERE `ID` LIKE '".$ID."'";
    $result = mysqli_query($con, $sql);

    $rows = mysqli_fetch_array($result);

    if($rows){
        if($rows['ID'] == $ID && $rows['PW'] == $PW){
            print("완성");
        } else {
            echo "Welcome! but this site has NOT data :( just Enjoy!";
        }
    }else{
        echo "Welcome! but this site has NOT data :( just Enjoy!";
    }
     

    
?>