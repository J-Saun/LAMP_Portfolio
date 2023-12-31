<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @license GPL 2.0
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) { ?>
			<header class="page-header">
				<?php
				if ( siteorigin_page_setting( 'page_title' ) ) {
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				}
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
				<?php siteorigin_north_breadcrumbs(); ?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) {
			the_post();

			/*
			 * Include the Post-Format-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */
			get_template_part( 'template-parts/content', get_post_format() );
			?>

			<?php } ?>

			<?php siteorigin_north_posts_pagination(); ?>

		<?php } else { ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php } ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
