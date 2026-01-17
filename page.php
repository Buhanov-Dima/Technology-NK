<?php get_header(); ?>

<main>
	<div class="page-wrapper d-flex flex-column min-vh-60 mt-5 mb-5">
		<div class="container">
			<h2 class="mt-5 mb-3"><?php the_title(); ?></h2>
			<?php the_content(); ?>

			<?php
			$child_pages = get_pages( array(
				'child_of' => get_the_ID(),
				'sort_column' => 'menu_order',
				'sort_order' => 'ASC',
			) );

			if ( ! empty( $child_pages ) ) : ?>

				<div class="row gallery-grid">
					<?php foreach ( $child_pages as $page ) : 
						$thumbnail = get_the_post_thumbnail( $page->ID, 'large' );
						$title = esc_html( $page->post_title );
						$excerpt = wp_trim_words( apply_filters( 'the_content', $page->post_content ), 20 );
						$link = get_permalink( $page->ID );
					?>
						<div class="col-12 col-sm-6 col-md-4 gallery-item">
						<div class="img-wrapper">
							<a href="<?php echo esc_url( $link ); ?>">
							<?php if ( has_post_thumbnail( $page->ID ) ) : ?>
								<?php echo $thumbnail; ?>
							<?php endif; ?>

							<div class="info-overlay">
								<h6><?php echo $title; ?></h6>
								<p><?php echo esc_html( $excerpt ); ?></p>
							</div>
							</a>
						</div>
						</div>
					<?php endforeach; ?>
				</div>

			<?php endif; ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>