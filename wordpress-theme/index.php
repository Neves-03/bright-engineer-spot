<?php get_header(); ?>
<main id="main-content" class="page-main">
	<div class="portfolio-container content-band">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article <?php post_class(); ?>>
					<h1 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></h1>
					<div class="section-copy"><?php the_content(); ?></div>
				</article>
			<?php endwhile; ?>
		<?php else : ?>
			<p class="section-copy">Ainda não há conteúdo publicado.</p>
		<?php endif; ?>
	</div>
</main>
<?php get_footer(); ?>