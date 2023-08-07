<!DOCTYPE html>
<html>
<head>
    <title>Travel Chatbot</title>
    <style>
        /* Your CSS styling for the chatbox container and messages */
        .chatbox-container {
            /* Add your styles here */
        }

        .chat-message {
            /* Add your styles here */
        }
    </style>
</head>
<body>
    <div class="chatbox-container">
        <div id="chat" class="chat-message"></div>
        <input type="text" id="userInput" placeholder="Type your message...">
    </div>

    <script>
        var userName = "";
        const travelDestinations = {
            "tell me about paris": "Paris is known for its romantic ambiance and iconic landmarks like the Eiffel Tower and Louvre Museum.",
            "tokyo": "Tokyo is a bustling metropolis with a mix of modern skyscrapers and traditional temples.",
            "new york": "New York City offers a vibrant cultural scene, world-famous Broadway shows, and diverse neighborhoods.",
            "rome": "Rome is a city rich in history and home to ancient ruins like the Colosseum and Roman Forum.",
            "bali": "Bali is a tropical paradise with stunning beaches, lush rice terraces, and vibrant arts and culture."
            // Add more travel destinations and advice here
        };

        function displayChatbotResponse(response) {
            const chatDiv = document.getElementById("chat");
            const chatbotResponse = document.createElement("p");
            chatbotResponse.textContent = "Chatbot: " + response;
            chatDiv.appendChild(chatbotResponse);
        }

        function handleUserInput() {
            const userInput = document.getElementById("userInput").value.toLowerCase();
            const chatDiv = document.getElementById("chat");

            const userMessage = document.createElement("p");
            userMessage.textContent = "You: " + userInput;
            chatDiv.appendChild(userMessage);

            document.getElementById("userInput").value = "";

            // Handle user's name
            if (!userName) {
                if (userInput.includes("my name is ")) {
                    userName = userInput.replace("my name is ", "");
                    displayChatbotResponse("Nice to meet you, " + userName + "! How can I assist you with your travel plans?");
                } else {
                    displayChatbotResponse("Hello! What's your name?");
                }
            } else {
                // Handle travel advice
                if (travelDestinations[userInput]) {
                    displayChatbotResponse(travelDestinations[userInput]);
                } else {
                    displayChatbotResponse("I'm sorry, I don't have information about that destination.");
                }
            }
        }

        document.getElementById("userInput").addEventListener("keydown", function (event) {
            if (event.keyCode === 13) {
                handleUserInput();
            }
        });
    </script>
</body>
</html>
