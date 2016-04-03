<?php
session_start();
include('db.php');
$username=$_SESSION['sid'];
// echo "WELCOME USER";
$sqle="SELECT * FROM `customer` WHERE email='$username'";
if($result=$conn->query($sqle))
{
while($row = $result->fetch_assoc())
	{
				$name=$row['first_name'];
				$lname=$row['last_name'];
				$pass=$row['pass'];
				$no=$row['mob'];
				$credit=$row['credit'];
				}
		}
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

<nav class="teal lighten-2" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">iLOAN</a>
      
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="container" >
 <div class="row">
    <form name="myform" class="col s12 offset-s2" action="save.php"  method="post">
      <div class="row">
        <div class="input-field col s4">
		 <i class="material-icons prefix">account_circle</i>
          <input name="first_name" type="text" class="validate" value=<?php echo $name; ?> >
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s4">
		<i class="material-icons prefix">contacts</i>
          <input name="last_name" type="text" class="validate"  value=<?php echo $lname; ?>>
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s4">
		<i class="material-icons prefix">vpn_key</i>
          <input name="password" type="text" class="validate"  value=<?php echo $pass; ?>>
          <label for="password">Password</label>
        </div>
		<div class="row">
         <div class="input-field col s4">
          <i class="material-icons prefix">phone</i>
          <input name="telephone" type="tel" class="validate"  value=<?php echo $no; ?>>
          <label for="icon_telephone">Telephone</label>
		  </div>
      </div>
 <div class="center-align">
	      <button class="btn waves-effect waves-light" type="submit" name="submit">Save</button>
	      </div>
 
	  </form>
	   </div>
  </div>
  
   <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  
 </body>
</html>


