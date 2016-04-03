<?php
include('db.php');
session_start();
$firstname="";
$lastname="";
$password="";
$dob="";
$mob="";
$username=$_SESSION['sid'];
  $firstname = $_POST['first_name'];
  $lastname = $_POST['last_name'];
  $password = $_POST['password'];
  
 $sql="UPDATE `customer` SET `first_name`='$firstname',`last_name`='$lastname',`mob`='$mob',`pass`='$password' WHERE email='$username'";
 if($result=$conn->query($sql)) 
  {
  echo "details updated successfully!";
  }
  else 
	  echo "problem updating details";
  ?>
  <html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
<title>I-Loan</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

  <div class="row center">
<div class="center-align">
	      <a href="das.php" class="waves-effect waves-light btn">Return Home</a>
	      </div>
</div>
 </body>
</html>