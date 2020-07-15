<?php

include'configdatabase.php';
$username = $_POST['username'];
$name = $_POST['name'];
$contactno = $_POST['contactno'];
$email = $_POST['email'];
echo $username,$name,$contactno,$email;

$sql = "UPDATE profile SET name = '$name', contactno = '$contactno', email = '$email' WHERE username = '$username'";
$result = mysqli_query($conn,$sql);
If($result)
{
  echo'updated successfully';
  header('location:profilecandidate.php');
}

/*
"UPDATE postjob SET universityname = '$universityname', designation = '$designation',universityname = '$universityname',subject = '$subject',exp = '$exp',salary = '$salary' WHERE  id = $id";*/
?>
