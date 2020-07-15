<!DOCTYPE html>
<html>
<head>
  <title> APPLIED_JOBS</title>
  <style>
    

h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

/*@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);*/
.body1{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}

.active {
      background-color: #1091EB;
    }

section{
  margin: 20px;
  height:12em;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
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



  </style>
  <script>

    $(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();

  </script>
</head>
<body>

<div>
    <ul style="font-size: 2vw;">
      <li><a href="logout.php">Logout</a></li>
      <li><a href="appliedjobs.php" class="active">Applied jobs</a></li>
        <li><a href="profilecandidate.php">Profile</a></li>
        <li><a href="home2.php" >Home</a></li>
    </ul>
</div>

<?php
include'configdatabase.php';
 session_start();
  $username = $_SESSION['username'];

$result2 = mysqli_query($conn,"SELECT * FROM `appliedjobs` WHERE username = '$username'");

$i = mysqli_num_rows($result2);

if($i > 0)
{
  while($row3 = $result2->fetch_assoc())
  {
    ?>

<section class="body1">
  <!--for demo wrap-->

    
  <h1>APPLIED JOBS</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th style="background-color: black;color:white;border:solid 2px white;text-align: center;">UNIVERSITY NAME</th>
          <th style="background-color: black;color:white;border:solid 2px white;text-align: center;">DESIGNATION</th>
          <th style="background-color: black;color:white;border:solid 2px white;text-align: center;">SUBJECT</th>
          <th style="background-color: black;color:white;border:solid 2px white;text-align: center;">EXPERIENCE</th>
          <th style="background-color: black;color:white;border:solid 2px white;text-align: center;">SALARY</th>
        </tr>
      </thead>
    </table>
  </div>

  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <tr>

          <td style="color:black;text-align: center;font-weight: bold;"><?php echo $row3['universityname'];?></td>
          <td style="color:black;text-align: center;font-weight: bold;"><?php echo $row3['designation'];?></td>
          <td style="color:black;text-align: center;font-weight: bold;"><?php echo $row3['subject'];?></td>
          <td style="color:black;text-align: center;font-weight: bold;"><?php echo $row3['exp'];?></td>
          <td style="color:black;text-align: center;font-weight: bold;"><?php echo $row3['salary'];?></td>
        </tr>
      </tbody>
    </table>
  </div>
</section>
<?php
  }
}
    else
      echo'NO jobs posted';
    ?>


 <div class="footer">
  <p>Copyright : rohitwebdesign.co.in | Bengaluru | Karnataka </p>
  <p>Contact : rohitkumarjha15006@gmail.com</p>
</div>

</body>
</html>