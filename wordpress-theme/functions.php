<?php
/** Theme setup and assets. */

function diogo_portfolio_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
}
add_action( 'after_setup_theme', 'diogo_portfolio_theme_setup' );

function diogo_portfolio_navigation( $context = 'desktop' ) {
	$items = array(
		array( 'label' => 'Início', 'slug' => '', 'path' => '/' ),
		array( 'label' => 'Sobre Mim', 'slug' => 'sobre', 'path' => '/sobre/' ),
		array( 'label' => 'Projetos', 'slug' => 'projetos', 'path' => '/projetos/' ),
		array( 'label' => 'Competências', 'slug' => 'competencias', 'path' => '/competencias/' ),
		array( 'label' => 'Contacto', 'slug' => 'contacto', 'path' => '/contacto/' ),
	);

	foreach ( $items as $item ) {
		$is_current = empty( $item['slug'] ) ? is_front_page() : is_page( $item['slug'] );
		$classes = array( 'nav-link' );

		if ( 'contacto' === $item['slug'] ) {
			$classes[] = 'nav-contact';
		}
		if ( $is_current ) {
			$classes[] = 'is-active';
		}

		echo '<a class="' . esc_attr( implode( ' ', $classes ) ) . '" href="' . esc_url( home_url( $item['path'] ) ) . '"';
		if ( $is_current ) {
			echo ' aria-current="page"';
		}
		echo '>' . esc_html( $item['label'] ) . '</a>';
	}
}

function diogo_portfolio_enqueue_assets() {
	$theme_uri = get_template_directory_uri();
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'diogo-portfolio-theme', get_stylesheet_uri(), array(), $theme_version );
	wp_enqueue_style( 'diogo-portfolio-fonts', 'https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&family=Space+Grotesk:wght@400;500;600;700&display=swap', array(), null );
	wp_enqueue_style( 'diogo-portfolio-layout', $theme_uri . '/assets/css/theme.css', array( 'diogo-portfolio-theme', 'diogo-portfolio-fonts' ), $theme_version );
	wp_enqueue_script( 'diogo-portfolio-interactions', $theme_uri . '/assets/js/theme.js', array(), $theme_version, true );
}
add_action( 'wp_enqueue_scripts', 'diogo_portfolio_enqueue_assets' );

function diogo_portfolio_meta_description() {
	$descriptions = array(
		'home'         => 'Portefólio de Diogo Mateus, estudante de Engenharia Informática.',
		'sobre'        => 'Conhece o percurso, os interesses e a abordagem de Diogo Mateus à Engenharia Informática.',
		'projetos'     => 'Explora três projetos fictícios: Núcleo CLI, Pulso e Rota Certa.',
		'competencias' => 'Tecnologias de Diogo Mateus: JavaScript, Python, C#, PHP, HTML, CSS, Node.js e MySQL.',
		'contacto'     => 'Entra em contacto com Diogo Mateus através de um formulário de demonstração.',
	);
	$key = is_front_page() ? 'home' : ( is_page() ? get_post_field( 'post_name', get_queried_object_id() ) : '' );

	if ( isset( $descriptions[ $key ] ) ) {
		echo '<meta name="description" content="' . esc_attr( $descriptions[ $key ] ) . '">' . "\n";
	}
}
add_action( 'wp_head', 'diogo_portfolio_meta_description', 1 );