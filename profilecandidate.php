<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PROFILE</title>
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
    text-decoration: none;
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
.active {
  background-color: #1091EB;
}
.emj1
{
  position: absolute;
  margin-left: 5px;
  mix-blend-mode: difference;

}
#responsive {
  width: 100%;
  max-width: 150px;
  height: auto;

}


.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  float: left;
  margin-left:60px;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
.clear
{
  clear: both;
}

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
</style>
</head>
<body>
  <!--nav-bar-->
  <section>
    <ul style="font-size: 2vw;">
      <li><a href="logout.php">Logout</a></li>
      <li><a href="appliedjobs.php">Applied jobs</a></li>
        <li><a href="profilecandidate.php" class="active">Profile</a></li>
        <li><a href="home2.php" >Home</a></li>
    </ul>
</section>

<!--container ends-->
<!--product card-->
<?php

include'configdatabase.php';

session_start();
$usethisname1 = $_SESSION['username'];

$result2 = mysqli_query($conn,"SELECT * FROM `profile` WHERE username = '$usethisname1'");
$i = mysqli_num_rows($result2);
if($i > 0)
{
  while($row3 = $result2->fetch_assoc())
  {
     
    ?>
<section style="padding-left:10px;padding-top:30px;position:relative; height:50em;">
 <div class="card">
<!--flip card-->
  <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="usericon.png" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
       <p>CONTACT NO : - <?php echo $row3['contactno'];?></p>
       <p>EMAIL : - <?php echo $row3['email'];?></p>
      
    </div>
  </div>
</div>
<!--flip card end-->

  <h1>USERNAME:-<?php echo $row3['username'];?></h1>
  <h1>NAME - Mr.<?php echo $row3['name'];?></h1>
  <p style="color:blue;">Click or Hover this card to see additional details</p>
  <a href="addprofiledetailscandidate.php"><button>ADD PROFILE</button></a>
 
  
</div>

<?php
  }
}
    else
      echo'NO jobs posted';
       
    ?>

<!--product card end-->
 <div class="card" style="height: 10em;">
<!--flip card-->
  
<!--flip card end-->
   <form action="updateprofile.php" method="post">
    <h1>UPDATE PROFILE DETAILS</h1>
        <input type="hidden" name="username" value="<?php echo $_SESSION['username'];?>">
        <input type="text" name="name" placeholder="name"required="required" />
        <input type="number" name="contactno" placeholder="contact no" required="required" />
        <input type="text" name="email" placeholder="email" required="required" /><br/>
        <button type="submit" class="btn" name="submit" value="submit">UPDATE</button>
    </form>
</div>

<!--product card end-->
</section>

<div class="footer">
  <p>Copyright : rohitwebdesign.co.in | Bengaluru | Karnataka </p>
  <p>Contact : rohitkumarjha15006@gmail.com</p>
</div>

</body>
</html>