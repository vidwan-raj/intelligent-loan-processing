<?php
session_start();
include('db.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Intelligent Loan Processing</title>

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
				<li><a href="index.php">Home</a></li>
			</ul>
			<ul id="nav-mobile" class="side-nav">
				<li><a href="index.php">Home</a></li>
			</ul>
			<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
		</div>
	</nav>
	<div class="container" >
		<div class="row">
			<form class="col s12 offset-s4" action="login.php" method="post">
				<div class="row">
					<div class="input-field col s4">
						<i class="material-icons prefix">account_circle</i>
						<input name="username" type="text" class="validate">
						<label for="username">Username</label>
					</div>
				</div>
    
      
				<div class="row">
					<div class="input-field col s4">
						<i class="material-icons prefix">vpn_key</i>
						<input name="password" type="password" class="validate">
						<label for="password">Password</label>
					</div>
				</div>

				<div class="row ">
					<div class="center-align offset-s2">
						<button class="btn waves-effect waves-light" type="submit" name="submit">Login</button>
					</div>
				</div>
	 
			</form>
		</div>
	</div>
</body>
</html>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>


