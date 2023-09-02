<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Booking</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">   
    <style>
        .well
        {
            background: rgba(0,0,0,0.7);
            border: none;
    
        }
        .wellfix
        {
            background: rgba(0,0,0,0.7);
            border: none;
            height: 150px;
            padding-top: 10px;
           
        }
		body
		{
			background-image: url('images/home_bg.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
		}
		p
		{
			font-size: 13px;
		}
        .pro_pic
        {
            border-radius: 50%;
            height: 50px;
            width: 50px;
            margin-bottom: 15px;
            margin-right: 15px;
        }	
        .owner
        {
            font-size:18px;
        }
    </style>  
</head>

<body>
    <div class="container">
       <img class="img-responsive" src="images/home_banner.jpg" style="width:100%; height:180px;">      
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="room.php">Room &amp; Facilities</a></li>
                    <li><a href="reservation.php">Online Reservation</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://www.facebook.com"><img src="images/facebook.png"></a></li>
                    <li><a href="http://www.twitter.com"><img src="images/twitter.png"></a></li>                    
                </ul>
            </div>
        </nav>

     
        <div class="jumbotron">
        <div class="w3-content w3-section">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/1.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/2.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/3.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/4.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/5.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/6.jpg" style="width:100%; height:450px;">
        </div>    
        </div>
        <hr>
        <div class="row" style="color: white">
            <div class="col-md-12 well" >
              <h4><strong style="color: white">About</strong></h4><br>
              <p>Online hotel reservations are a best method for booking hotel rooms and can be done from anywhere with an internet connection. Travelers can book rooms on a computer by using online security to protect their privacy data information and by using several online travel agents to compare prices and facilities at different hotels.</p>
              <br>
              <p>Prior to the Internet, travelers could write, telephone the hotel directly, or use a travel agent to make a reservation. Nowadays, online travel agents have pictures of hotels and rooms, information on prices and deals, and even information on local resorts. Many also allow reviews of the traveler to be recorded with the online travel agent.</p>
              <br>
              <p>Online hotel reservations are also helpful for making last minute travel arrangements. Hotels may drop the price of a room if some rooms are still available. There are several websites that specialize in searches for deals on rooms.</p>       
            </div>  
        </div>
        <div class="row" style="color: white">
            <div class="col-md-4 wellfix">
              <h4><strong>Contact Us</strong></h4><hr>
              Address : jaipur chokidhani<br>
              Mail : shubhamthapar04@gmail.com <br>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4 wellfix">
                <h4><strong>Developed By</strong></h4><hr>
                <p class="owner">Mr. Shubham Singhal</p>

            </div>
        </div>
    </div>
    <script src="my_js/slide.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>