
<?php

include'configdatabase.php';
session_start();
$username = $_GET['username'];
$id = $_GET['id'];
$universityname = $_GET['universityname'];
$designation = $_GET['designation'];
$subject = $_GET['subject'];
$exp = $_GET['exp'];
$salary = $_GET['salary'];

echo $username;
$sql1 = "SELECT * FROM `appliedjobs` WHERE username = '$username'";
$result1 = mysqli_query($conn,$sql1);

$data1 = mysqli_num_rows($result1);
echo $data1;
if($data1>0)
{

	$sql2 = "SELECT * FROM `appliedjobs` WHERE username = '$username' and id = $id";
	$result2 = mysqli_query($conn,$sql2);

	$data2 = mysqli_num_rows($result2);
	echo $data2;
	if($data2>0)
	{
		echo'job already posted';
	}
	else
	{
		$sql3 ="INSERT INTO `appliedjobs` (`username`, `id`, `universityname`, `designation`, `subject`, `exp`, `salary`) VALUES ('$username ', '$id', '$universityname', '$designation', '$subject', '$exp', '$salary')";

		$result3=mysqli_query($conn,$sql3);
		if($result3)
		{
		echo"New id found for this username.POsted soon";
		}
	}
}
else
{
	$sql3 ="INSERT INTO `appliedjobs` (`username`, `id`, `universityname`, `designation`, `subject`, `exp`, `salary`) VALUES ('$username ', '$id', '$universityname', '$designation', '$subject', '$exp', '$salary')";

		$result3=mysqli_query($conn,$sql3);
		if($result3)
		{
			echo"new user with no post .posted soon";
		}
}
	
	/*if($row['username']=='$username')
	{  echo $id;
		if($row['id']===$id){
		echo'appplied for this job with id:-',$id,$row['id'];
		}/*
		else
		{
			echo'New job post for this user';
		}*/
 	//}

	/*$sql3 ="INSERT INTO `appliedjobs` (`username`, `id`, `universityname`, `designation`, `subject`, `exp`, `salary`) VALUES ('$username ', '$id', '$universityname', '$designation', '$subject', '$exp', '$salary')";

	$result3=mysqli_query($conn,$sql3);
	if($result3)
	{
		echo'inserted successfully';
		exit();
	}*/


?>
<a href="home2.php">gobCK</a>