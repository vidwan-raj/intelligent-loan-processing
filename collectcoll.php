<?php
include('db.php');
session_start();
$username=$_SESSION['sid'];
$sqle="INSERT INTO `coll`(`email`) VALUES (''$username')";
if($result=$conn->query($sqle))
{
echo "success";
}

$imagetmp = addslashes(file_get_contents ($_FILES['myfile1']['tmp_name']));
$query = "UPDATE `coll` SET `collat`='$imagetmp' WHERE email='$username'";
if(mysql_query($query))
{
	echo "succesfull";
	
}

?>