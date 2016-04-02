<?php

$txt_file=array('','','','','','','','');
$count=-1;

$file = fopen("output.txt","r");

while(! feof($file))
  {
		$count++;
		$txt_file[$count]=fgets($file);
		//echo $count.'---'.$txt_file[$count]. "<br />";
  }
echo $txt_file[2];
fclose($file);
?>