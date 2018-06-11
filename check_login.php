<?php 
session_start();
    
        if(isset($_REQUEST['adminID'])){
				//connection
                include ("mysql/connect.php");
				//รับค่า user & password
                  $Username = $_REQUEST['adminID'];
                  $Password = $_REQUEST ['password'];

                  echo " $Username";
                  echo "  $Password";
				//query 
                  $sql="SELECT * FROM admins Where adminID='".$Username."' and password='".$Password."' ";
 
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){
 
                      $row = mysqli_fetch_array($result);
 
                        Header("Location: Manage.php");
 
                      
 
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }

        }else{
 
                echo "ERROR";
             Header("Location: admin.php"); //user & password incorrect back to login again
 
        }
?>