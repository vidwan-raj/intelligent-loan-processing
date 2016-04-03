
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
				$no=$row['mob'];
				$credit=$row['credit'];
				}
		}
		
	// echo "USER DETAILS!!!";
	// echo "";

	?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Parallax Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

<nav class="teal lighten-2" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">iLOAN</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="das.php">Home</a></li>
      </ul>
      <ul id="nav-mobile" class="side-nav">
         <li><a href="das.php">Home</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>   
<div class="container">

	<ul class="collection with-header">
        <li class="collection-header"><h4>Your Details</h4></li>
        <li class="collection-item"><div>Name:<p class="header col s12  blue-text text-darken-2"><?php echo $name; ?></p></div></li>      
        <li class="collection-item"><div>Last Name: <p class="header col s12  blue-text text-darken-2"><?php echo $lname; ?></div></li>
		<li class="collection-item"><div>Password: <p class="header col s12  blue-text text-darken-2">*****	</div></li>
        <li class="collection-item"><div>Contact no: <p class="header col s12  blue-text text-darken-2"><?php echo $no; ?></div></li>
        <li class="collection-item"><div>Credit Score: <p class="header col s12  blue-text text-darken-2"><?php echo $credit; ?></a></div></li>
      </ul>
</div>
<div class="row center">
<a href="edit.php "class="waves-effect waves-light btn">Edit</a>
</div>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
</body>
</html>	

	


            
