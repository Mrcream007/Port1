<?php

include 'database.php';

?>

<!--///////////////////////////////////////////////-->

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
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="css/style1.css">
  <!--<link rel="stylesheet" href="css/style.css">-->

  <link rel="stylesheet" href="/assets/css/unsemantic-grid-responsive-tablet.css">

</head>
<body>
<div class="fixed-top">
<?php

        if(isset($brend)):
?>
        
        

<?php

else:
?>
        
        

<?php endif; ?>



        
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
            
        </div>
<!--///////////////////////////////////////////////-->

<br><br><br><br>
<body>
    <div style="margin-left: 10px;";>
    <form action="search.php" method="post">
        <input type="text" name="search" placeholder="Search">
        <button type="submit" name="submit-search">Search</button>
    </form>
    </div>
    

    <!--<h1>Front pages</h1>-->
    <h2>Search Destinations:</h2>

    <div class="article-container">
        <?php
        
            $sql = "SELECT * FROM article";
            $result = mysqli_query($sqliconn, $sql);
            $queryResults = mysqli_num_rows($result);

            if ($queryResults > 0) {
                while ($row = mysqli_fetch_assoc($result)){
                    echo "<div class= 'article-box'>
                        <h3>".$row['a_title']."</h3>
                        <p>".$row['a_text']."</p>
                        
                        <p>".$row['a_date']."</p>
                        <p>".$row['a_author']."</p>
                    </div>";
                }
            }
        ?>
    </div>

    <a href="homepage1.php">Homepage</a>

</body>
</html>