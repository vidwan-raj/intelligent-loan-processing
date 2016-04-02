
<?php

mysql_connect("localhost","root","");
mysql_select_db('loandb');

$imagetmp = addslashes(file_get_contents ($_FILES['myfile']['tmp_name']));


$query = "INSERT INTO `docs`(`u_id`, `aadhar`) VALUES (1,  '$imagetmp') ";


if(mysql_query($query))
{
	echo "succesful";
	
}
else{
	echo mysql_error();
}
?>