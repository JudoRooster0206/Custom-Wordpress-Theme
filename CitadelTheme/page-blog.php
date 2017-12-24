<?php
	get_header();
	$args = array(
		'numberposts' => 5,
		'category_name'=> 'blogpost',
		'orderby' => 'post_date'
	);
?>
<div class="Page_Post-Blog">
		<h1> Last 5 Blog Posts: </h1>
		<?php
		$query = new WP_Query( $args );
		// Check that we have query results.
		if ( $query->have_posts() ) {
			// Start looping over the query results.
			while ( $query->have_posts() ) {
				$query->the_post();?>
				<p class= "Page_Title-Blog"><a href=<?php the_permalink()?>> 
				<?php the_time('F j, Y');?> - <?php the_title(); ?></a></p>
	    <?php }
		}
		else{
			echo 'Post not found';
		}?>
</div>
<div class="Tag_Section-Blog">
	<h2>All Tags</h2>
	<p>
	<?php 
		$tags = get_tags(array(
		  'hide_empty' => false
		));
		foreach ($tags as $tag) {
		  echo $tag->name . ',';
		}
	?>
	</p>
</div>
<?php
	get_footer();
?>