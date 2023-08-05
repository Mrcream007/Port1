<!DOCTYPE html>
<html>
<head>
    <title>Chatbot with Suppress and Maximize Buttons</title>
    <style>
        /* Style for the chatbot container */
        .chatbot-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #f1f1f1;
            border: 1px solid #ccc;
            padding: 10px;
            width: 300px;
            border-radius: 5px;
        }

        /* Style for the chat messages */
        .chat-messages {
            height: 200px;
            overflow-y: auto;
        }

        /* Style for the suppress and maximize buttons */
        .toggle-button {
            float: right;
            cursor: pointer;
            margin-left: 5px;
        }
    </style>
</head>
<body>
    <!-- Chatbot container -->
    <div class="chatbot-container">
        <div class="toggle-button suppress-button" onclick="suppressChatbot()">-</div>
        <div class="toggle-button maximize-button" onclick="maximizeChatbot()">+</div>
        <h2>Chatbot</h2>
        <div class="chat-messages">
            <!-- Chat messages will be displayed here -->
        </div>
        <input type="text" placeholder="Type your message...">
    </div>

    <!-- JavaScript functions to suppress and maximize the chatbot -->
    <script>
        var chatbotContainer = document.querySelector(".chatbot-container");
        
        function suppressChatbot() {
            chatbotContainer.style.display = "none";
        }

        function maximizeChatbot() {
            chatbotContainer.style.display = "block";
        }
    </script>
</body>
</html>
