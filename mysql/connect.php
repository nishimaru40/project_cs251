<?php
    require ("mysql/config.php");
    $con = mysqli_connect($dbhost,$dbuser,$dbpass) or die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");
    //echo "เชื่อมต่อฐานข้อมูลสำเร็จ";
    mysqli_select_db($con,$dbname);

?>