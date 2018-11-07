
<main>

<?php
	$args = array(
                'post_type' => 'product',
                'posts_per_page' => 10,
                'product_cat' => 'sideshow'
            );

	$slide = new WP_Query( $args );
	$firstslide = true;
 ?>


<div class="carouselcontainer">
	<div class="row">
		<div class="col-12">

	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  	<div class="carousel-inner">
  		<?php
  			if ( $slide->have_posts() ) {
  				
  		 	while ( $slide->have_posts() ) {
  				$slide->the_post();?>
  				<div class="carousel-item <?php
  				if ($firstslide == true){
  					echo "active";
  					$firstslide = false;
  				}
  				?>">
  				<?php echo woocommerce_get_product_thumbnail(); ?>
  				<div class="carousel-caption">
    				<h2><?php the_title(); ?></h2>
    				<p>You can find here the best star-fighter all time </p>
    				<button style="width:250px" class="btn btn-outline-danger my-2 my-sm-0" type="submit">LEARN MORE</button>
 			 	</div>
		</div>
		<?php
  				
  		 	}
  		}
  		wp_reset_postdata();
  		?>
  
  	</div>
</div>
</div>
</div>
	<div>
  		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
     	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
     	<span class="sr-only">Previous</span>
   		</a>
   		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
     	<span class="carousel-control-next-icon" aria-hidden="true"></span>
     	<span class="sr-only">Next</span>
   		</a>
	</div>
</div>
