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
    <title>Feedbacks</title>
    <link rel="stylesheet" href="feedback.css">
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
         <div>
            <h2>What do you think?</h2>
            <p>We whould love to hear your thoughts! Please share your feedbacks below.</p>
        </div>

        <div>
            <img src="" alt="">
        </div>
       </div>


        <div class="feedback-form">
            <form action="">
                <label for="name">Name</label><br>
                <input type="text" id="name" name="name" required><br>

                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" required><br>

                <label for="feedback">Feedback</label><br>
                <textarea id="feedback" name="feedback" rows="4" required></textarea><br>

                <button type="submit">Submit</button>
            </form>
        </div>

        <div class="feedbacks">
            <h2>Feedbacks</h2>
            <div class="feedback-item">
                <p><strong>Takou Ernest:</strong> Great service! Very satisfied with the waste collection.</p>
            </div>
            <div class="feedback-item">
                <p><strong>kenmoe Arnol:</strong> Quick and efficient. Will use again!</p>
            </div>
            <div class="feedback-item">
                <p><strong>Kenne Junior:</strong> Friendly staff and reliable service.</p>
            </div>

            <div class="feedback-item">
                <p><strong>Mary Joseline:</strong> Excellent service, highly recommend!</p>
            </div>
        </div>
    </main>

     <footer>
         <p class="Copyright">Copyright &copy; 2025 <label class="label">EverClean</label> All Rights Reserved</p>
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