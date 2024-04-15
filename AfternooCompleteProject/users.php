<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/custom.css">
</head>
<body>
<a class="btn btn-outline-secondary btn-block" href="register.php">Add users</a>
<h1 class="text-info text-center">All users</h1>
<table class="table table-hover table-dark">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>


    <?php
    //Start by connecting to database
    require_once "db_connection.php";
    //Create a select query
    $selectQuery = "SELECT * FROM users";
    //Execute the query by mysqli_query()
    $users = mysqli_query($connection,$selectQuery);
    //Use a loop to print all the users
    foreach ($users as $user){
        $userId = $user["id"];
        $userName = $user["jina"];
        $userEmail = $user["arafa"];
        $userPassword = $user["nenosiri"];
        echo"
            <tr>
            <td>$userName</td>
            <td>$userEmail</td>
            <td><a class='btn btn-danger' href='delete.php?u_id=$userId'>Delete</a></td>
            <td><a class='btn btn-success' href='update.php?u_id=$userId&u_name=$userName&u_email=$userEmail&u_pass=$userPassword'>Update</a></td>
            </tr>
            ";
    }
    ?>


</table>

</body>
</html>
