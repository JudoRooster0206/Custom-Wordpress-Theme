		<footer><!-- Links, FAQ, Copyright-->
			<div id="The_Footer">
				<span id="links">
					<a href="https://www.reddit.com"><img src="http://localhost/wordpress/wp-content/uploads/2017/12/Reddit.png"/></a>
					<a href="https://www.deviantart.com"><img src="http://localhost/wordpress/wp-content/uploads/2017/12/Deviantart.png"/></a>
					<a href="https://www.pinterest.com"><img src="http://localhost/wordpress/wp-content/uploads/2017/12/Pinterest.png"/></a>
					<a href="https://www.khanacademy.org"><img src="http://localhost/wordpress/wp-content/uploads/2017/12/Khan-Academy.jpg"/></a>
					<a href="https://tinybuddha.com"><img src="http://localhost/wordpress/wp-content/uploads/2017/12/TinyBuddha.png"/></a>
					<a href="https://www.tutorialspoint.com"><img src="http://localhost/wordpress/wp-content/uploads/2017/12/Tutorials-Point.jpg"/></a>
					<a href="http://tvtropes.org"><img src="http://localhost/wordpress/wp-content/uploads/2017/12/Tv-Tropes.png"/></a>
					<a href="http://www.writersdigest.com"><img src="http://localhost/wordpress/wp-content/uploads/2017/12/Writers-Digest.jpg"/></a>
					<a href="https://www.udemy.com"><img src="http://localhost/wordpress/wp-content/uploads/2017/12/Udemy.png"/></a>
					<a href="https://www.youtube.com"><img src="http://localhost/wordpress/wp-content/uploads/2017/12/Youtube.png"/></a>
				</span>
				<span id="FAQ">
					<?php 
						$args = array(
							'theme_location' => 'footer'
						);
						wp_nav_menu($args);
					?>
				</span>
				<span id="Copyright"> Atrius &copy 2017</span>
			</div>
		</footer>
	<?php wp_footer(); ?>
	</body>
</html>