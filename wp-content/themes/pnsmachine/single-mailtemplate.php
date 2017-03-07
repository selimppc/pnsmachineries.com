<?php
$to = "mithun.cse521@gmail.com";

			$message = "aaaaa";

			$subject = "HTML email";

			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			// More headers
			$headers .= 'From: <webmaster@example.com>' . "\r\n";
			$headers .= 'Cc: myboss@example.com' . "\r\n";

			if(mail($to,$subject,$message,$headers)){
				echo 'Mail Send';
			}else{
				echo 'Not Send';
			}
	




?>