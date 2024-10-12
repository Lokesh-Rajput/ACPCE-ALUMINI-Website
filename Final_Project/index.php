<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACPCE | Alumni Directory</title>
    <link rel = "icon" href = "images/vp_logo.jfif"  type = "image/x-icon">  
    <link rel="stylesheet" href="style.css">

    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <!-- header design -->
    <header class="header">
        <a href="#" class="logo">ACPCE<span class="animate" style="--i:1;"></span></a>

        <div class="bx bx-menu" id="menu-icon"><span class="animate" style="--i:2;"></span></div>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="aboutus.php">About</a>
            <a href="Alumni.php">Alumni</a>
            <a href="#contact">Contact</a>
            <a href="logout.php">Logout</a>

            <span class="active-nav"></span>
            <span class="animate" style="--i:2;"></span>
        </nav>
    </header>

    <!-- home section design -->
    <section class="home show-animate" id="home">
        <div class="home-content">
            <!-- <h1>Hi, <span>all</span><span class="animate" style="--i:2;"></span></h1> -->
            <div class="text-animate">
                <h3>ALUMNI DIRECTORY SYSTEM</h3>
                <span class="animate" style="--i:3;"></span>
            </div>
            <p>Alumni is a term that refers to a group of people who have graduated from a school, college, or university. The singular form of the word is alumnus for a man and alumna for a woman, while alum or graduate is a gender-neutral option. The plural of alumnus is alumni, and the plural of alumna is alumnae
                Alumni can offer support to current students in many ways, including helping them find work placements and launch their careers. Alumni can also donate their time to offer career support, which can enhance the students' experience and give them an advantage in the job market. 
                <span class="animate" style="--i:4;"></span>
            </p>

            <div class="btn-box">
              
                <a href="#" class="btn">Let's Talk</a>
                <span class="animate" style="--i:5;"></span>
            </div>
        </div>

        <div class="home-sci">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-linkedin'></i></a>
            <span class="animate" style="--i:6;"></span>
        </div>

        <div class="home-imgHover"></div>
        <span class="animate home-img" style="--i:7;"></span>
    </section>

    <!-- about section design -->
    <section class="about" id="about">
        <h2 class="heading">About <span>College</span><span class="animate scroll" style="--i:1;"></span></h2>

        <div class="about-img">
            <img src="images/about.jpg" alt="">
            <span class="circle-spin"></span>
            <span class="animate scroll" style="--i:2;"></span>
        </div>

        <div class="about-content">
            <h3>Hi there! Glad to see you here.<span class="animate scroll" style="--i:3;"></span></h3>
            <p>Hello! Annasaheb Chudaman Patil College of Engineering (ACPCE) established in 1992 is an offspring of the Jawahar Education Society, the group that runs several schools and colleges for formal and technical education.
                <span class="animate scroll" style="--i:4;"></span>
            </p>

            <div class="btn-box btns">
                <a href="#contact" class="btn">Contact</a>
                <span class="animate scroll" style="--i:5;"></span>
            </div>
        </div>
    </section>

    <!-- contact section design -->
    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>college</span><span class="animate scroll" style="--i:1;"></span></h2>

        <form action="#">
            <div class="input-box">
                <div class="input-field">
                    <input type="text" placeholder="Full Name" required>
                    <span class="focus"></span>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Email" required>
                    <span class="focus"></span>
                </div>

                <span class="animate scroll" style="--i:3;"></span>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input type="number" placeholder="Mobile Number" required>
                    <span class="focus"></span>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Email Subject" required>
                    <span class="focus"></span>
                </div>

                <span class="animate scroll" style="--i:5;"></span>
            </div>

            <div class="textarea-field">
                <textarea name="" id="" cols="30" rows="10" placeholder="Your Message" required></textarea>
                <span class="focus"></span>

                <span class="animate scroll" style="--i:7;"></span>
            </div>

            <div class="btn-box btns">
                <button type="submit" class="btn">Submit</button>

                <span class="animate scroll" style="--i:9;"></span>
            </div>
        </form>
    </section>

    <!-- footer design -->
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2024 | Designed and
                Maintenance by LP | All
                Rights Reserved</p>

            <span class="animate scroll" style="--i:1;"></span>
        </div>

        <div class="footer-iconTop">
            <a href="#"><i class='bx bx-up-arrow-alt'></i></a>

            <span class="animate scroll" style="--i:3;"></span>
        </div>
    </footer>


    <script src="script.js"></script>
</body>

</html>