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
    <title>about</title>

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
    <div class="heading" style="background:url(images/Canvastudentsbanner\ \(2\).jpeg) no-repeat">
        <h1>about us</h1>
    </div>

    <!-- about section starts -->

    <section class="about">

        <div class="images">
            <img src="../Port1/images/smallsquare1.jpg" alt="">
        </div>

        <div class="content">
            <h3>Why pick us?</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia reprehenderit obcaecati nihil rerum quae ullam odit ipsum veniam accusantium corporis consequatur saepe vel sint, quaerat nostrum maxime, eius aliquam animi!</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet doloremque hic nobis fugiat dolores ullam, ad laboriosam illo voluptates tempora, dolore itaque quaerat officiis quam maxime sapiente perspiciatis explicabo recusandae?</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-map"></i>
                    <span>Best locations</span>
                </div>
            </div>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>cheap prices</span>
                </div>
            </div>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 service guide</span>
                </div>
            </div>
        </div>

    </section>

    <!-- about section ends -->

    <!-- reviews section starts -->

    <section class="reviews">

    <h1 class="heading-title">Customers Reviews</h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slider slide">
                    <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod placeat id doloribus quam nam necessitatibus illum ea! Distinctio maxime impedit quod. Non repellat .</p>
                    <h3>Okocha</h3>
                    <span>traveler</span>
                    <img src="images/Goat.jpg" alt="">
                </div>

                <div class="swiper-slider slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. .</p>
                    <h3>Okocha</h3>
                    <span>traveler</span>
                    <img src="images/guyexploring.jpg" alt="">
                </div>

                <div class="swiper-slider slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod placeat id doloribus quam nam necessitatibus illum ea! Distinctio maxime impedit quod. Non repellat dignissimos sapiente eum ab omnis expedita harum.</p>
                    <h3>Okocha</h3>
                    <span>traveler</span>
                    <img src="images/butterfly-icon.jpg" alt="">
                </div>

                <div class="swiper-slider slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod placeat id doloribus quam nam necessitatibus illum ea! Distinctio maxime impedit quod. Non repellat dignissimos sapiente eum ab omnis expedita harum.</p>
                    <h3>Okocha</h3>
                    <span>traveler</span>
                    <img src="images/ladychinese.jpg" alt="">
                </div>

                <div class="swiper-slider slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Quod placeat id doloribus quam nam necessitatibus illum ea! Distinctio maxime impedit quod. Non repellat dignissimos sapiente eum ab omnis expedita harum.</p>
                    <h3>Okocha</h3>
                    <span>traveler</span>
                    <img src="images/ladychinese.jpg" alt="">
                </div>

                <div class="swiper-slider slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod placeat id doloribus quam nam necessitatibus illum ea! Distinctio maxime impedit quod. Non repellat dignissimos .</p>
                    <h3>Okocha</h3>
                    <span>traveler</span>
                    <img src="images/ladychinese.jpg" alt="">
                </div>

            </div>
        </div>

    </section>

    <!-- reviews section ends -->




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