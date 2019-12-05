<?php
/**
 * Displays the searchform of the theme.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */
?>
<form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search-form searchform clearfix" method="get">
	<div class="search-wrap">
		<button class="search-icon" type="submit"><i class="fa fa-search fa-2x" aria-hidden="true"></i></button>
        <input type="text" placeholder="<?php esc_attr_e( 'Enter Keyword or Phrase', 'spacious' ); ?>" class="s field" name="s">
	</div>
</form><!-- .searchform -->
