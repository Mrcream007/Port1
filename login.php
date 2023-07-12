<?php

  $is_invalid = false;
  if($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqliconn = require __DIR__ . "/database.php";

    $sql = sprintf("SELECT * FROM brend 
                    WHERE email = '%s'",
                    $mysqliconn->real_escape_string($_POST["email"]));

    $result = $mysqliconn->query($sql);

    $brend = $result->fetch_assoc();

    if ($brend) {
      if (password_verify($_POST["pswd"], $brend["password1"])){

        session_start();

        session_regenerate_id();

        $_SESSION["brend_id"] = $brend["id"];

        header("Location: home.php");
        exit;
      }
    }

    $is_invalid = true;
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="css/style1.css">

  

</head>
<body>

<?php
    if ($is_invalid):

?>

      <em>Login Invalid</em>

<?php
    endif;
?>
            <div>
                <h1 style="text-align: center; background-color: black;"><a href="home.php">Travel</a></h1>
            </div>
            

<div class="background-pix">

<div class="container" style="background-color: azure;">
  <h2 style="text-align: center;">Login</h2>
  <form action="" method="post">

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <br>
    <p>New user? <a href="signup.php">Sign up</a></p>
    <br>
    <br>
  </form>
</div>

</div>

</body>
</html>