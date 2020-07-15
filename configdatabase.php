<?php
$conn=mysqli_connect('localhost','root','');
$q = mysqli_select_db($conn,'registration');
if($q)
echo "Database connected successfully",'<br>'; 
else
echo 'NOt connected';
?>