<?php
	get_header();
?>
	<div class="Page_Post"><?php
		$args = array(
			'name' => 'citadel'
		);
		// Custom query.
		$query = new WP_Query( $args );
		// Check that we have query results.
		if ( $query->have_posts() ) {
			// Start looping over the query results.
			while ( $query->have_posts() ) {
				$query->the_post();?>
				<h1 class= "Page_Title"> <?php the_title(); ?></h1>
				<h2 class= "Page_Content"><?php the_content(); ?></h2>
	    <?php }
		}
		else{
			echo 'Post not found';
		}?>
	</div>
	<aside id="Tip_Section"><!--Compliments-->
			<span class = "Tip_Image"><img src="http://localhost/wordpress/wp-content/uploads/2017/12/Pinterest.png"/></span>
			<p class = "Tip_Description"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor 
			invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
			At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
			no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,</p>
	</aside>
<?php
	get_footer();
?>