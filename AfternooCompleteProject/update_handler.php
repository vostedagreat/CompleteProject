<?php
if (isset($_POST["u_id"])) {
    $userId = $_POST["u_id"];
    $updatedUserName = $_POST["u_name"];
    $updatedUserEmail = $_POST["u_email"];
    $updatedUserPassword = $_POST["u_pass"];
    //Connect to the db
    require_once "db_connection.php";
    //Create update query
    $updateQuery = "UPDATE `users` SET `jina`='$updatedUserName',
                   `arafa`='$updatedUserEmail',
                   `siri`='$updatedUserPassword' WHERE id='$userId'";
    //Execute the query using the mysqli_query
    $update = mysqli_query($connection, $updateQuery);
    if (isset($update)){
       header("location:users.php");
    }else{
        echo "Updating failed";
    }
}
