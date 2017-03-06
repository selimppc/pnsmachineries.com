<?php

	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			the_title();

			$basic_fields = get_post_meta($post->ID,'basic-fields', true);
			$product_data_r = get_post_meta($post->ID,'mail-template-product', true);


			echo '<br/><br/>'.$basic_fields[0]['header-top'];
			echo '<br/><br/>'.$basic_fields[0]['header-bottom'];
			echo '<br/><br/>'.$basic_fields[0]['footer-part'].'<br/><br/>';

			foreach($product_data_r as $product){
				echo '<br/><br/>'.$product['product-name'];
				echo '<br/><br/>'.$product['special-offer-text'];
				echo '<br/><br/>'.$product['age'];
				echo '<br/><br/>'.$product['max-size'];
				echo '<br/><br/>'.$product['color'];
				$image = wp_get_attachment_image_src($product['product-photo'],'full');
				echo '<br/><br/>'.$image[0];

				echo '<br/><br/>';
			}

		endwhile;
	endif;

?>