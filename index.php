<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="page" role="main">
	<div class="suivi-nav">
		<a href="#">Accueil</a> &rsaquo;
		<a href="#">Produits</a> &rsaquo;
		<a href="#">Raineuse/plieuse/perforation</a> &rsaquo;
		<a href="#" class="suivi-active">Raineuse-Plieuse Touchline CF 375 </a>
	</div>
	<article class="article-product">
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="large-12 columns">
				<h2 class="article-title"><?php echo the_field('titre_produit'); ?></h2>
				<hr>
			</div>
			<div class="small-12 medium-6 columns">
				<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
			</div>
			<div class="small-12 medium-6 columns product-description">
				<h3>Description</h3>
				<p><?php echo the_field('description_produit'); ?></p>
			</div>
			<div class="large-12 columns">
				<h3>Caractéristique produit</h3>
				<p><?php echo the_field('caract_produit'); ?></p>
			</div>
			<div class="product-link">
				<a href="<?php echo the_field('caract_produit'); ?>">Fiche Produit (PDF)</a>
				<a href="<?php echo the_field('lien_contact'); ?>">Nous contacter</a>
			</div>

		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php } ?>

	</article>

</div>

<?php get_footer();
