<?php

	if ( have_posts() ) :
		while ( have_posts() ) : the_post();

			$banner_image_id = get_post_meta($post->ID,'banner-photo', true);
			$banner_image = wp_get_attachment_image_src($banner_image_id,'full');
			
			$basic_fields = get_post_meta($post->ID,'basic-fields', true);
			$product_data_r = get_post_meta($post->ID,'mail-template-product', true);

			$first_block = array_slice($product_data_r,0,3);
			$second_block = array_slice($product_data_r,3,3);
			$third_block = array_slice($product_data_r,6,3);

			$mail_data = '';
			$mail_data .= '<table border="0" cellpadding="10" cellspacing="0" style="width:100%;font-family:arial;margin:auto;">';

				$mail_data .= '<tr><td colspan="3" ><img style="width:100%;height:200px;" src="'.$banner_image['0'].'"></td></tr>';

				$mail_data .= '<tr><td colspan="3" style="    border-bottom: 1px solid #ccc;">
						<div style="color: #00a651;float: left;">Newsletter '.Date('Y-F-d').' </div>
						<a style="color: #00a651;float: right;" href="http://www.pnsmachineries.com/">Click here to see our stock list</a>
						</td>
					  </tr>';

				$mail_data .= '<tr>
								<td colspan="3" style="    border-bottom: 1px solid #ccc;">
									<div style="color: #0c4da2;font-weight: bold;text-align: center;font-size: 16px;  margin-top: 20px;">'.$basic_fields[0]['header-top'].'</div>
									<div style="color: #00a651;font-weight: bold;text-align: center;font-size: 18px;margin-top: 20px;margin-bottom: 30px;">'.$basic_fields[0]['header-bottom'].'</div>
								</td>
							   </tr>';

					if(!empty($first_block)){
							$mail_data .='<tr>';
								foreach($first_block as $fbp){
									$image = wp_get_attachment_image_src($fbp['product-photo'],'full');
									$mail_data .= '<td style="width:33%;"><a style="text-decoration:none;color:#333;text-align:center;margin-bottom:20px;" href="'.$fbp['product-link'].'">
										<h2 style="color: #0c4da2;font-size: 16px;margin:10px;">'.$fbp['product-name'].'</h2>
										<div style="background: #faa61a;color: #fff;padding: 5px;width: 100%;">'.$fbp['special-offer-text'].'</div>
										<div style="border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;">Ref No:</span><span style="float:right;">'.$fbp['ref-no'].'</span></div>
										<div style="border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;">Age:</span><span style="float:right;">'.$fbp['age'].'</span></div>
										<div style="border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;">Max size:</span><span style="float:right;">'.$fbp['max-size'].'</span></div>
										<div style="border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;">Color:</span><span style="float:right;">'.$fbp['color'].'</span></div>
										<img style="width:100%;height:150px;padding:5px;" src="'.$image['0'].'">
									</a></td>';
								}
							$mail_data .='</tr>';
					}

					if(!empty($second_block)){
							$mail_data .='<tr>';
								foreach($second_block as $sbp){
									$image1 = wp_get_attachment_image_src($sbp['product-photo'],'full');
									$mail_data .= '<td style="width:33%;"><a style="text-decoration:none;color:#333;text-align:center;margin-bottom:20px;" href="'.$sbp['product-link'].'">
										<h2 style="color: #0c4da2;font-size: 16px;margin:10px;">'.$sbp['product-name'].'</h2>
										<div style="background: #faa61a;color: #fff;padding: 5px;width: 100%;">'.$sbp['special-offer-text'].'</div>
										<div style="border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;">Ref No:</span><span style="float:right;">'.$sbp['ref-no'].'</span></div>
										<div style="border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;">Age:</span><span style="float:right;">'.$sbp['age'].'</span></div>
										<div style="border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;">Max size:</span><span style="float:right;">'.$sbp['max-size'].'</span></div>
										<div style="border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;">Color:</span><span style="float:right;">'.$sbp['color'].'</span></div>
										<img style="width:100%;height:150px;padding:5px;" src="'.$image1['0'].'">
									</a></td>';
								}
							$mail_data .='</tr>';
					}

					if(!empty($third_block)){
							$mail_data .='<tr>';
								foreach($second_block as $tbp){
									$image2 = wp_get_attachment_image_src($tbp['product-photo'],'full');
									$mail_data .= '<td style="width:33%;"><a style="text-decoration:none;color:#333;text-align:center;margin-bottom:20px;" href="'.$tbp['product-link'].'">
										<h2 style="color: #0c4da2;font-size: 16px;margin:10px;">'.$sbp['product-name'].'</h2>
										<div style="background: #faa61a;color: #fff;padding: 5px;width: 100%;">'.$tbp['special-offer-text'].'</div>
										<div style="border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;">Ref No:</span><span style="float:right;">'.$tbp['ref-no'].'</span></div>
										<div style="border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;">Age:</span><span style="float:right;">'.$tbp['age'].'</span></div>
										<div style="border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;">Max size:</span><span style="float:right;">'.$tbp['max-size'].'</span></div>
										<div style="border-bottom: 1px solid #ccc;padding: 5px;font-size: 12px;    display: inline-block;width:100%;"><span style="float:left;">Color:</span><span style="float:right;">'.$tbp['color'].'</span></div>
										<img style="width:100%;height:150px;padding:5px;" src="'.$image2['0'].'">
									</a></td>';
								}
							$mail_data .='</tr>';
					}

					$mail_data .= '<tr>
						<td colspan="3" style="border-bottom: 1px solid #ccc;margin-top:40px;">
							<div style="padding-right:20px;float: left;margin-top: 40px;">More machines-check our </div>
							<a style="color: #00a651;float: left;margin-top: 40px;" href="http://www.pnsmachineries.com/">sales list</a>
							
							<div style="width:100%;display:inline-block;font-size:14px;">
								<br/>
								'.$basic_fields[0]['footer-part'].'
							</div>
						</td>
					</tr>';
			
			$mail_data .= '</table>';

			echo $mail_data;

		endwhile;
	endif;




?>