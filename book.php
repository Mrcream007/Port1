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



    <!--end of header-->
    <div class="heading" style="background:url(images/beautiful-scenery-road-forest-with-lot-colorful-autumn-trees_181624-30942.jpg) no-repeat">
        <h1>book now</h1>
    </div>


    <!-- bookings section starts -->

        <section class="booking">

            <h1 class="heading-title">book your trip!</h1>
            <h3 class="sign-up-booking">Must sign up to access booking</h3>


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



    <div class="chatbox-container">
        <div id="chatbot-header"><h3>Travel Chatbot</h3></div> 
        <div id="chat" class="chat-message"></div>
        <input type="text" id="userInput" placeholder="Type your message...">
    </div>

    <script>
        var userName = "";
        const travelDestinations = {
            "tell me about paris": "Paris is known for its romantic ambiance and iconic landmarks like the Eiffel Tower and Louvre Museum.",
            "tell me about tokyo": "Tokyo is a bustling metropolis with a mix of modern skyscrapers and traditional temples.",
            "tell me about new york": "New York City offers a vibrant cultural scene, world-famous Broadway shows, and diverse neighborhoods.",
            "tell me about rome": "Rome is a city rich in history and home to ancient ruins like the Colosseum and Roman Forum.",
            "tell me about bali": "Bali is a tropical paradise with stunning beaches, lush rice terraces, and vibrant arts and culture.",
            "tell me about capetown": "Cape-town is a beautiful town in the country of South Africa. Known for its multicultural and diverse history. Has a lot of beautiful beaches due to its location along the coast",
            // Add more travel destinations and advice here
            "bye": "Goodbye! Have a safe trip!!",
            "recommend me some tourist destinations in africa": "Alright! Some tourist destinations in Africa include: Cape-town, Portharcourt, Cairo, Accra, Casablanca, etc.",
            "recommend me some tourist destinations in europe": "Alright! Some tourist destinations in Europe include: Paris, Rome, London bridge, Greece, etc"
        };

        function displayChatbotResponse(response, isUserMessage) {
            const chatDiv = document.getElementById("chat");
            const chatbotResponse = document.createElement("p");
            chatbotResponse.textContent = (isUserMessage ? "You: " : "Chatbot: ") + response;
            chatbotResponse.className = (isUserMessage ? "user-message" : "chatbot-message");
            chatDiv.appendChild(chatbotResponse);
            chatDiv.scrollTop = chatDiv.scrollHeight;
        }

        function handleUserInput() {
            const userInput = document.getElementById("userInput").value.toLowerCase();
            const chatDiv = document.getElementById("chat");

            const userMessage = document.createElement("p");
            userMessage.textContent = "You: " + userInput;
            userMessage.className = "user-message";
            chatDiv.appendChild(userMessage);

            document.getElementById("userInput").value = "";

            // Handle user's name
            if (!userName) {
                if (userInput.includes("my name is ")) {
                    userName = userInput.replace("my name is ", "");
                    displayChatbotResponse("Nice to meet you, " + userName + "! How can I assist you with your travel plans?", false);
                } else {
                    displayChatbotResponse("Hello! What's your name?", false);
                }
            } else {
                // Handle travel advice
                if (travelDestinations[userInput]) {
                    displayChatbotResponse(travelDestinations[userInput], false);
                } else {
                    displayChatbotResponse("I'm sorry, I don't have information about that destination.", false);
                }
            }
        }

        document.getElementById("userInput").addEventListener("keydown", function (event) {
            if (event.keyCode === 13) {
                handleUserInput();
            }
        });
    </script>



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
                <a href="bot2.php"><i class="fas fa-angle-right"></i> ask questions</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> about us</a>
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


    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- js file link -->
    <script>src="js/script.js"</script>
</body>
</html>