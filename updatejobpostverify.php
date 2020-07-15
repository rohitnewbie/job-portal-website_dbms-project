<?php
include'configdatabase.php';
$id = $_POST['id'];
$universityname = $_POST['universityname'];
$designation = $_POST['designation'];
$subject = $_POST['subject'];
$exp = $_POST['exp'];
$salary = $_POST['salary'];

 $reg="UPDATE postjob SET universityname = '$universityname', designation = '$designation',universityname = '$universityname',subject = '$subject',exp = '$exp',salary = '$salary' WHERE  id = $id";
$result1 = mysqli_query($conn,$reg);
if($result1)
{
header('location:postedjobs.php');
}
	?>
	<a href="postedjobs.php"><button>BACK</button></a>