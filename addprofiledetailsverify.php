<?php
session_start();

include'configdatabase.php';

$username = $_POST['username'];
$name     = $_POST['name'];
$contactno = $_POST['contactno'];
$email  = $_POST['email'];
//echo $username,$name,$password,$profile;

$sql = "SELECT * FROM `profile` WHERE username = '$username'";
$result = mysqli_query($conn,$sql);

$flag=0;
while($row = $result->fetch_assoc())
{
	if($row['username']==$username)
	{
		$flag=1;
 	}
} 

if($flag==1)
{
		echo'details are already there';
}
else
{
	$reg="INSERT INTO `profile` (`username`, `name`, `contactno`, `email`) VALUES ('$username', '$name ', '$contactno', '$email')";
	$result1 = mysqli_query($conn,$reg);
	if($result1)
	{
		echo 'ADDEd  successfully';
		header('location:profilecandidate.php');
	}
}
/*}
else
{
	echo'Details are already added.You can update only';
}*/
?>
