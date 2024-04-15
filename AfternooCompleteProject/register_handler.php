<?php
//Check if the button has been clicked
if (isset($_POST["btn_reg"])){
    //Receive the data from the form
    $userName = $_POST["u_name"];
    $userEmail = $_POST["u_email"];
    $userPassword = $_POST["u_pass"];
    //Connect to the database to save data
    require_once "db_connection.php";
    //Create an insert query
    $insertQuery = "INSERT INTO `users`(`id`, `jina`, `arafa`, `siri`) 
        VALUES (NULL,'$userName','$userEmail','$userPassword')";
    //Execute the query using the mysqli_query function()
    $save = mysqli_query($connection, $insertQuery);
    //Check if the saving was successful
    if (isset($save)){
        echo "User registered successfully";
    }else{
        echo "User registration failed";
    }
}
