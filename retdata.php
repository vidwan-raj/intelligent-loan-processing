<?php
   $con =mysql_connect("localhost", "root" , "");
   $sdb= mysql_select_db("loandb",$con);
   $sql = "SELECT * FROM `docs` WHERE 1";
   $mq = mysql_query($sql) or die ("not working query");
   $row = mysql_fetch_array($mq) or die("line 44 not working");
   $s=$row['aadhaar'];
   echo $row['aadhar'];

   echo '<img src="'.$s.'" alt="HTML5 Icon" style="width:128px;height:128px">';
   ?>