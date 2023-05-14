<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <!-- awesome font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- swiper page link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />


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
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>
    <!-- header section ends -->



    <!-- home section starts -->
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

            </div>

             <div class="swiper-button-next"></div>
             <div class="swiper-button-prev"></div>

            <!-- <div class="swiper-pagination"></div> -->

        </div>

    </section>
    <!-- home section ends -->


    
    <!--start of services section-->
    <section class="services1">

        <h1 class="heading-title">services offered</h1>
        
        <div class="box-container">

               <div class="box">
                    <img src="images/square1.jpg"  alt="">
                    <h3>adventure</h3>
                </div>

                <div class="box">
                    <img src="../Port1/images/square1.jpg" alt="">
                    <h3>enjoy tour guide</h3>
                </div>

                <div class="box">
                        <img src="../Port1/images/square1.jpg"  alt="">
                        <h3>walking</h3>
                </div>

                <div class="box">
                        <img src="images/square1.jpg"  alt="">
                        <h3>fire camp</h3>
                </div>

                <div class="box">
                        <img src="../Port1/images/square1.jpg"  alt="">
                        <h3>off road venture</h3>
                </div>

                <div class="box">
                        <img src="../Port1/images/square1.jpg"  alt="">
                        <h3>camping out</h3>
                </div>


        </div>
    </section>
    <!--end of services-->




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
    <script src="js/script.js"></script>
</body>
</html>