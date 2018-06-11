
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Lucifer Apartment</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <form id="booking-form" class="booking-form" name="form1" method="post" action="">
            <div align="center"><img class="logo" src="img/example_logo.jpg" title="Example Logo" alt="Example Logo"></div>
            <div class="h1">ตารางผู้เข้าจอง</div>
            <div id="form-message" class="message hide">
            </div>
            
            <?php 
            
                require ("mysql/connect.php");
                $sql="select * from books";

                $result=mysqli_query($con,$sql);

                if($result){
                    echo '<CENTER><TABLE BORDER = "2"> 
                
             <TR> <TH> วันเข้าพัก </TH> 
             <TH> ระยะสัญญา </TH> <TH> ชื่อและนามสกุล </TH><TH> รหัสบัตรประชาขน/รหัส passpost </TH><TH> จำนวนผู้ใหญ่ </TH>
             <TH> จำนวนเด็ก </TH><TH> อีเมล์ </TH><TH> เบอร์ติดต่อ </TH></TR>
         </TABLE></CENTER>';
                    while($record=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                        echo "วันเข้าพัก: ".$record['checkIn']."<br>";
                        echo "ระยะสัญญา: ".$record['endOfContract']."<br>";
                        echo "ชื่อและนามสกุล: ".$record['name']."<br>";
                        echo "รหัสบัตรประชาขน/รหัส passpost: ".$record['idCard']."<br>";
                        echo "จำนวนผู้ใหญ่: ".$record['adults']."<br>";
                        echo "จำนวนเด็ก: ".$record['children']."<br>";
                        echo "อีเมล์: ".$record['email']."<br>";
                        echo "เบอร์ติดต่อ: ".$record['phone']."<br>";
                        echo "<hr>";


                        echo '<CENTER><TABLE BORDER = "2" > 
                            <TR> <TD> $record['checkIn'] </TD> 
                            <TD> ข้อมูล 2 </TD> </TR>
                            </TABLE></CENTER>';
                    }
                    
                } else{

                }
            
            ?>
            
        
           
         

            </div>
            <div id="form-loading" class="hide"><i class="fa fa-circle-o-notch fa-spin"></i></div>
        </form>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>     
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
