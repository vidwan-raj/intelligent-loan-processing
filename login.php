 <?php
session_start();
include('db.php');
    if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql="select email,pass from customer where email='$username' and pass= '$password'";
        if($result=$conn->query($sql))
        {
			if($result->num_rows==1)
			{
				if($row = $result->fetch_assoc())
				{
					echo "username= ".$row['email'];
					echo "<br/>";
					echo "password= ".$row['pass'];
					echo"<br/>";
					$_SESSION['sid']=$username;
					echo"<br/>";
					$location="credit_score.php";
					header("Location:$location");
        
				}
			}
			else
				$message = 'Username and Password doesnt exists'; 
		}
		else echo mysqli_error($conn);
	}	
 ?>
