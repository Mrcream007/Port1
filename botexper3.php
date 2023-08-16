<!DOCTYPE html>
<html lang="en">
<style>
    .chat-container {
        width: 300px;
    margin: 20px auto;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    background-color: #fff;


    position: fixed;
    bottom: 20px;
    right: 20px;
}

#chatbot-header {
    background-color: blue;
    padding: 10px;
}

.chat {
  width: 300px;
  border: 1px solid #ccc;
  padding: 10px;
  overflow-y: scroll;
  max-height: 400px;
}

.bot-message, #greeting {
  background-color: #f0f0f0;
  padding: 5px;
  margin-bottom: 10px;
}

.user-input {
  display: flex;
  align-items: center;
}

.user-options {
  display: flex;
  flex-direction: column;
}

.option {
  margin-bottom: 5px;
  padding: 5px 10px;
  background-color: #007bff;
  color: white;
  border: none;
  cursor: pointer;
}

.option:hover {
  background-color: #0056b3;
}



</style>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="">
  <title>Travel Chatbot with Destination Recommendations</title>
</head>
<body>
  <div class="chat-container">
  <div id="chatbot-header"><h3>Travel Chatbot</h3></div> <!--experiment-->
    <div class="chat">
      <div class="bot-message">
        <p>Hello! What's your name?</p>
      </div>
      <div class="user-input">
        <input type="text" id="username" placeholder="Enter your name">
        <button id="submit-name">Submit</button>
      </div>
      <div class="bot-message" id="greeting"></div>
      <div class="user-options" id="options" style="display: none;"></div>
    </div>
  </div>

  <script>
    const usernameInput = document.getElementById('username');
const submitNameButton = document.getElementById('submit-name');
const greetingMessage = document.getElementById('greeting');
const optionsContainer = document.getElementById('options');

submitNameButton.addEventListener('click', () => {
  const username = usernameInput.value;
  greetingMessage.textContent = `Hello, ${username}! How can I assist you?`;
  usernameInput.style.display = 'none';
  submitNameButton.style.display = 'none';
  showDestinationOptions();
});

function showDestinationOptions() {
  const destinations = [
    { name: 'Travel Booking', link: 'https://www.option1.com' },
    { name: 'Toutist destinations', link: 'https://www.option2.com' },
    { name: 'Hotel reservations', link: 'https://www.option3.com' },
    // Add more options as needed
  ];

  destinations.forEach(destination => {
    const optionButton = document.createElement('button');
    optionButton.className = 'option';
    optionButton.textContent = destination.name;
    optionButton.addEventListener('click', () => {
      optionsContainer.innerHTML = '';
      const followUpMessage = document.createElement('div');
      followUpMessage.className = 'bot-message';
      followUpMessage.innerHTML = `<p>You selected: ${destination.name}. Here are more options:</p>`;
      optionsContainer.appendChild(followUpMessage);
      showFollowUpOptions();
    });
    optionsContainer.appendChild(optionButton);
  });

  optionsContainer.style.display = 'block';
}

function showFollowUpOptions() {
  const followUpOptions = [
    { name: 'Africa', link: 'https://www.activity1.com' },
    { name: 'Europe', link: 'https://www.activity2.com' },
    { name: 'Asia', link: 'https://www.activity3.com' },
    // Add more follow-up options as needed
  ];

  followUpOptions.forEach(option => {
    const followUpButton = document.createElement('button');
    followUpButton.className = 'option';
    followUpButton.textContent = option.name;
    followUpButton.addEventListener('click', () => {
      window.location.href = option.link;
    });
    optionsContainer.appendChild(followUpButton);
  });
}

  </script>
</body>
</html>
