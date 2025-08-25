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
    <title>Services</title>
    <link rel="stylesheet" href="service.css">
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
       <h1>
        New Collection
       </h1>

       <div class="bottom">
        <div class="left">
            <div>
                <label for="">Category</label>
                <select name="" id="">
                    <option value="">Make a choise</option>
                    <option value="">Household</option>
                    <option value="">Plastic</option>
                    <option value="">Glass</option>
                    <option value="">Organic</option>
                </select>
            </div>

            <div>
                <label for="name">Photo (URL)</label>
                <input placeholder="https://..." type="text">
            </div>

            <div>
                <label for="">Time slot</label>
                <input type="date">
            </div>
        </div>

        <div class="right">
            <div>
                <label for="">Address</label>
                <input type="text" placeholder="Rue,ville">

            </div>

            <div>
                <label for="name">Qauntity estimated</label>
                <select name="" id="">
                    <option value="">10kg-50kg</option>
                    <option value="">51kg-100kg</option>
                    <option value="">101kg-200kg</option>
                    <option value="">201kg-1000kg</option>
                    <option value="">1001kg and above</option>
                </select>
            </div>

            <div>
                <label for="">Options</label>
                <select name="" id="">
                    <option value="">none</option>
                    <option value="">urgent</option>
                </select>
            </div>
        </div>
       </div>

        <div class="payment">
            <div class="amount">
                <label for="">Estimated price :4000XAF</label>
            </div>
            
            <div class="submit">
                <a class="buttonm" href="payment.html"><button class="buttonn">Proceed to payment</button></a>
                <button class="button">Save</button>
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

        function showOrder(){
            const order = document.querySelector('.order');
            order.style.display = 'flex';
        }

        function hideOrder(){
            const order = document.querySelector('.order');
            order.style.display = 'none';
        }
    </script>
</body>
</html>