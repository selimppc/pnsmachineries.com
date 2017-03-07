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

			$mail_data .= '</table>';

			echo $mail_data;

		endwhile;
	endif;




?>