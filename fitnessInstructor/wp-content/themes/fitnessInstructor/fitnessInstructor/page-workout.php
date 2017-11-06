<?php
/*
* Template Name: Workout Page
*/
?>

<?php get_header(); ?>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

<main>
	<div class="grid-x">
	<div class="small-12 cell">
		<div class="cover_landing">
			<?php include_once("modules/nav.php"); ?>
			<div class="cover_text">
				<h1 class="cover_title"><?php the_title(); ?></h1>
				<h2 class="cover_sub">Bespoke workout plans to get the most out of your training</h2>
				<a href="#welcome"><i class="fa fa-arrow-down arrow-icon centered fa-2x hvr-hang" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</div>
<?php the_content(); ?>

<div class="grid-x grid-container">
	<div class="medium-3 cell"></div>
	<div class="medium-6 cell log-in">
		<h4>Please log in to access your workout plan</h4>
		<form class="show-password">
		  <label for="username">Your login</label>
		  <input type="text" value="" placeholder="Enter Username" id="username">
		  <div class="password-wrapper">
		    <label for="password">Your password</label>
		    <input type="password" value="" placeholder="Enter Password" id="password" class="password">
		    <a href="#" class="button round">Log in</a>
		  </div>
		</form>
	</div>
	<div class="medium-3 cell"></div>
</div>


</main>

<?php endwhile; else: ?>
    <p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>

<?php wp_footer(); ?>
<?php include "footer.php" ?>

</body>
</html>