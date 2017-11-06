<?php
/*
* Template Name: Personal Trainer
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

<link rel="stylesheet" href="css/main.css" type="text/css" />

<main>

<div class="grid-x">
	<div class="small-12 cell">
		<div class="cover_pt">
			<?php include_once("modules/nav.php"); ?>
			<div class="cover_text">
				<h1 class="cover_title cover_title_pt">Personal Training</h1>
				<h2 class="cover_sub">Unlock your potential</h2>
				<a href="#welcome"><i class="fa fa-arrow-down arrow-icon centered fa-2x hvr-hang" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</div>

<div class="grid-x grid-container" id="welcome">
	<div class="medium-12 cell">
		<h4>Personal Training</h4>
		<?php the_content(); ?>
	</div>
</div>

<div class="parallax"></div>

<div class="grid-x grid-container text-center">
	<table>
	  <thead>
	    <tr>
	      <th class="text-center">Bronze Package</th>
	      <th class="text-center">Silver Package</th>
	      <th class="text-center">Gold Package</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <td>10 Sessions at £100</td>
	      <td>20 Sessions for £175</td>
	      <td>30 Sessions for £250</td>
	    </tr>
	    <tr>
	      <td>Once a week (allowance for holidays)</td>
	      <td>Once or twice a week (allowance for holidays)</td>
	      <td>Whenever you want! (prebooked)</td>
	    </tr>
	    <tr>
	      <td>Personalised diet and workout plan</td>
	      <td>Personalised diet and workout plan</td>
	      <td>Personalised diet and workout plan</td>
	    </tr>
	  </tbody>
	</table>
</div>

<div class="testimonial-block-vertical grid-x grid-container">
  <div class="testimonial-block-vertical-quote">
    <p>I can't begin to express how Jack's personal training has changed my life. I use the Gold Package and I am so much more confident than I was before I started. Regular sessions with Jack are just part of the package - he keeps me in check with a diet plan and workouts to complete in between sessions. I would recommend Jack for anyone who is considering a personal trainer.</p>
  </div>
  <div class="testimonial-block-vertical-person">
    <img class="testimonial-block-vertical-avatar" src="img/sophie.jpg" alt="Personal Trainer" />
    <div>
      <p class="testimonial-block-vertical-name">Katie Smith</p>
      <p class="testimonial-block-vertical-info">Customer of 6 months</p>
    </div>
  </div>
</div>

<div class="parallax_2"></div>

<div class="grid-x grid-container pt-form">
	<div class="medium-3"></div>
	<div class="medium-6">
		<h4>Interested? Drop me a message for more information</h4>
		<?php if ( is_active_sidebar( 'pt_contact_form' ) ) : ?>
			<?php dynamic_sidebar( 'pt_contact_form' ); ?>
		<?php endif; ?>
	</div>
	<div class="medium-3"></div>
</div>

<?php endwhile; else: ?>
    <p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>
<?php wp_footer(); ?>
<?php include "footer.php" ?>

</body>
</html>