<?php
include('db.php');
$firstname="";
$lastname="";
$password="";
$dob="";
$email="";
$mob="";

  $firstname = $_POST['first_name'];
  $lastname = $_POST['last_name'];
  $password = $_POST['password'];
  $dob = $_POST["dob"];
  $email = $_POST["email"];
  $mob = $_POST["telephone"];  
  
	echo "<html>";
	echo "<head>";
	echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>';
	echo '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>';
	echo '<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">';
	echo '<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>';
	echo '<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>';
	echo '</head>';
	echo "<body>";
	echo '<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>';
	echo '<script src="js/materialize.js"></script>';
	echo '<script src="js/init.js"></script>';
	echo "<script src='phn_no.js'></script>";
	echo "<script src='toaster.js'></script>";
	echo "</body>";

  $sql="INSERT INTO `customer`(`first_name`, `last_name`, `email`, `mob`, `pass`, `credit`, `bank_cust`) VALUES ('$firstname','$lastname','$email','$mob','$password',3,1 )";
  
  if ($conn->query($sql) === TRUE) 
  {
    echo "New record created successfully";
	echo "<br>";
	$sqle="SELECT * from customer where email='$email'";
	if($result=$conn->query($sqle))
	{
		if($result->num_rows==1)
		{
			if($row = $result->fetch_assoc())
			{
				echo "<br/>";
				echo "username= ".$row['email'];
				echo "<br/>";
				echo "password= ".$row['pass'];
				echo"<br/>";
				//echo '<script> toasts("mail sent") </script>';		
			}
		}
		else echo $result->num_rows."   ".$email;
	}
	else {echo mysqli_error($conn);}


  } 
  else 
  {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

$conn->close();
echo "</html>"; 
?>
