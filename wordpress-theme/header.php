<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
	<div class="portfolio-container header-inner">
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">diogo//</a>
		<nav class="desktop-nav" aria-label="Navegação principal">
			<?php diogo_portfolio_navigation( 'desktop' ); ?>
		</nav>
		<button class="mobile-menu-button" type="button" aria-label="Abrir menu" aria-expanded="false" aria-controls="mobile-navigation">
			<span class="menu-icon" aria-hidden="true"><span></span><span></span><span></span></span>
		</button>
	</div>
	<nav id="mobile-navigation" class="mobile-nav" aria-label="Navegação móvel" hidden>
		<?php diogo_portfolio_navigation( 'mobile' ); ?>
	</nav>
</header>