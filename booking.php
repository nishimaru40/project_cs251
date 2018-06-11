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
            <div align="center"><img class="logo" src="img/example_logo.png" title="Example Logo" alt="Example Logo"></div>
            <div class="h1">Lucifer Apartment</div>
           
            <div id="form-content">
                <div class="group">
                    <label for="date-from">Check In</label>
                    <div class="addon-right">
                        <input id="date-from" name="date-from" class="form-control" type="text">
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
                    <label for="name">ID</label>
                    <div><input id="ID" name="ID" class="form-control" type="ID" placeholder="IDnumber"></div>
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

    