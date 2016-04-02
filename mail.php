<?php
 $to = "vidwanraj@yahoo.in";
         $subject = "just checking bro!";
         
         $message = "this is a fucking message to you";
		 $header="From:g.vidwanraj@gmail.com\r\n";
		 $retval = mail ($to,$subject,$message,$header);
          if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
		 
		 
?>