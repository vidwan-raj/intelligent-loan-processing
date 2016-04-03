

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
 <nav class="teal lighten-2">
  <ul id="slide-out" class="side-nav teal lighten-2">
     <li><a href="#!">My Profile</a></li>
      <li><a href="upload.php">Upload Docs</a></li>
	  <li><a href="#!">views</a></li>
    </ul>
         <a href="index.php" class="brand-logo center white-text">iLOAN</a>

    <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="mdi-navigation-menu"></i></a>
	
</nav>
<div class="container">
     <div class="row">
        <div class="col s12 m8">
          <div class="card">
            <div class="card-image">
              <img src="background1.jpg">
              <span class="card-title">Reduced % !</span>
            </div>
            <div class="card-content">
              <p>Reduced rate of interesets for new Loans ! hurry up!</p>
            </div>
            <div class="card-action">
              <a href="https://www.sbi.co.in/">SBI</a>
            </div>
          </div>
        </div>
      </div>
</div>

            
 <?php
session_start();
include('db.php');
echo "username-".$_SESSION['sid'];
?>
 
 


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
	  </body>
	  </html>