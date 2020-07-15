<?php
session_start();

include('configdatabase.php');

$username = $_POST['username'];
$universityname = $_POST['universityname'];
$designation = $_POST['designation'];
$subject = $_POST['subject'];
$exp = $_POST['exp'];
$salary = $_POST['salary'];

$reg="INSERT INTO `postjob` ( `username`, `universityname`, `designation`, `subject`, `exp`, `salary`) VALUES ('$username', '$universityname', '$designation', '$subject', '$exp', '$salary')";
$result1 = mysqli_query($conn,$reg);
if($result1)
{
header('location:postedjobs.php');
}
	?>
	