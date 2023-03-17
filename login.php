<?php
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database-name');
$con = mysqli_connect('localhost', 'root', '','myfashion');

// get what the user typed in
$password = $_POST['password'];
$username = $_POST['username'];

// database insert SQL code
$sql = "SELECT
    password,
    username
FROM
    customer
WHERE
    password = '$password' AND username = '$username'";	// EXPERIMENTEEL, werkt nog niet!

// insert in the database 
$rs = mysqli_query($con, $sql);
if ($rs = true); // EXPERIMENTEEL, werkt nog niet!
{

    sleep(2);
    header("Location:profile.html");
    exit();

    
}


?>