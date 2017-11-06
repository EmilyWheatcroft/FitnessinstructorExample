<?php
/*
* Template Name: Landing Page
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

<link rel="stylesheet" href="css/main.css" type="text/css" />

<main>

<div class="grid-x">
	<div class="small-12 cell">
		<div class="cover_landing">
			<?php include_once("modules/nav.php"); ?>
			<div class="cover_text">
				<h1 class="cover_title"><?php the_title(); ?></h1>
				<h2 class="cover_sub">Personal Trainer and Fitness Model</h2>
				<a href="#welcome"><i class="fa fa-arrow-down arrow-icon centered fa-2x hvr-hang" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</div>

<div id="welcome">
	<h4>Welcome</h4>
	<p class="welcome_text"><?php the_content(); ?></p>
</div>
</main>

<div id="sections">
	<div class="grid-x grid-container">
		<div class="medium-4 cell section hvr-grow">
			<?php if ( is_active_sidebar( 'personal_trainer_img' ) ) : ?>
	           <?php dynamic_sidebar( 'personal_trainer_img' ); ?>
	        <?php endif; ?>
		</div>
		<div class="medium-4 cell section hvr-grow">
			<?php if ( is_active_sidebar( 'personal_workout_plan' ) ) : ?>
	           <?php dynamic_sidebar( 'personal_workout_plan' ); ?>
	        <?php endif; ?>
		</div>
		<div class="medium-4 cell section hvr-grow">
			<?php if ( is_active_sidebar( 'personal_diet_plan' ) ) : ?>
	           <?php dynamic_sidebar( 'personal_diet_plan' ); ?>
	         <?php endif; ?>
		</div>
	</div>
</div>

<?php endwhile; else: ?>
    <p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>
<?php wp_footer(); ?>
<?php include "footer.php" ?>

</body>
</html>
