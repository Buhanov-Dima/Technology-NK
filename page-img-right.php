<?php
/*
Template Name: Шаблон - изображение справа
*/
get_header();
?>

<main>
    <div class="page-wrapper d-flex flex-column min-vh-60 mb-5">
		<div class="container mt-5">
			<h2 class="mt-5 mb-3"><?php the_title(); ?></h2>
			
			
			<div class="d-flex about-info">
                    <div class="about-info-text">
                        <?php the_content(); ?>
                    </div>
                    <div class="about-info-img">                        
                        <div class="row gallery-grid">
                            <?php for ($i = 1; $i <= 10; $i++):
                                $image = get_field("image_$i");
                                $caption = get_field("caption_$i");
                                $info = get_field("info_$i");
                                if ($image): ?>
                                <div class="">
                                    <div class="img-wrapper">
                                        <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery" data-caption="<?php echo esc_attr($caption); ?>">
                                            <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($caption); ?>" class="img-fluid">
                                        </a>
                                    </div>

                                </div>
                            <?php endif; endfor; ?>
                        </div>
                    </div>
                </div>
		</div>
	</div>
</main>

<?php get_footer(); ?>