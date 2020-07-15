<?php
$target_dir = "C:/Users/rohitkumar/Desktop/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  //print_r($_FILES['fileToUpload']);
 // $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  $filetype = $_FILES['fileToUpload']['type'];
  if($filetype == "text/plain")
    echo 'correct extension uploaded';
  if($filetype !== false) {
    echo "File is a txt or pdf - " /*. $check["mime"] . "."*/;
    $uploadOk = 1;
  } else {
    echo "File is niether txt nor pdf";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "pdf" && $imageFileType != "txt") {
  echo "Sorry, pdf and txt files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  //connecting to server

$conn=mysqli_connect('localhost','root','');
$q = mysqli_select_db($conn,'registration');
if($q)
echo "Database connected successfully",'<br>'; 
else
echo 'NOt connected';

$file_eten = explode('.',$_FILES["fileToUpload"]["name"]);
$name = $file_eten[0];

  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//query to move the file on xampp server
    $query = "INSERT INTO `resume_details` (`filename`, `filepath`) VALUES ('$name', '$target_file')";
    $result = mysqli_query($conn,$query);
    if($result)
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded to xampp.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


?>