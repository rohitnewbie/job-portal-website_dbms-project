<?php
session_start();

include'configdatabase.php';

$username     = $_POST['username'];
$password = $_POST['password'];
$profile  = $_POST['profile'];

$query = "SELECT * FROM users WHERE username = '$username' && password = '$password' && profile = '$profile'";

$result = mysqli_query($conn,$query);

echo $num = mysqli_num_rows($result);


if($num == 1)
{	$_SESSION['username'] = $username;
	if($profile =='staff')
	header('location:home1.php');
	else
	header('location:home2.php');
}
else
{
	header('location:login.php');
}

?>