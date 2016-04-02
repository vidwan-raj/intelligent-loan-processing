<?php
$host = 'localhost';
$user = 'root';
$pass = '';

mysql_connect($host, $user, $pass);

mysql_select_db('loandb');




$imagename=$_FILES["myimage"]["name"]; 


$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));


$insert_image="INSERT INTO demo VALUES('$imagetmp','$imagename')";

mysql_query($insert_image);
?>