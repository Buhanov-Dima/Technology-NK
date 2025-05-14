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
<!-- 

				<div class="row gallery-grid">
					<?php for ($i = 1; $i <= 10; $i++):
						$image = get_field("image_$i");
						$caption = get_field("caption_$i");
						$info = get_field("info_$i");
						if ($image): ?>
						<div class="col-12 col-sm-6 col-md-4 gallery-item">
							<div class="img-wrapper">
								<a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery" data-caption="<?php echo esc_attr($caption); ?>">
									<img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($caption); ?>" class="img-fluid">
									
									<div class="info-overlay">
									<?php if ($caption): ?>
										<h6><?php echo esc_html($caption); ?></h6>
									<?php endif; ?>
									<?php if ($info): ?>
										<p><?php echo esc_html($info); ?></p>
									<?php endif; ?>
									</div>

								</a>
							</div>

						</div>
					<?php endif; endfor; ?>
				</div>
			
				<div class="child-pages-grid">
					<?php foreach ( $child_pages as $page ) : ?>
						<div class="child-page-card">
							<a href="<?php echo get_permalink( $page->ID ); ?>" class="child-page-link">
								<?php if ( has_post_thumbnail( $page->ID ) ) : ?>
									<div class="child-page-thumbnail">
										<?php echo get_the_post_thumbnail( $page->ID, 'medium' ); ?>
									</div>
								<?php endif; ?>
								<div class="child-page-content">
									<h3><?php echo esc_html( $page->post_title ); ?></h3>
									<p><?php echo wp_trim_words( apply_filters( 'the_content', $page->post_content ), 20 ); ?></p>
								</div>
							</a>
						</div>
					<?php endforeach; ?>
				</div> -->
			<?php endif; ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>