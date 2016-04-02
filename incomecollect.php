<?php

mysql_connect("localhost","root","");
mysql_select_db('loandb');

$imagetmp = addslashes(file_get_contents ($_FILES['myfile1']['tmp_name']));


$query = "UPDATE `docs` SET `income`='$imagetmp' WHERE `u_id`=1";
if(mysql_query($query))
{
	echo "succesfull";
	
}
else{
	echo mysql_error();
}
?>