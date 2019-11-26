<?php get_header(); ?>
<?php if ( shortcode_exists( 'wp-structuring-markup-breadcrumb') ) : ?>
<nav class="nav-breadcrumb">
	<?php echo do_shortcode( '[wp-structuring-markup-breadcrumb]' ); ?>
</nav>
<?php endif; ?>

<div class="wrapper clearfix">
	<main class="main">
		<?php if ( have_posts() ) : ?>
		<article>
			<?php the_post(); ?>
			<?php the_title( '<h1>', '</h1>' ); ?>
			<?php the_content(); ?>
		</article>
	<?php endif; ?>
	</main>
</div>
<?php get_footer();