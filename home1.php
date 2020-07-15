<html>
<head>
	<title>homepage</title>
	<style>
    ul {
          list-style-type: none;/*to remove bullet points*/
          margin: 0;
          padding: 0;
          overflow: hidden;/*to retain scroll option while navmenu is overflow*/
          background-color: #333;
         }

    li {
        float: right;
        }

li a {
      display: block;/*for horizontal alignment*/
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      
    }

/* Change the link color (black) on hover */
li a:hover {
        background-color: black;
        color: white;
        text-decoration: none;
      }

		.grid-container {
  display: grid;
  grid-template-columns:auto auto auto auto auto auto auto;
  grid-gap: 5px;
  background-color: white;
  padding: 5px;
  grid-template-rows: 10%;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  font-size: 15px;
}
.grid-container1 {
  display: grid;
  grid-template-columns: auto auto;
  grid-gap: 5px;
  background-color: white;
  padding: 5px;
  grid-template-rows: 150px;
  justify-content: space-around;
}

.grid-container1 > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  font-size: 15px;
}
.footer
{
  float:left;
  background-color: #333;
  color:white;
  padding: 5px;
  font-size: 2vw;
  width:100%;
}
.active {
      background-color: #1091EB;
    }

.grid-container1 
  {
    display: grid;
    grid-template-columns:auto auto auto;
    grid-gap: 5px;
    background-color: white;
    padding: 5px;
    grid-template-rows: 10%;
  }

.grid-container1 > div 
{
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  font-size: 15px;
}

	</style>
</head>
<body>
  <section>
    <ul style="font-size: 2vw;">
      <li><a href="logout.php">Logout</a></li>
      <li><a href="postedjobs.php">Posted jobs</a></li>
        <li><a href="postjob.php">Post a Job</a></li>
        <li><a href="profilestaff.php">Profile</a></li>
        <li><a href="home1.php" class="active">Home</a></li>
    </ul>
</section>


CHECK CANDIDATE DETAILS APPLIED FOR YOUR JOB:-<br>

<?php
include'configdatabase.php';
session_start();
echo $staffuesrname = $_SESSION['username'];
$sql = "SELECT * FROM `postjob` WHERE username = '$staffuesrname'";
$result = mysqli_query($conn,$sql);

$i = mysqli_num_rows($result);
echo '<br>Total id retrived from postjobs table:-<button>',$i,'</button></br>';
if($i > 0)
{
  while($row = $result->fetch_assoc())
  {
    ?>
    <div class="grid-container1">
    <div>
    <?php
   $jobid = $row['id'];
  //job id retrieved
  $sql1 = "SELECT * FROM `appliedjobs` WHERE id = $jobid";
  $result1 = mysqli_query($conn,$sql1);

  $j = mysqli_num_rows($result1);
  echo '<br>Total candidate username for job id:-',$jobid,'<button></button></br>';
    ?>
    </div>
    <div>
    <?php
  if($j > 0)
  {
  while($row1 = $result1->fetch_assoc())
    {
    
  $candidateusername = $row1['username'];
  //candidate name  retrieved..
  
  $sql2 = "SELECT * FROM `profile` WHERE username = '$candidateusername'";
  $result2 = mysqli_query($conn,$sql2);

  $k = mysqli_num_rows($result2);
  echo '<br>Total details of candidate:-</br>';
    ?>
    </div>
    <div>
    <?php

  if($k > 0)
  {
    while($row2 = $result2->fetch_assoc())
   {
    
    echo $row2['name'],'<br>';
    echo $row2['contactno'],'<br>';
    echo $row2['email'],'<br>';

    //candidate details retrieved
  
    

  }
}//candidate details while loop
    ?>
    </div>
    </div>
    <?php
  }
}//candidate name while loop
    

  }
}//job id while loop

?>
<div class="footer">
  <p>Copyright : rohitwebdesign.co.in | Bengaluru | Karnataka </p>
  <p>Contact : rohitkumarjha15006@gmail.com</p>
</div>

<a href="candidatesapplied.php"></a>
</body>
</html>


