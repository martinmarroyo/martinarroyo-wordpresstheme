<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Martin_Arroyo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/d546ab0744.js" crossorigin="anonymous"></script>
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'martinarroyo' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-wrap">
		<div class="branding-wrap">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() || is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$martinarroyo_description = get_bloginfo( 'description', 'display' );
			if ( $martinarroyo_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $martinarroyo_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
	</div><!-- .branding-wrap -->
	<div class="nav-wrap">

		<nav id="site-navigation" class="main-navigation">


			<!-- button to show overlay -->
			<button id="hamburger-menu" class="menu-toggle" onclick="openNav()" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-bars"></i></button>
			<!-- Mobile menu overlay -->
			<div id="myNav" class="overlay">
			<!-- button to close overlay -->
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<div class="overlay-content">
				<div class="overlay-menu-items">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
				</div>
			<div class="socials-overlay"> LinkedIn | Github | Twitter | Instagram | Youtube </div>
		</div> <!-- overlay-content -->
		<script>
			/* Open when someone clicks on the span element */
			function openNav() {
				/* Toggle navigation menu */
				document.getElementById("primary-menu").style.display ="block";
				document.getElementById("myNav").style.width = "100%";
			}

			/* Close when someone clicks on the "x" symbol inside the overlay */
			function closeNav() {
				document.getElementById("myNav").style.width = "0%";
			}
		</script>
		</div><!-- overlay -->
		</nav><!-- #site-navigation -->
	</div><!--.nav-wrap -->
</div><!-- .header-wrap -->
	</header><!-- #masthead -->
