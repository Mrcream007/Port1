<?php

    $connection = mysqli_connect('localhost','root','','book_db');

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $guest = $_POST['guest'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];

        $request = "insert into book_form(	name, email, phone,	address, location, guest, arrivals,	leaving) values('$name','$email','$phone','$address','$location','$guest','$arrivals','$leaving')";

        mysqli_query($connection, $request);

        header('location:book.php');
    }

    else{
        echo 'something has gone wrong. Please try again';
    }

?>