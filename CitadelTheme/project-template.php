<?php
/*
Template Name: Project Template
*/

get_header();
$page_title=get_the_title();
global $wpdb;

if(isset($_POST['SubmitButton']))
{
$NewTitle=stripslashes_deep($_POST["TitleField"]);
$NewDescription=stripslashes_deep($_POST["DescriptionField"]);
$NewImageUrl=stripslashes_deep($_POST["FileField"]);?>

<?php $wpdb->update('project_table', 
		array('Title' => $NewTitle, 'Description'=> $NewDescription, 'Image_Url'=>$NewImageUrl), 
		array('Page' => $page_title));?>
<?php
}
$project_title = $wpdb->get_var("SELECT Title FROM project_table WHERE Page = '$page_title'");
$project_description = $wpdb->get_var("SELECT Description FROM project_table WHERE Page = '$page_title'");
$project_url = $wpdb->get_var("SELECT Image_Url FROM project_table WHERE Page = '$page_title'");
?>
	<nav id="LeftMenu">
		<?php
			$args = array(
				'theme_location' => 'side'
			);
			
			wp_nav_menu( $args ); 
		?>
	</nav>
		<main id="Main_Content"><!--Main content-->
			<section id="Project_Section">
				<button id="Modal_Button" onclick="Modal_Summoner()">Edit</button>
				<div id="Project_Modal">
					<form id="Project_Updating_Form" method="post">
						
						<p> Title: </p>						
						<input class = "UploadFields" type="text" name="TitleField" value="<?php echo $project_title?>"/>
						<p> Description: </p> 
						<input class = "UploadFields" type="text" size="50px" name="DescriptionField" value="<?php echo $project_description?>"/>
						
						<input class = "UploadFields" type="file" name="FileField" value="<?php echo $project_url ?>"/>
						<input class = "UploadFields" type="submit" name="SubmitButton" value="Upload"/>
						
					</form>
				</div>
				<p class="Project_Title">
				<?php
					echo $project_title;
				?>
				</p>
				<span class="Project_Img"><img  src="http://localhost/wordpress/wp-content/uploads/2017/12/<?php echo $project_url?>"/>
				</span>
				<p class="Project_Description"> 
					<?php
						echo $project_description;
					?>
				</p>
				</div>
			</section>
			<article id="Article_Section">
				<?php if ( have_posts() ) : 
					while ( have_posts() ) : the_post();?>
						<h1 class= "Page_Title"> <?php the_title(); ?></h1>
						<h2 class= "Page_Content"><?php the_content(); ?></h2>
					<?php endwhile;
				  else:
						echo '<p> No content found </p>';
				  endif;?>
			</article>
		</main>
		
		<aside id="Tip_Section"><!--Compliments-->
			<span class = "Tip_Image"><img src="http://localhost/wordpress/wp-content/uploads/2017/12/Pinterest.png"/></span>
			<p class = "Tip_Description"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor 
			invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
			At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
			no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,</p>
		</aside>
		<script type="text/javascript">
			var btn=document.getElementById("Modal_Button");
			var modalThing=document.getElementById("Project_Modal");
			function Modal_Summoner(){
				modalThing.style.display="block";
			}
				
		</script>
<?php
get_footer();
?>		