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
    <title>book</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <!-- awesome font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- css link file -->
    <link rel="stylesheet" href="css/style.css">
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
            <a href="bot.php">Chatbot</a>
            <a href="searchstories.php">search</a>
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



    <!--end of header-->
    <div class="heading" style="background:url(images/beautiful-scenery-road-forest-with-lot-colorful-autumn-trees_181624-30942.jpg) no-repeat">
        <h1>book now</h1>
    </div>


    <!-- bookings section starts -->

        <section class="booking">

            <h1 class="heading-title">book your trip!</h1>


            <?php
            if (isset($brend)){
            echo '<form action="book_form.php" method="post" class="book-form">
                <div class="flex">
                    <div class="inputBox">
                        <span>name: </span>
                        <input type="text" placeholder="enter your name" name="name">
                    </div>
                    <div class="inputBox">
                        <span>email: </span>
                        <input type="email" placeholder="enter your email" name="email">
                    </div>
                    <div class="inputBox">
                        <span>phone: </span>
                        <input type="text" placeholder="enter your phon number" name="phone">
                    </div>
                    <div class="inputBox">
                        <span>address: </span>
                        <input type="text" placeholder="enter your address" name="address">
                    </div>
                    <div class="inputBox">
                        <span>where to : </span>
                        <input type="text" placeholder="visit" name="location">
                    </div>
                    <div class="inputBox">
                        <span>how many : </span>
                        <input type="number" placeholder="amount of guests" name="guest">
                    </div>
                    <div class="inputBox">
                        <span>arrivals : </span>
                        <input type="date"  name="arrivals">
                    </div>
                    <div class="inputBox">
                        <span>leaving : </span>
                        <input type="date" name="leaving">
                    </div>
                </div>

                <input type="submit" value="submit" class="btn" name="send">';
            }
                
                ?>
            </form>

        </section>

    <!-- booking section ends -->




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
                <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
            </div>

        </div>

        <div class="credit"> created by <span>Mr. Okocha</span> all rights reserved!</div>

    </section>

    <!-- footer ends -->


    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- js file link -->
    <script>src="js/script.js"</script>
</body>
</html>