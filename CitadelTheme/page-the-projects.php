<?php
	get_header();
?>
	<div class="Page_Post">
		<h1 class="Page_Title">
			<?php if ( have_posts() ) : 
					while ( have_posts() ) : the_post();
						the_content();
					 endwhile;
				  else:
						echo '<p> No content found </p>';
				  endif; ?>
			</h1>
		
		<nav class="List_of_Projects">
			<?php 	
				$args = array(
					'theme_location' => 'projectLinks'
				);?>
			<?php	wp_nav_menu( $args ); ?>
		</nav>
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