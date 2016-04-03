<?php

session_start();
include('db.php');
$dir=$_SESSION['sid'];
$a="uploads/$dir/";
$todir=$a;
if ( ! is_dir($todir)) 
	mkdir($todir);
if(is_uploaded_file($_FILES['myfile']['tmp_name']) && getimagesize($_FILES['myfile']['tmp_name']) != false)
    {
  
    $size = getimagesize($_FILES['myfile']['tmp_name']);
    $type = $size['mime'];
    $imgfp = fopen($_FILES['myfile']['tmp_name'], 'rb');
    $size = $size[3];
    $name = $_FILES['myfile']['name'];
    $maxsize = 99999999;
	if($_FILES['myfile']['size'] < $maxsize )
	{
		  $imgfp = fopen($_FILES['myfile']['tmp_name'], 'rb');
		  if ( move_uploaded_file( $_FILES['myfile']['tmp_name'], $todir . basename($_FILES['myfile']['name'] ) ) )
		  {
			  echo "file uploaded succesfully   ";
		  }
		  $old="$todir$name";
		  $x='aadhar.png';
		  $new="$todir$x";
		  echo $old." ".$new;
		  rename($old,$new);
			$sqle="UPDATE `docs` SET `aadhar`='$new' WHERE email='$dir'";
			if($result=$conn->query($sqle))
			{
				$location="http://localhost/store-aadhar.php";
				header("Location:$location");
			}
			
	}
	   else{
		   echo "sizes error";
	   }
	}
	else{
		echo "unsupported image format";
	}








?>