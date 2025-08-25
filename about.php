<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header("location: login.php");
        exit(); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="navbar.css">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
     
</head>
<body>
       <header>
            <div class="left-section">
                <img class="logo" src="Img/logo.jpeg" alt="">
                <label class="label" for="">EverClean</label>
            </div>

            <ul class="middle-section">
                <li><a href="index.php"><span>Home</span></a></li>
                <li><a href="dashboard.php"><span>Dashboard</span></a></li>
                <li><a href="Service.php"><span>Services</span></a></li>
                <li><a href="contact.php"><span>Contact</span></a></li>
                <li><a href="feedback.php"><span>Feedbacks</span></a></li>
                <li><a href="about.php"><span>About</span></a></li>
            </ul>

            <ul class="sidebar">
                <li onclick=" hideSidebar()"><img class="menu-remove" src="Img/cancel.png" alt=""></li>
                <li><a href="index.php"><span>Home</span></a></li>
                <li><a href="dashboard.php"><span>Dashboard</span></a></li>
                <li><a href="Service.php"><span>Services</span></a></li>
                <li><a href="contact.php"><span>Contact</span></a></li>
                <li><a href="feedback.php"><span>Feedbacks</span></a></li>
                <li><a href="about.php"><span>About</span></a></li>
            </ul>

            <div class="right-section">
                <button ><a href="login.php">Join</a></button>
                <img onclick="
                showSidebar()
            " class="menu" src="Img/menu.png" alt="">
            </div>
    </header>
    <main>
        <div class="top">
            <div class="left">

            </div>

            <div class="right">
                <h1>About Us</h2>
                <p>At EverClean, we are committed to building a cleaner and greener future. Our mission is to turn waste in to resoures, create awareness, and inspire communities to embrace sustainable living. <br>
                We believe that every small action counts, and together, we can make a significant impact on our environment.</p>
                </p>

                <a href="contact.html"><button>Contact Us</button></a>

            </div>
        </div>

        <div class="bottom">
            <h2>
                Our values
            </h2>

            <div class="values-div">
                <div>
                    <h4>Sustainablity</h4>
                    <p>We focus on eco-friendly solutions to reduse waste and protect nature.</p>
                </div>

                <div>
                    <h4>Community</h4>
                    <p>We engage and empower communities to join the recycling movement.</p>
                </div>

                <div>
                    <h4>Innovation</h4>
                    <p>We adopt modern techniques to transform waste in to valuable resources.</p>
                </div>
            </div>
        </div>
    </main>


     <footer>
         <p class="Copyright">Copyright &copy; 2025 <label class="label">EVERCLEAN </label> All Rights Reserved</p>
    </footer>

    <script>
        function showSidebar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'flex'
        }

        function hideSidebar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'none'
        }
    </script>

</body>
</html>