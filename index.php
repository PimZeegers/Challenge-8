<?php
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','myfashion');

// get what the user typed in
$password = $_POST['password'];
$username = $_POST['username'];

// database insert SQL code
$sql = "INSERT INTO `customer` (`id`, `password`, `username`) VALUES ('0', '$password', '$username')";

// insert in the database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Uw Account is aangemaakt!";
}

?>