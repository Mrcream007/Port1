<?php

session_start();

if (isset($_SESSION['brend_id'])) {
    $sqliconn = require __DIR__ . "/database.php";

    $sql = "SELECT * from brend
            where id = {$_SESSION["brend_id"]}";

    $result = $sqliconn->query($sql);

    $brend = $result->fetch_assoc();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slider with Stories</title>

    <!-- css link file -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Swiper CSS link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Custom CSS -->
    <style>
        .swiper-container {
            width: 100%;
            height: 400px;
        }
        .swiper-slide {
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: flex-end;
            padding: 20px;
            color: white;
        }
        .story-content {
            background: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 5px;
            width: 100%;
        }
    </style>
</head>
<body>

<!-- header section starts -->

<section class="header">

<a href="home.php" class="logo">travel.</a>

<nav class="navbar">
    <a href="home.php">home</a>
    <a href="about.php">about</a>
    <a href="package.php">package</a>
    <a href="book.php">book</a>
    <!-- <a href="bot.php">Chatbot</a> -->
    <!-- <a href="searchstories.php">search</a> -->
    <?php

            if(isset($brend)):
            ?>
            <div style=" padding-top: 9px;">
            <p>Hi <?=htmlspecialchars($brend["name"]) ?></p>
                <?php endif; ?>
            </div>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>

    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('images/francais.jpeg')">
                <div class="story-content">
                    <h3>Europian Travel</h3>
                    <p>Explore France's enchanting landscapes and rich history. Roam cobblestone streets, savor gourmet cuisine, and stand before iconic landmarks. Europe invites with diverse cultures, awe-inspiring architecture, and unforgettable adventures.</p>
                    <h4><a href="book.php"  style="color: white;">Book trip now</a></h4>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url('images/girraf.jpeg')">
                <div class="story-content">
                    <h3>African Travel</h3>
                    <p>Amidst the vast African savannahs, Kenya beckons with its breathtaking beauty. Towering giraffes gracefully roam the plains, embodying the wild essence of Africa's mesmerizing landscapes.</p>
                    <h4><a href="book.php"  style="color: white;">Book trip now</a></h4>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url('images/geisha.jpeg')">
                <div class="story-content">
                    <h3>Asian Travel</h3>
                    <p>In the heart of Asia, China beckons with its ancient wonders and vibrant culture. Geishas grace its streets, embodying the enchanting allure of the East, creating an unforgettable journey through time.</p>
                    <h4><a href="book.php"  style="color: white;">Book trip now</a></h4>
                </div>
            </div>
            <!-- Add more slides with stories here -->
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

     <!-- footer start -->

     <section class="footer">
 
 <div class="box-container">

     <div class="box">
         <h3>quick links</h3>
         <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
         <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
         <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
     </div>

     <div class="box">
         <h3>extra links</h3>
         <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"><i class="fas fa-angle-right"></i> about us</a>
         <a href="#"><i class="fas fa-angle-right"></i> privacy</a>
         <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
     </div>

     <div class="box">
         <h3>contact info</h3>
         <a href="#"><i class="fas fa-angle-right"></i> +123-456-7890</a>
         <a href="#"><i class="fas fa-phone"></i> +222-333-4444</a>
         <a href="#"><i class="fas fa-envelope"></i> johndoe@gmail.com</a>
         <a href="#"><i class="fas fa-map"></i> aberdeen, Scotland - AB24</a>
     </div>

     <div class="box">
         <h3>follow us</h3>
         <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i>facebook</a>
         <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i>twitter</a>
         <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i>instagram</a>
         <a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i>linkedin</a>
     </div>

 </div>

 <div class="credit"> created by <span>Mr. Okocha</span> all rights reserved!</div>

</section>

<!-- footer ends -->




    <!-- Swiper JavaScript link -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    <script>
        var swiper = new Swiper(".swiper-container", {
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</body>
</html>
