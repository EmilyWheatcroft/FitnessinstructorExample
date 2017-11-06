<?php
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
define( 'IMAGES', TEMPPATH. "/img");

/* Register our widgetized areas. */
function arphabet_widgets_init() {
	register_sidebar( array(
		'name'          => 'Personal Trainer Image',
		'id'            => 'personal_trainer_img',
	)
 	);
	register_sidebar( array(
		'name'          => 'Personal Workout Plan',
		'id'            => 'personal_workout_plan',
	)
 	);
	register_sidebar( array(
		'name'          => 'Personal Diet Plan',
		'id'            => 'personal_diet_plan',
	)
 	);
 	register_sidebar( array(
		'name'          => 'PT Contact Form',
		'id'            => 'pt_contact_form',
	)
 	);
}
/* Call Widget Function */
add_action( 'widgets_init', 'arphabet_widgets_init' );


/* Registering Menu */
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );
?>
