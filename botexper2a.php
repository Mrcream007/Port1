<!DOCTYPE html>
<html>
<head>
    <title>Travel Chatbot</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.chatbox-container {
    width: 300px;
    margin: 20px auto;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    background-color: #fff;


    /* position: fixed;
    bottom: 20px;
    right: 20px; */
}

/* Styles for chatbot header */
#chatbot-header {
    background-color: black;
    padding: 10px;
    color: #f4f4f4;
}

.chat-message {
    overflow-y: scroll;
    max-height: 300px;
    margin-bottom: 10px;
}

.user-message {
    color: #007bff;
}

.chatbot-message {
    color: #28a745;
}

.chatbox-container #handleUserInput {
    max-width: 53%;
    /* background: red; */
    margin-left: 10px;
}
    </style>
</head>
<body>

<!-- <div id="chatbot-container">
        <div id="chatbot-header">
            <h3>Chatbot</h3>
        </div>
        <div id="chatbot-messages">
            <p>Welcome to the chatbot!</p>
        </div>
        <div id="user-input">
            <input type="text" id="message-input" placeholder="Type your message...">
            <button id="send-button">Send</button>
        </div>
    </div> -->


    <div class="chatbox-container">
        <div id="chatbot-header"><h3>Travel Chatbot</h3></div> <!--experiment-->
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
            "recommend me some tourist destinations in europe": "Alright! Some tourist destinations in Africa include: Paris, Rome, London bridge, Greece, etc"
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
</body>
</html>
