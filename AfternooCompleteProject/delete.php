<?php
if(isset($_POST["u_id"])){
    $userId = $_POST["u_id"];
    //connect to database
    require_once "db_connection.php";
    //Create a delete query
    $deleteQuery = "DELETE FROM users WHERE id= '$userId'";
    //Execute the query using mysqli_query()
    $delete = mysqli_query($connection,$deleteQuery);
    //Check if the deletion is successful
    if(isset($delete)) {
        //RETURN THE USERS TO USERS.PHP TO SEE CHANGES
        header("location:users.php");
    }else{
        echo "Deletion failed";
    }
}