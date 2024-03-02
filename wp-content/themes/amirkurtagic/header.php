<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package amirkurtagic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'amirkurtagic' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="topbar">
						<div class="logo">
							<?php
								the_custom_logo();
							?>
						</div>
						<ul class="topbar__nav">
							<li><a href="#">Work</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
						<div id="menuToggler"><?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/menu-toggler.svg"); ?></div>
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
	<div id="mobileMenu">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<ul class="mobile-menu-nav">
						<li><a href="#">Work</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
