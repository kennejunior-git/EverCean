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
    <title>Contact us</title>
    <link rel="stylesheet" href="contact.css">
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
            <h1>Contact Us</h1>
            <p>We're here to make waste collection easy for you. Reach us anytime!</p>
        </div>

       <div class="bottom">
            <div class="left">
                <form action="">
                    <label  class="name" id="name" for="name">Name </label><br>
                    <input type="text"><br>

                    <label class="email" id="email" for="email">  Email</label><br>
                    <input type="text"><br>

                    <label class="phone" id="phone" for="number">Phone</label><br>
                    <input type="number" required><br>
                    
                    <label class="message" for="text">Massage</label><br>
                    <textarea class="message-box" name="message" id="message-box" cols="35" rows="3"></textarea><br>
                    <button type="submit" >Send</button>
                </form>
            </div>

            <div class="right">
                <div class="contact-info">
                     <img class="one" src="Img/phone.jpeg" alt="">
                     <span>+237 676-434-432</span>
                </div>

                <div  class="contact-info">
                    <img src="Img/location.jpeg" alt="">
                    <span>everclean@gmail.com</span>
                </div>

                <div  class="contact-info">
                    <img class="three" src="Img/email.jpeg" alt="">
                    <span>Cameroun,Yaounde,Obili </span>
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
</html