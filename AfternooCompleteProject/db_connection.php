<?php
$host = "localhost";
$user = "root";
$password = "";
$dbName = "nairobi_school_db";

$connection = mysqli_connect($host,$user,$password,$dbName);
//Check if connection failed
if (! isset($connection)){
    die("DB Connection failed");
}