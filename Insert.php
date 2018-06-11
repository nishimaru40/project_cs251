<?php require("mysql/config.php");?>
<html>
    <head>
     <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Insert data</title>
    </head>
    <body>
        <?php 
            require("mysql/connect.php");
           
            if (isset($_POST['bookID'])&&isset($_POST['date-to'])&&isset($_POST['name'])&&isset($_POST['adults'])&&isset($_POST['children'])&&isset($_POST['IDCard'])
                 &&isset($_POST['email'])&&isset($_POST['phone'])) {
                $bookID=$_POST['bookID'];
                $checkIn=$_POST['date-to'];
                $name=$_POST['name'];
                $adults=$_POST['adults'];
                $children=$_POST['children'];
                $idCard=$_POST['IDCard'];
                $email=$_POST['email']; 
                $phone=$_POST['phone'];

           
            $sql = "INSERT INTO book(bookID,checkIn,name,adults,children,idCard,email,phone) 
            VALUES ($bookID,'$checkIn','$name',$adults,$children,$idCard,'$email',$phone)";
       
            $result=mysqli_query($con, $sql);
            
            if($result){
                echo "New record created successfully";
            }else{
                echo "Error: connection failed";
            }
        }
            

            require("mysql/unconn.php");

            ?>

    </body>
    </html>
    
