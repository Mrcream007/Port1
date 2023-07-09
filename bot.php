<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <!-- css link file -->
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <!-- font awesome link -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
</head>
<body>
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

            <div class="user-inbox inbox">
                <div class="msg-header">
                    <p>Hey, I am a traveller</p>
                </div>
            </div>

            <div class="bot-inbox inbox">
                <div class="icon">
                <i class='fas fa-fire'></i>
                </div>
                <div class="msg-header">
                    <p>Welcome, how may I be of service to you?</p>
                </div>
            </div>

            <div class="user-inbox inbox">
                <div class="msg-header">
                    <p>Hey, I am a traveller</p>
                </div>
            </div>

            <div class="bot-inbox inbox">
                <div class="icon">
                <i class='fas fa-fire'></i>
                </div>
                <div class="msg-header">
                    <p>Welcome, how may I be of service to you?</p>
                </div>
            </div>

            <div class="user-inbox inbox">
                <div class="msg-header">
                    <p>Hey, I am a traveller. sdrtjhgfghjfghjkgfghjfghjfghfghghghghmg</p>
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
                    data: 'text ='+$value,
                    success: function(result){

                    }
                });
            });
        });
    </script>

</body>
</html>