<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text],input[type=password],input[type=name],input[type=number], select,input[list=Profiles] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  background-color: #414747;
  color: white;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  color:white;
}

button[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-align: center;
}

button[type=submit]:hover {
  background-color: #16E981;
  color:black;
}

.container {
  border-radius: 5px;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
  text-align: center;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.body1
{
  background:url('commonpost.jpeg');
  background-position: center;
  background-repeat: no-repeat;;
  background-size: cover;
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
.active {
  background-color: #1091EB;
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
</head>
<body>

<section>
    <ul style="font-size: 2vw;">
      
        <li><a href="home2.php" >Home</a></li>
    </ul>
</section>

<section class="body1">
<div class="container">
  <form action="addprofiledetailsverify.php" method="post">

    <input type="hidden" name="username" value="<?php session_start(); echo $_SESSION['username']; ?>"placeholder="username"required="required" />

    <div class="row">
      <div class="col-25">
        <label for="fname">NAME</label>
      </div>
      <div class="col-75">
        <input type="text" name="name" placeholder="name"required="required" />
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label>CONTACT NO</label>
      </div>
      <div class="col-75">
        <input type="name" name="contactno" placeholder="contact no" required="required" />
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label>EMAIL</label>
      </div>
      <div class="col-75">
      <input type="name" name="email" placeholder="email" required="required" />
      </div>
    </div>

    
    <div class="row">
      <center><button type="submit" class="btn" name="submit" value="submit">ADD</button></center>
    </div>
  </form>
</div>
</section>
<div class="footer">
  <p>Copyright : rohitwebdesign.co.in | Bengaluru | Karnataka </p>
  <p>Contact : rohitkumarjha15006@gmail.com</p>
</div>

</body>
</html>