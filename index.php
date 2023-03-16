<?php
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database-name');
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
	
	echo "Uw account is aangemaakt!"
	sleep(1)
	fopen($filename)
}

?>