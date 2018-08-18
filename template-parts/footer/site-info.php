<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

$footer_text = get_theme_mod( 'achtermaerz_footer_description', '' );

?>
<div class="site-info">
	<?php echo esc_html( $footer_text ); ?>
</div><!-- .site-info -->
