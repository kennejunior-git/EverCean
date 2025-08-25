<?php
session_start();

// Debug: Show session content
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

// If no email in session, explain why
if(!isset($_SESSION['email'])){
    echo "<p style='color:red;'>Session does not contain email. Redirecting to login...</p>";
    header("refresh:3; url=login.php"); // Wait 3 seconds then redirect
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="navbar.css">
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
       <div>
        <button  class="Disconnect" onclick="window.location.href='logout.php'">Logout</button>
         <h1>Welcome back <span><?= $_SESSION['name']; ?></span></h1>
       </div>
        <h2>Dashboard</h1>


        <div class="container">
        <div class="top">
            <div class="info-div">
                <label>Next collection</label>
                <span>23 August,05:00 AM</span>
                <label for="">On the way</label>
            </div>

            <div class="info-div">
                <label for="">Collections this month</label>
                <span>0</span>
            </div>

            <div class="info-div">
                <label for="">Balance</label>
                <span>0 XAF</span>
            </div>

            <div class="info-div">
                <label for="">Avrage Rating</label>
                <span>0/5</span>
            </div>
        </div>


        <div class="bottom">
            <div class="info-div">
                <label>New collection</label>
                <span>Plan in 1 minute</span>
                <a href="Service.html"> <button>Order</button></a>
            </div>

            <div class="info-div">
                <label for="">My collections</label>
                <span>View history</span>
                <button>View</button>
            </div>

            <div class="info-div">
                <label for="">Payments</label>
                <span>PDF invoices.</span>
                <button>Check</button>
            </div>

            <div class="info-div">
                <label for="">Average rating</label>
                <span>0/5</span>
            </div>
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