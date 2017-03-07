<?php

	$multiple_recipients = array(
			    'mithun.cse521@gmail.com'
			);


			$headers  = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-Type: text/html; charset=UTF-8";
			$headers .= "From: PNS Group <info@pnsmachineries.com>" . "\r\n";

			$subj = 'PNS Machineries';
			if(wp_mail( $multiple_recipients,'aaa', 'ddddd',$headers )){
				echo 'Mail Send';
			}else{
				echo 'Mail not send';
			}




?>