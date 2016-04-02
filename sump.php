<?php
$con = mysqli_connect("localhost","root","","loandb");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
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
    <form class="col s12 offset-s2" action="sump.php" method="post">
      <div class="row">
        <div class="input-field col s4">
		 <i class="material-icons prefix">account_circle</i>
          <input id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s4">
		<i class="material-icons prefix">contacts</i>
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
    
      
      <div class="row">
        <div class="input-field col s4">
		<i class="material-icons prefix">vpn_key</i>
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
		  <div class="input-field col s4">
		 	 <i class="material-icons prefix">today</i>
			 <input id="dob" type="date" class="datepicker">
          </div>
      </div>
      <div class="row">
        <div class="input-field col s4">
		 <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
		 <div class="input-field col s4">
          <i class="material-icons prefix">phone</i>
          <input id="telephone" type="tel" class="validate">
          <label for="icon_telephone">Telephone</label>
		  </div>
      </div>
	  <div class="row ">
	    <div class="center-align">
	      <button class="btn waves-effect waves-light" type="submit" id="submit">Submit</button>
	      </div>
        </div>
	 </form>
	 </div>
  </div>
  




<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

</body>
</html>

<?php
if(isset($_POST['submit']))
echo "hai";
?>