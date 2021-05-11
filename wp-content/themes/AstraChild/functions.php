<?php
/*Denne fil er en del af AstraChild, astra child theme.

Alle funktionerne i denne fil vil blive indlæst før det overordnede temas funktioner.
Lær mere på https://codex.wordpress.org/Child_Themes.

Note: denne funktion indlæser det overtemaet stylesheet før undertemaets stylesheet
(lad det være tomt medmindre du ved, hvad du laver.)
*/

if ( ! function_exists( 'suffice_child_enqueue_child_styles' ) ) {
	function AstraChild_enqueue_child_styles() {
	    // loading parent style
	    wp_register_style(
	      'parente2-style',
	      get_template_directory_uri() . '/style.css'
	    );

	    wp_enqueue_style( 'parente2-style' );
	    // loading child style
	    wp_register_style(
	      'childe2-style',
	      get_stylesheet_directory_uri() . '/style.css'
	    );
	    wp_enqueue_style( 'childe2-style');
	 }
}
add_action( 'wp_enqueue_scripts', 'AstraChild_enqueue_child_styles' );

/*Skriv dine egne funktioner her */
