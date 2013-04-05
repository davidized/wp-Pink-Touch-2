<?php
/**
 * @package WordPress
 * @subpackage Pink Touch 2
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="date">
		<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'pinktouch' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
			<?php if ( ! is_singular() && is_sticky() ) : ?>
				<p><b><?php _e( 'Featured', 'pinktouch' ); ?></b></p>
			<?php else : ?>
				<p><span class="day"><?php the_time( 'd' ); ?></span><?php the_time( 'M / Y' ); ?></p>
			<?php endif; ?>
		</a>
	</div>

	<div class="content">
		<h1 class="entry-title">
			<?php if ( ! is_single() ) : ?>
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'pinktouch' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
			<?php else : ?>
				<?php the_title(); ?>
			<?php endif; ?>
		</h1>

		<div class="entry-content">
			<?php if ( post_password_required() || is_singular() ) : ?>
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'pinktouch' ) ); ?>

			<?php else : ?>
				<?php
					$images = pinktouch_get_gallery_images();
					if ( $images ) :
						$total_images = count( $images );
						$image = array_shift( $images );
				?>

				<div class="gallery-thumb">
					<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image( $image, 'pinktouch-image-post' ); ?></a>
				</div><!-- .gallery-thumb -->

				<p class="gallery-info"><em><?php printf( _n( 'This gallery contains <a %1$s>%2$s photo</a>.', 'This gallery contains <a %1$s>%2$s photos</a>.', $total_images, 'pinktouch' ),
						'href="' . get_permalink() . '" title="' . esc_attr( sprintf( __( 'Permalink to %s', 'pinktouch' ), the_title_attribute( 'echo=0' ) ) ) . '" rel="bookmark"',
						number_format_i18n( $total_images )
					); ?></em></p>
				<?php endif; ?>
				<?php the_excerpt(); ?>
			<?php endif; ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'pinktouch' ), 'after' => '</div>' ) ); ?>
			<?php if ( get_the_author_meta( 'description' ) && is_singular() ) pinktouch_author_info(); ?>
		</div><!-- .entry-content -->
	</div><!-- .content -->

	<?php pinktouch_post_data(); ?>
</div><!-- /.post -->