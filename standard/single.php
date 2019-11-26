<?php get_header(); ?>
<?php if ( shortcode_exists( 'wp-structuring-markup-breadcrumb') ) : ?>
<nav class="nav-breadcrumb">
	<?php echo do_shortcode( '[wp-structuring-markup-breadcrumb]' ); ?>
</nav>
<?php endif; ?>

<div class="wrapper clearfix">
	<main class="main">
	<?php if ( have_posts() ) : the_post(); ?>
		<article>
			<?php the_title( '<h1>', '</h1>' ); ?>
			<div class="post-date">
				更新日：<time datetime="<?php the_modified_time( 'Y-m-d' ); ?>"><?php the_modified_time( 'Y-m-d（D）' ); ?></time>
				登録日：<time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'Y-m-d（D）' ); ?></time>
			</div>
			<?php the_content(); ?>
		</article>
	<?php endif; ?>
	</main>
</div>
<?php get_footer();