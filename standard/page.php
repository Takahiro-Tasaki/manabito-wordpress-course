<?php get_header(); ?>
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