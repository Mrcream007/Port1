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
    <title>package</title>

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
            <!-- <a href="bot.php">Chatbot</a> -->
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


    <!-- chatbot starts -->
     
<div class="wrapper">
        <div class="title">Online Chatbot</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                <i class='fas fa-fire'></i>
                </div>
                <div class="msg-header">
                    <p>Welcome, how may I be of service to you?</p>
                </div>
            </div>

            
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here..." required>
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                // alert($value);
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');

                // start ajax code 
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-fire"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>
    
    <!-- chatbot ends -->


    <!--end of header-->
    <div class="heading" style="background:url(images/image0.jpeg) no-repeat">
        <h1>package</h1>
    </div>

    <!-- packages section starts -->

        <section class="packages">

            <h1 class="heading-title">Best destinations</h1>

            <div class="box-container">

                <div class="box">

                    <div class="image">
                        <img src="images/Goat.jpg" alt="">
                    </div>
                        <div class="content">
                            <h3>Booking and Reservation</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus recusandae in non accusamus pa.</p>
                            <a href="book.php" class="btn">book now</a>
                        </div>
                </div>

                <div class="box">

                    <div class="image">
                        <img src="images/butterfly-icon.jpg" alt="">
                    </div>
                        <div class="content">
                            <h3>adventure and tour</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus recusandae in non accusamus pa.</p>
                            <a href="book.php" class="btn">book now</a>
                        </div>
                </div>

                <div class="box">

                    <div class="image">
                        <img src="images/ladychinese.jpg" alt="">
                    </div>
                        <div class="content">
                            <h3>Availability and Prices</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus recusandae in non accusamus pa.</p>
                            <a href="book.php" class="btn">book now</a>
                        </div>
                </div>

                <div class="box">

                    <div class="image">
                        <img src="images/guyexploring.jpg" alt="">
                    </div>
                        <div class="content">
                            <h3>Customization Options</h3>
                            <p>Lorem ipsum dolor sit amet consect.</p>
                            <a href="book.php" class="btn">book now</a>
                        </div>
                </div>

                <div class="box">

                    <div class="image">
                        <img src="images/image0.jpeg" alt="">
                    </div>
                        <div class="content">
                            <h3>Package Details</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus recusandae in non accusamus pa.</p>
                            <a href="book.php" class="btn">book now</a>
                        </div>
                </div>

                <div class="box">

                    <div class="image">
                        <img src="images/600x600-profile-silhouette-m.jpg" alt="">
                    </div>
                        <div class="content">
                            <h3>More Activities</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus recusandae in non accusamus pa.</p>
                            <a href="book.php" class="btn">book now</a>
                        </div>
                </div>

                <div class="box">

                    <div class="image">
                        <img src="images/square1.jpg" alt="">
                    </div>
                        <div class="content">
                            <h3>adventure and tour</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus recusandae in non accusamus pa.</p>
                            <a href="book.php" class="btn">book now</a>
                        </div>
                </div>

                <div class="box">

                    <div class="image">
                        <img src="images/square1.jpg" alt="">
                    </div>
                        <div class="content">
                            <h3>adventure and tour</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus recusandae in non accusamus pa.</p>
                            <a href="book.php" class="btn">book now</a>
                        </div>
                </div>

                <div class="box">

                    <div class="image">
                        <img src="images/square1.jpg" alt="">
                    </div>
                        <div class="content">
                            <h3>adventure and tour</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus recusandae in non accusamus pa.</p>
                            <a href="book.php" class="btn">book now</a>
                        </div>
                </div>

                <div class="box">

                    <div class="image">
                        <img src="images/square1.jpg" alt="">
                    </div>
                        <div class="content">
                            <h3>adventure and tour</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus recusandae in non accusamus pa.</p>
                            <a href="book.php" class="btn">book now</a>
                        </div>
                </div>

                <div class="box">

                    <div class="image">
                        <img src="images/butterfly-icon.jpg" alt="">
                    </div>
                        <div class="content">
                            <h3>adventure and tour</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus recusandae in non accusamus pa.</p>
                            <a href="book.php" class="btn">book now</a>
                        </div>
                </div>

                <div class="box">

                    <div class="image">
                        <img src="images/square1.jpg" alt="">
                    </div>
                        <div class="content">
                            <h3>adventure and tour</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus recusandae in non accusamus pa.</p>
                            <a href="book.php" class="btn">book now</a>
                        </div>
                </div>

            </div>

            <div class="load-more"><span class="btn">load more</span></div>

        </section>

    <!-- packages section ends -->




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