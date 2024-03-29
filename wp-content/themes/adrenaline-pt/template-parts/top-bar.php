<?php
/**
 * Top bar used in the theme
 *
 * @package adrenaline-pt
 */

$top_bar_visibility = get_theme_mod( 'top_bar_visibility', 'yes' );

if ( 'no' !== $top_bar_visibility ) : ?>
<div class="top<?php echo 'hide_mobile' === $top_bar_visibility ? '  hidden-md-down' : ''; ?>">
	<div class="container">
		<div class="top__left">
			<?php
			if ( is_active_sidebar( 'top-left-widgets' ) ) {
				dynamic_sidebar( apply_filters( 'adrenaline_top_left_widgets', 'top-left-widgets', get_the_ID() ) );
			}
			?>
		</div>
		<div class="top__right">
			<?php
			if ( is_active_sidebar( 'top-right-widgets' ) ) {
				dynamic_sidebar( apply_filters( 'adrenaline_top_right_widgets', 'top-right-widgets', get_the_ID() ) );
			}
			?>
		</div>
	</div>
</div>
<?php endif; ?>
