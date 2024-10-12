<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACPCE | Alumni Directory</title>
    <link rel = "icon" href = "images/vp_logo.jfif" type = "image/x-icon">
  
    <link rel="stylesheet" href="css/style12.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" >
   
</head>
<body>
<header>
    
    <div class="wrapper">
        <div class="logo">
            <img src="images/ACPCE.png" style="width: 150px">
        </div>
        <ul class="nav-area">
            <li><a href="index.php">Home</a></li>
            <li><a href="Alumni.php">Alumni</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="welcome-text">
        <h1>Alumni <span>Directory</span></h1>
        <img src= "images/alumni.jpg" style="width:600px" height="400px">
        
    </div>
   
</header>
 
<div class="footer-dark">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <ul><h3>Services</h3>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="Alumni.php">Alumni</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                   
                    <ul> <h3>About</h3>
                        <li><a href="#"></a></li>
                        <li><a href="aboutus.php">Team</a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    
                    <p><h3>Alumni Directory</h3>An Alumni is men and women who have completed their studies, esp. at a college or university</p>
                </div>
                <div class="col item social">
                    <a href="#"><i class="icon ion-social-facebook"></i></a>
                    <a href="#"><i class="icon ion-social-twitter"></i></a>
                    <a href="#"><i class="icon ion-social-snapchat"></i></a>
                    <a href="#"><i class="icon ion-social-instagram"></i></a>
                </div>
            </div>
            <p class="copyright">Alumni Directory 2024</p>
        </div>
    </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
