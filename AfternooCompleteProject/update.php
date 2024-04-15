<?php
if (isset($_POST["u_id"])){
    $userId = $_POST["u_id"];
    $userName = $_POST["u_name"];
    $userEmail = $_POST["u_email"];
    $userPassword = $_POST["u_pass"];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Updates</title>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>
    <section>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <h1 class="text-info text-center">Updating User</h1>
                <form method="post" action="update_handler.php">
                    <input value="<?php echo $userId; ?>"name="u_id" type="hidden">
                    <input value="<?php echo $userName; ?>" required class="form-control" name="u_name" placeholder="Enter Username" type="text"><br>
                    <input value="<?php echo $userEmail; ?>" required class="form-control" name="u_email" placeholder="Enter Email" type="email"><br>
                    <input value="<?php echo $userPassword; ?>" required class="form-control" name="u_pass" placeholder="Enter Password" type="password"><br>
                    <input class="btn btn-outline-warning btn-block" name="btn_update" value="Update" type="submit">
                    <a class="btn btn-outline-info btn-block"href="users.php">Back</a>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </section>
</body>
</html>
