<?php
    $servername = "localhost";
    $username = "hamza";
    $password = "hamza2002";
    $dbName = "nftea";
    
    // Create connection
    $connection = new mysqli($servername, $username, $password, $dbName);
    
    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect!";
      exit();
    }

    // _____
    $user_name = $_POST['user__name'];
    $user__password = $_POST['password'];
    
    // _____
    $qry = "INSERT INTO `user`(`user_name`, `user__password`) 
            VALUES ('$user_name', '$user__password');";
    $insert = mysqli_query($connection, $qry);
    if(!$insert) {
        echo "there is a problem with data insertion";
    } else {
        echo "data inserted";
    }

 ?>
