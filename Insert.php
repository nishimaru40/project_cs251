<?php


require ("mysql/connect.php");

$Checkin = $_POST['date'];
$endOfCon = $_POST['contract'];
$Name = $_POST['name'];
$IDCard = $_POST['IDCard'];
$Adults = $_POST['adults'];
$Children = $_POST['children'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];



 
$sql = "insert into books (checkIn,endOfContract,name,idCard,adults,children,email,phone)"

. "values ('$Checkin','$endOfCon','$Name','$IDCard','$Adults','$Children','$Email','$Phone')";

 
$add = mysqli_query($con,$sql);
if($add){
    echo "<script>";
    echo "alert(\" บันทึกข้อมูลการจองสำเร็จ รอติดต่อกลับทางโทรศัพท์ค่ะ\");";
    echo "</script>";
    echo "<meta http-equiv=refresh content=1;URL=home.php>";
}
else{
    echo("ผิดพลาด โปรดลองใหม่อีกครั้ง");
    
}

    
?>