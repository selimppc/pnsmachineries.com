<?php

	if ( have_posts() ) :
		while ( have_posts() ) : the_post();

			echo 'hello';



		endwhile;
	endif;




?>