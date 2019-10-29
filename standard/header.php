<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <h1>
      <a href="/">
				<?php
					if ( has_custom_logo() ) {
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$images = wp_get_attachment_image_src( $custom_logo_id, 'full' );
						$logo  = '<img src="';
						$logo .= $images[0] . '" width="';
						$logo .= $images[1] . '" height="';
						$logo .= $images[2] . '" alt="">';
						echo $logo;
					}
				?>
			</a>
    </h1>
    <nav class="global-nav">
			<?php
				$args = array(
					'theme_location' => 'primary'
				);
				wp_nav_menu( $args );
			?>
    </nav>
  </header>