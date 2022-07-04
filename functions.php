<?php

function artshop_carbon_fields() {
    require( get_template_directory() . '/inc/carbon-fields.php' );
}
add_action( 'carbon_fields_register_fields', 'artshop_carbon_fields' );


function crb_load() {
    require_once( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}
add_action( 'after_setup_theme', 'crb_load' );


require( get_template_directory() . '/inc/cpt-gallery.php' );


function register_taxonomies() {
    require( get_template_directory() . '/inc/taxonomies.php' );
}
add_action( 'init', 'register_taxonomies', 0 );

?>
