<?php
/*
Template Name: Галерея
*/
get_header();
?>
<main>
	<div class="page-wrapper d-flex flex-column min-vh-60 mb-5">
		<!-- <div class="container mt-5">
			<h2 class="mt-5 mb-3"><?php the_title(); ?></h2>
			<?php the_content(); ?>
			
			<div class="row g-4">
				<?php for ($i = 1; $i <= 10; $i++): 
				  $image = get_field("image_$i");
				  $caption = get_field("caption_$i");
				  if ($image): ?>
					<div class="col-12 col-sm-6 col-md-4 text-center">
					<?php if ($caption): ?>
						<div class="mt-2 small text-muted text-left"><?php echo esc_html($caption); ?></div>
					  <?php endif; ?>
					  <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery" data-caption="<?php echo esc_attr($caption); ?>">
						<img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($caption); ?>" class="img-fluid" style="object-fit: cover; width: 100%; height: 250px;">
					  </a>
					</div>
				<?php endif; endfor; ?>
			  </div>
		</div> -->

		<div class="container mt-5">
			<h2 class="mb-4"><?php the_title(); ?></h2>

			<div class="row no-gutters gallery-grid">
				<?php for ($i = 1; $i <= 10; $i++): 
				$image = get_field("image_$i");
				$caption = get_field("caption_$i");
				$info = get_field("info_$i");
				if ($image): ?>
					<!-- <div class="col-6 col-md-4 col-lg-3 gallery-item"> -->
					<div class="col-12 col-sm-6 col-md-4 gallery-item">

					<div class="img-wrapper">
						<a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery" data-caption="<?php echo esc_attr($caption); ?>">
						<img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($caption); ?>" class="img-fluid">
						<div class="overlay">
							<div class="overlay-text">
							<h6><?php echo esc_html($caption); ?></h6>
							<p><?php echo esc_html($info); ?></p>
							</div>
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
