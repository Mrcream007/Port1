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
    <title>Home</title>

     <!-- css link file -->
     <link rel="stylesheet" href="css/style.css">

    <!-- Swiper CSS link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Your other CSS links -->

    <!-- Your other head content -->
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
    <!-- <a href="searchstories.php">search</a> -->
    <a href="login.php">Login</a>
    <a  href="logout.php">Logout</a>
    <!-- <a href="bot.php">Chatbot</a> -->
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
<!-- header section ends -->

<section class="home">

    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background: url(images/snowy-mountain-landscape.jpg) no-repeat;">
                <div class="content">
                    <span>discover, travel, explore</span>
                    <h3>visit all around the world</h3>
                    <a href="package.php" class="btn">discover much more</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background: url(images/guyexploring.jpg) no-repeat;">
                <div class="content">
                    <span>discover, travel, explore</span>
                    <h3>explore beautiful locations</h3>
                    <a href="package.php" class="btn">discover much more</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background: url(images/snowy-mountain-landscape.jpg) no-repeat;">
                <div class="content">
                    <span>discover, travel, explore</span>
                    <h3>have a memorable experience</h3>
                    <a href="package.php" class="btn">discover much more</a>
                </div>
            </div>
            <!-- Add more slides here -->
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <!-- <div class="swiper-pagination"></div> -->
    </div>
</section>


<!--start of services section-->
<section class="services1">

<h1 class="heading-title">services offered</h1>

<div class="box-container">

       <div class="box">
            <img src="images/butterfly-icon.jpg"  alt="">
            <h3><a href="book.php">adventure</a></h3>
        </div>

        <div class="box">
            <img src="../Port1/images/normalPic.jpg" alt="">
            <h3><a href="package.php">enjoy tour guide</a></h3>
        </div>

        <div class="box">
                <img src="../Port1/images/officeLady.jpg"  alt="">
                <h3><a href="book.php">Flights</a></h3>
        </div>

        <div class="box">
                <img src="images/grey-geometrical-shapes-background.jpg"  alt="">
                <h3><a href="book.php">Destinations</a></h3>
        </div>

        <div class="box">
                <img src="../Port1/images/smilingBlackguy.jpg"  alt="">
                <h3>off road venture</h3>
        </div>

        <div class="box">
                <img src="../Port1/images/chuka.jpeg"  alt="">
                <h3>Unforgetable experience</h3>
        </div>


</div>
</section>
<!--end of services-->


<!-- home about section starts -->

<section class="home-about">

<div class="image">
    <img src="../Port1/images/guyexploring.jpg" alt="">
</div>

<div class="content">
    <h3>about us</h3>
    <p>At Travel Tourism, we are passionate about providing exceptional travel experiences to our valued users. Our platform is designed to assist you in planning your dream vacations, exploring exciting destinations, and discovering unique attractions worldwide. With our user-friendly interface and innovative features, we aim to make your travel planning process seamless and enjoyable.</p>
    <a href="about.php" class="btn">read more</a>
</div>

</section>

<!-- home about section ends -->


<!-- home packages section starts -->

<section class="home-packages">

<h1 class="heading-title">our packages</h1>

<div class="box-container">

    <div class="box">
        <div class="image">
            <img src="../Port1/images/officeLady.jpg" alt="">
        </div>
        <div class="content">
            <h3>tour and Adventure</h3>
            <p>Explore a vast array of destinations, from exotic tropical paradises to bustling metropolises. </p>
            <a href="book.php" class="btn">make bookings</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="../Port1/images/smallsquare1.jpg" alt="">
        </div>
        <div class="content">
            <h3>Personalized Recommendations</h3>
            <p>Our intelligent chatbot analyzes your preferences, interests, and travel requirements</p>
            <a href="book.php" class="btn">make bookings</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="../Port1/images/smilingBlackguy.jpg" alt="">
        </div>
        <div class="content">
            <h3>Travel Planning Tools</h3>
            <p>Seamlessly manage your travel arrangements in one place.</p>
            <a href="book.php" class="btn">make bookings</a>
        </div>
    </div>

</div>

<div class="load-more"><a href="package.php" class="btn" >load more</a></div>
</section>

<!-- home package section ends -->



<!-- home offer starts -->

<section class="home-offer">
<div class="content">
    <h3>book your trip!</h3>
    <p>Interact with our chatbot AI</p>
    <a href="book.php" class="btn">book now</a>
</div>
</section>

<!-- home offer ends -->

<!-- Your other HTML content -->

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

<!-- Your other JavaScript code -->

<script>
    var swiper = new Swiper(".home-slider", {
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        // pagination: {
        //     el: ".swiper-pagination",
        //     clickable: true,
        // },
    });

    // Your other script code
</script>

</body>
</html>
