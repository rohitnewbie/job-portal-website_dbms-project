<?php
session_start();

include'configdatabase.php';

$username = $_POST['username'];
$name     = $_POST['name'];
$password = $_POST['password'];
$profile  = $_POST['profile'];
//echo $username,$name,$password,$profile;

$sql = "SELECT * FROM `users` WHERE username = '$username'";
$result = mysqli_query($conn,$sql);

$flag=0;
while($row = $result->fetch_assoc())
{
	if($row['username']==$username)
	{
		$flag=1;
 	}
} 
if($flag==0)
{
	$reg="INSERT INTO `users` (`username`, `name`, `password`, `profile`) VALUES ('$username', '$name ', '$password', '$profile')";
	$result1 = mysqli_query($conn,$reg);
	if($result1)
	{
		echo 'Registered successfully';
	}
}
else
{
	echo'username already taken';
}
?>
<a href="login.php"><button>GO BACK</button></a>