<?php 
include'configdatabase.php';
$delete_id= $_GET['id'];
$sql = "DELETE FROM `postjob` WHERE `postjob`.`id` = '$delete_id'";
$result = mysqli_query($conn,$sql);
if($result)
{
	header('location:postedjobs.php');
}

?>
