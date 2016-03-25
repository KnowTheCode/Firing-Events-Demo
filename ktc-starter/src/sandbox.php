<?php
namespace KnowTheCode;

add_filter( 'title_enhancer_font_icon', __NAMESPACE__ . '\change_the_title_enhancer_font_icon' );
/**
 * Change the font icon for the Title Enhancer.
 *
 * @since 1.0.0
 *
 * @param string $font_icon
 *
 * @return string
 */
function change_the_title_enhancer_font_icon( $font_icon ) {
	if ( is_home() ) {
		return 'ionicons ion-link';
	}

	return $font_icon;
}

//add_filter( 'knowthecode', function( $value ){
//	d( 'in the filter knowthecode ' . $value );
//}, 52 );
//
//add_action( 'loop_start', __NAMESPACE__ . '\demo_no_callbacks' );
//function demo_no_callbacks() {
//	echo 'in demo_no_callbacks<br>';
//
//	global $wp_filter;
//
//	d( $wp_filter['knowthecode'] );
//
//	remove_all_filters( 'knowthecode' );
//
//	d( $wp_filter['knowthecode'] );
//
//	d( array_key_exists( 'knowthecode', $wp_filter ) );
//
//	$value = apply_filters( 'knowthecode', 'Hello there' );
//
//	echo 'back from apply_filters';
//	d( $value );
//}

//add_filter( 'all', __NAMESPACE__ . '\testing_the_all_filter' );
function testing_the_all_filter( $event_name ) {
	if ( 'title_enhancer_font_icon' == $event_name ) {
		d( func_get_args() );
	}
}