<!DOCTYPE html>
<html>
<head>
    <title>Chatbot Demo</title>
    <style>
        /* Styles for chatbot container */
        #chatbot-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 300px;
            height: 400px;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
        }
        
        /* Styles for chatbot header */
        #chatbot-header {
            background-color: #eaeaea;
            padding: 10px;
        }
        
        /* Styles for chatbot messages */
        #chatbot-messages {
            height: 320px;
            padding: 10px;
            overflow-y: scroll;
        }
        
        /* Styles for user input */
        #user-input {
            padding: 10px;
            border-top: 1px solid #ccc;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div id="chatbot-container">
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
    </div>

    <script>
        // Function to append a new message to the chatbot container
        function appendMessage(sender, message)
