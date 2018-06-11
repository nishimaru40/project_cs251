<html class="no-js"> <!--<![endif]-->
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
        <?php require("mysql/config.php");?>
            <?php 
                $bookID=$_POST['bookID'];
                $checkIn=$_POST['date-to'];
                $name=$_POST['name'];
                $adults=$_POST['adults'];
                $children=$_POST['children'];
                $idCard=$_POST['IDCard'];
                $email=$_POST['email'];
                $phone=$_POST['phone'];

                $sql="INSERT INTO book(bookID,checkIn,name,adults,children,idCard,email,phone) 
                    VALUES ('$bookID','$checkIn','$name','$adults','$children','$idCard','$email','$phone')";
            
            require("mysql/connect.php");
        
                $result=mysql_query($sql);
                if($result==1){
                    echo "New record created successfully";
                }else{
                    echo "Error: connection failed";
                }

            require("mysql/unconn.php");

            ?>

        <!-- Add your site or application content here -->
        <form id="booking-form" class="booking-form" name="form1" method="post" action="">
            <div align="center"><img class="logo" src="img/example_logo.jpg" title="Example Logo" alt="Example Logo"></div>
            <div class="h1">Booking form</div>
            <div id="form-message" class="message hide">
                Thank you for your enquiry!
            </div>
            <div id="form-content">
                <div class="group">
                    <label for="date">Check In</label>
                    <div class="addon-right">
                        <input id="date-to" name="date-to" class="form-control" type="text">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
              
            
                <div class="group">
                    <label for="contract">End of contract</label>
                    <div>
                        <select id="contract" name="contract" class="form-control">
                            <option value="1 years">1 year</option>
                            <option value="2 years">2 years</option>
                            <option value="3 years">3 years</option>
                        </select>
                    </div>
                </div>

                <div class="group">
                    <label for="room-type">Room type</label>
                    <div>
                        <select id="room-type" name="room-type" class="form-control">
                            <option value="Single room">Single room</option>
                            <option value="Double room">Double room</option>
                        </select>
                    </div>
                </div>
                

                <div class="group">
                    <label for="adults">Adults</label>
                    <div>
                        <select id="adults" name="adults" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                </div>
                <div class="group">
                    <label for="children">Children</label>
                    <div>
                        <select id="children" name="children" class="form-control">
                            <option value="-">-</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                </div>
                <div class="group">
                    <label for="name">Name</label>
                    <div><input id="name" name="name" class="form-control" type="text" placeholder="Name"></div>
                </div>
                <div class="group">
                    <label for="name">IDCard/Passport</label>
                    <div><input id="IDCard" name="IDCard" class="form-control" type="IDCard" placeholder="IDCard"></div>
                </div>
                <div class="group">
                    <label for="email">Email</label>
                    <div><input id="email" name="email" class="form-control" type="email" placeholder="Email"></div>
                </div>
                <div class="group">
                    <label for="phone">Phone</label>
                    <div><input id="phone" name="phone" class="form-control" type="text" placeholder="Phone"></div>
                </div>
              
                <div class="group submit">
                    <label class="empty"></label>
                    <div><input name="submit" type="submit" value="Submit"/></div>
                </div>
            </div>
            <div id="form-loading" class="hide"><i class="fa fa-circle-o-notch fa-spin"></i></div>
        </form>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>     
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
       
    </body>
</html>
