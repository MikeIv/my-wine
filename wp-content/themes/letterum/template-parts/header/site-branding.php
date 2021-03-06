<?php
/**
 * Displays header site branding
 *
 * @package Letterum
 */

?>

<?php
if ( ! has_custom_logo() && 0 == get_theme_mod( 'site_title_hide', 1 ) && 0 == get_theme_mod( 'site_tagline_hide', 1 ) ) {
	return;
}
?>

<div class="site-branding wine_header__branding">

	<?php
			if ( has_custom_logo() ) {
					the_custom_logo();
			}
			
			if ( 0 != get_theme_mod( 'site_title_hide', 1 ) ) {
				if ( is_front_page() && is_home() ) :
				?>
					<h1 class="site-title wine_header__title"><?php bloginfo( 'name' ); ?></h1>
	<?php
				else :
				?>
					<span class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<?php bloginfo( 'name' ); ?>
						</a>
					</span>
					
		<?php
				endif;
			} // site_title_hide
				
			$description = get_bloginfo( 'description', 'display' );
			
			if ( 0 != get_theme_mod( 'site_tagline_hide', 1 ) && ( $description || is_customize_preview() ) ) : ?>
				<span class="site-description wine_header__undertitle"><?php echo $description; /* WPCS: xss ok. */ ?></span>
		<?php
			endif; ?>
</div><!-- .site-branding -->