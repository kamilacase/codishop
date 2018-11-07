<?php
get_header();

get_template_part('carousel');

while ( have_posts() ) : the_post();

	the_title();
	the_content();

	
endwhile;

get_sidebar(); 


get_footer(); 

?>