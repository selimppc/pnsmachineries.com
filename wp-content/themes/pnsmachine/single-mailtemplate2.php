<?php

	if ( have_posts() ) :
		while ( have_posts() ) : the_post();

			$banner_image_id = get_post_meta($post->ID,'banner-photo-2', true);
			$banner_image = wp_get_attachment_image_src($banner_image_id,'full');

			$basic_fields = get_post_meta($post->ID,'basic-fields2', true);
			$product_data_r = get_post_meta($post->ID,'mail-template-2-product', true);

			$first_block = array_slice($product_data_r,0,2);
			$second_block = array_slice($product_data_r,2,2);
			$third_block = array_slice($product_data_r,4,2);
			$fourth_block = array_slice($product_data_r,6,2);

			$mail_data = '';
			$mail_data .= '<table border="0" cellpadding="10" cellspacing="0" style="width:800px;font-family:arial;margin:auto;">';

				$mail_data .= '<tr><td colspan="3" ><img style="width:100%;height:200px;" src="'.$banner_image['0'].'"></td></tr>';

				$mail_data .= '<tr><td colspan="3" style="    border-bottom: 1px solid #ccc;">
						<div style="color: #00a651;float: left;">Newsletter '.Date('Y-F-d').' </div>
						<a style="color: #00a651;float: right;" href="http://www.pnsmachineries.com/stock">Click here to see our stock list</a>
						</td>
					  </tr>';

				$mail_data .= '<tr>
						<td colspan="3" style="    border-bottom: 1px solid #ccc;">
							<div style="color: #00a651;font-weight: bold;text-align: center;font-size: 18px;margin-top: 20px;margin-bottom: 30px;">'.$basic_fields[0]['header-2'].'</div>
						</td>
					   </tr>';

				if(!empty($first_block)){
					$mail_data .='<tr>';
						foreach($first_block as $fbp){
							$image = wp_get_attachment_image_src($fbp['product-photo-2'],'full');
							$mail_data .= '<td style="width:50%;"><a style="text-decoration:none;color:#333;text-align:center;margin-bottom:20px;" href="'.$fbp['product-link-2'].'">';

							$mail_data .='<div style="border-bottom: 1px solid #ccc;padding: 5px;font-size: 15px;    display: inline-block;width:100%;background: #0b3a66;color: #fff;font-weight: bold;"><span style="text-align:center;">'.$fbp['product-name-2'].'</span></div>';

							$mail_data .= '
								<img style="width:102.7%;height:150px;" src="'.$image['0'].'">';

							$mail_data .= '<div style="background: #faa61a;color: #fff;padding: 5px;width: 100%;">Details</div>';

							if(!empty($fbp['value-1'])){
								$mail_data .='<div style="height:25px;border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float: left;font-size: 60px;width:5%;margin-top: -27px;">&middot;</span><span style="float:left;width: 95%;text-align: left;">'.$fbp['value-1'].'</span></div>';
							}else{
								$mail_data .='<div style="height:25px;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;width: 95%;text-align: left;"></span><span style="float:right;"></span></div>';
							}

							if(!empty($fbp['value-2'])){
								$mail_data .='<div style="height:25px;border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float: left;font-size: 60px;width:5%;margin-top: -27px;">&middot;</span><span style="float:left;width: 95%;text-align: left;">'.$fbp['value-2'].'</span></div>';
							}else{
								$mail_data .='<div style="height:25px;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;width: 95%;text-align: left;"></span><span style="float:right;"></span></div>';
							}

							if(!empty($fbp['value-3'])){
								$mail_data .='<div style="height:25px;border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float: left;font-size: 60px;width:5%;margin-top: -27px;">&middot;</span><span style="float:left;width: 95%;text-align: left;">'.$fbp['value-3'].'</span></div>';
							}else{
								$mail_data .='<div style="height:25px;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;width: 95%;text-align: left;"></span><span style="float:right;"></span></div>';
							}

							if(!empty($fbp['value-4'])){
								$mail_data .='<div style="height:25px;border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float: left;font-size: 60px;width:5%;margin-top: -27px;">&middot;</span><span style="float:left;width: 95%;text-align: left;">'.$fbp['value-4'].'</span></div>';
							}else{
								$mail_data .='<div style="height:25px;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;width: 95%;text-align: left;"></span><span style="float:right;"></span></div>';
							}

							if(!empty($fbp['value-5'])){
								$mail_data .='<div style="height:25px;border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float: left;font-size: 60px;width:5%;margin-top: -27px;">&middot;</span><span style="float:left;width: 95%;text-align: left;">'.$fbp['value-5'].'</span></div>';
							}else{
								$mail_data .='<div style="height:25px;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;width: 95%;text-align: left;"></span><span style="float:right;"></span></div>';
							}

								
							$mail_data .= '</a></td>';
						}
					$mail_data .='</tr>';
			}


				if(!empty($second_block)){
		$mail_data .='<tr>';
			foreach($second_block as $sbp){
				$image1 = wp_get_attachment_image_src($sbp['product-photo-2'],'full');
				$mail_data .= '<td style="width:50%;"><a style="text-decoration:none;color:#333;text-align:center;margin-bottom:20px;" href="'.$fbp['product-link-2'].'">';

				$mail_data .='<div style="border-bottom: 1px solid #ccc;padding: 5px;font-size: 15px;    display: inline-block;width:100%;background: #0b3a66;color: #fff;font-weight: bold;"><span style="text-align:center;">'.$sbp['product-name-2'].'</span></div>';

				$mail_data .= '
					<img style="width:102.7%;height:150px;" src="'.$image1['0'].'">';
					
				$mail_data .= '<div style="background: #faa61a;color: #fff;padding: 5px;width: 100%;">Details</div>';

				if(!empty($sbp['value-1'])){
					$mail_data .='<div style="height:25px;border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float: left;font-size: 60px;width:5%;margin-top: -27px;">&middot;</span><span style="float:left;width: 95%;text-align: left;">'.$sbp['value-1'].'</span></div>';
				}else{
					$mail_data .='<div style="height:25px;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;width: 95%;text-align: left;"></span><span style="float:right;"></span></div>';
				}

				if(!empty($sbp['value-2'])){
					$mail_data .='<div style="height:25px;border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float: left;font-size: 60px;width:5%;margin-top: -27px;">&middot;</span><span style="float:left;width: 95%;text-align: left;">'.$sbp['value-2'].'</span></div>';
				}else{
					$mail_data .='<div style="height:25px;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;width: 95%;text-align: left;"></span><span style="float:right;"></span></div>';
				}

				if(!empty($sbp['value-3'])){
					$mail_data .='<div style="height:25px;border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float: left;font-size: 60px;width:5%;margin-top: -27px;">&middot;</span><span style="float:left;width: 95%;text-align: left;">'.$sbp['value-3'].'</span></div>';
				}else{
					$mail_data .='<div style="height:25px;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;width: 95%;text-align: left;"></span><span style="float:right;"></span></div>';
				}

				if(!empty($sbp['value-4'])){
					$mail_data .='<div style="height:25px;border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float: left;font-size: 60px;width:5%;margin-top: -27px;">&middot;</span><span style="float:left;width: 95%;text-align: left;">'.$sbp['value-4'].'</span></div>';
				}else{
					$mail_data .='<div style="height:25px;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;width: 95%;text-align: left;"></span><span style="float:right;"></span></div>';
				}

				if(!empty($sbp['value-5'])){
					$mail_data .='<div style="height:25px;border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float: left;font-size: 60px;width:5%;margin-top: -27px;">&middot;</span><span style="float:left;width: 95%;text-align: left;">'.$sbp['value-5'].'</span></div>';
				}else{
					$mail_data .='<div style="height:25px;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;width: 95%;text-align: left;"></span><span style="float:right;"></span></div>';
				}
				
				$mail_data .= '</a></td>';
			}
		$mail_data .='</tr>';
	}

	if(!empty($third_block)){
		$mail_data .='<tr>';
			foreach($third_block as $tbp){
				$image2 = wp_get_attachment_image_src($tbp['product-photo-2'],'full');
				$mail_data .= '<td style="width:50%;"><a style="text-decoration:none;color:#333;text-align:center;margin-bottom:20px;" href="'.$fbp['product-link-2'].'">';

				$mail_data .='<div style="border-bottom: 1px solid #ccc;padding: 5px;font-size: 15px;    display: inline-block;width:100%;background: #0b3a66;color: #fff;font-weight: bold;"><span style="text-align:center;">'.$tbp['product-name-2'].'</span></div>';

				$mail_data .= '
					<img style="width:102.7%;height:150px;" src="'.$image2['0'].'">';
					
				$mail_data .= '<div style="background: #faa61a;color: #fff;padding: 5px;width: 100%;">Details</div>'; 

				if(!empty($tbp['value-1'])){
					$mail_data .='<div style="height:25px;border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float: left;font-size: 60px;width:5%;margin-top: -27px;">&middot;</span><span style="float:left;width: 95%;text-align: left;">'.$tbp['value-1'].'</span></div>';
				}else{
					$mail_data .='<div style="height:25px;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;width: 95%;text-align: left;"></span><span style="float:right;"></span></div>';
				}

				if(!empty($tbp['value-2'])){
					$mail_data .='<div style="height:25px;border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float: left;font-size: 60px;width:5%;margin-top: -27px;">&middot;</span><span style="float:left;width: 95%;text-align: left;">'.$tbp['value-2'].'</span></div>';
				}else{
					$mail_data .='<div style="height:25px;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;width: 95%;text-align: left;"></span><span style="float:right;"></span></div>';
				}

				if(!empty($tbp['value-3'])){
					$mail_data .='<div style="height:25px;border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float: left;font-size: 60px;width:5%;margin-top: -27px;">&middot;</span><span style="float:left;width: 95%;text-align: left;">'.$tbp['value-3'].'</span></div>';
				}else{
					$mail_data .='<div style="height:25px;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;width: 95%;text-align: left;"></span><span style="float:right;"></span></div>';
				}

				if(!empty($tbp['value-4'])){
					$mail_data .='<div style="height:25px;border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float: left;font-size: 60px;width:5%;margin-top: -27px;">&middot;</span><span style="float:left;width: 95%;text-align: left;">'.$tbp['value-4'].'</span></div>';
				}else{
					$mail_data .='<div style="height:25px;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;width: 95%;text-align: left;"></span><span style="float:right;"></span></div>';
				}

				if(!empty($tbp['value-5'])){
					$mail_data .='<div style="height:25px;border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float: left;font-size: 60px;width:5%;margin-top: -27px;">&middot;</span><span style="float:left;width: 95%;text-align: left;">'.$tbp['value-5'].'</span></div>';
				}else{
					$mail_data .='<div style="height:25px;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;width: 95%;text-align: left;"></span><span style="float:right;"></span></div>';
				}
				
				$mail_data .= '</a></td>';
			}
		$mail_data .='</tr>';
	}

	if(!empty($fourth_block)){
		$mail_data .='<tr>';
			foreach($fourth_block as $fbp){
				$image3 = wp_get_attachment_image_src($fbp['product-photo-2'],'full');
				$mail_data .= '<td style="width:50%;"><a style="text-decoration:none;color:#333;text-align:center;margin-bottom:20px;" href="'.$fbp['product-link-2'].'">';

				$mail_data .='<div style="border-bottom: 1px solid #ccc;padding: 5px;font-size: 15px;    display: inline-block;width:100%;background: #0b3a66;color: #fff;font-weight: bold;"><span style="text-align:center;;">'.$fbp['product-name-2'].'</span></div>';

				$mail_data .= '
					<img style="width:102.7%;height:150px;" src="'.$image3['0'].'">';
					
				$mail_data .= '<div style="background: #faa61a;color: #fff;padding: 5px;width: 100%;">Details</div>'; 

				if(!empty($fbp['value-1'])){
					$mail_data .='<div style="height:25px;border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float: left;font-size: 60px;width:5%;margin-top: -27px;">&middot;</span><span style="float:left;width: 95%;text-align: left;">'.$fbp['value-1'].'</span></div>';
				}else{
					$mail_data .='<div style="height:25px;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;width: 95%;text-align: left;"></span><span style="float:right;"></span></div>';
				}

				if(!empty($fbp['value-2'])){
					$mail_data .='<div style="height:25px;border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float: left;font-size: 60px;width:5%;margin-top: -27px;">&middot;</span><span style="float:left;width: 95%;text-align: left;">'.$fbp['value-2'].'</span></div>';
				}else{
					$mail_data .='<div style="height:25px;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;width: 95%;text-align: left;"></span><span style="float:right;"></span></div>';
				}

				if(!empty($fbp['value-3'])){
					$mail_data .='<div style="height:25px;border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float: left;font-size: 60px;width:5%;margin-top: -27px;">&middot;</span><span style="float:left;width: 95%;text-align: left;">'.$fbp['value-3'].'</span></div>';
				}else{
					$mail_data .='<div style="height:25px;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;width: 95%;text-align: left;"></span><span style="float:right;"></span></div>';
				}

				if(!empty($fbp['value-4'])){
					$mail_data .='<div style="height:25px;border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float: left;font-size: 60px;width:5%;margin-top: -27px;">&middot;</span><span style="float:left;width: 95%;text-align: left;">'.$fbp['value-4'].'</span></div>';
				}else{
					$mail_data .='<div style="height:25px;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;width: 95%;text-align: left;"></span><span style="float:right;"></span></div>';
				}

				if(!empty($fbp['value-5'])){
					$mail_data .='<div style="height:25px;border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float: left;font-size: 60px;width:5%;margin-top: -27px;">&middot;</span><span style="float:left;width: 95%;text-align: left;">'.$fbp['value-5'].'</span></div>';
				}else{
					$mail_data .='<div style="height:25px;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;width: 95%;text-align: left;"></span><span style="float:right;"></span></div>';
				}

				

				$mail_data .= '</a></td>';
			}
		$mail_data .='</tr>';
	}

			$mail_data .= '<tr>
				<td colspan="3" style="border-bottom: 1px solid #ccc;margin-top:40px;">					
					<div style="width:100%;display:inline-block;font-size:14px;">
						<br/>
						'.$basic_fields[0]['footer-part-2'].'
					</div>
				</td>
			</tr>';

			$mail_data .= '</table>';

		endwhile;
	endif;

	echo $mail_data;


	$multiple_recipients =  $basic_fields[0]['recipients-mail-2'];

			if(!empty($multiple_recipients)){

					$multiple_recipients = explode(",",$multiple_recipients);

					foreach($multiple_recipients as $recipients){
						
						$to = $recipients;
						$subject = "PNS Machineries";
						// Always set content-type when sending HTML email
						$headers = "MIME-Version: 1.0" . "\r\n";
						$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

						// More headers
						$headers .= 'From: <info@pnsmachineries.com>' . "\r\n";

						if(mail($to,$subject,$mail_data,$headers)){
							echo '<br/><br/>Mail Send to :: '.$recipients;
						}else{
							echo 'not send';
						}

					}

			}else{

				echo 'Recipient list Blank';

			}
			
?>