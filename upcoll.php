<!DOCTYPE html>
<html>
<head>
  
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>I-loan</title>

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
<br>
  <br><br><br>
<form action="collectcoll.php" method="post"  enctype="multipart/form-data">
<div class=" container" >
<div class="input-field col s4">
<i class="material-icons prefix">payment</i>
        <input name="amount" type="text" class="validate" >
          <label for="amount">Enter Amount</label>
        </div>
<br><br><br><br>		
   <div class="file-field input-field  ">
      <div class="btn">
        <span>Collateral </span>
		<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
        <input type="file" name="myfile" id="myfile">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate " placeholder="upload the file" type="text">
      </div>
    </div>
	
	  <button class="btn waves-effect waves-light" type="submit" name="submit" id="submit">upload!</button> 
	</form>   
  
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>


</body>
</html> 


