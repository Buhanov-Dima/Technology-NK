<?php
/*
Template Name: Галлерея
*/
get_header();
?>
<main>

<div class="page-wrapper d-flex flex-column min-vh-60 mt-5 mb-5">
		<div class="container">
			<h2 class="mt-5 mb-3"><?php the_title(); ?></h2>

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

		</div>
	</div>

</main>

<?php get_footer(); ?>
