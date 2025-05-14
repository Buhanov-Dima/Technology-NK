<?php
/*
Template Name: Продукты
*/
get_header();
?>

<main>
	<div class="page-wrapper d-flex flex-column min-vh-60 mb-5">
		<div class="container mt-5">
			<h2 class="mt-5 mb-3"><?php the_title(); ?></h2>
			<?php the_content(); ?>



      <div class="swiper-container swiper-container-horizontal">
        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">

          <div class="swiper-slide" style="width: 260px;">
            <a href="/class/54/Low-Voltage-Electric.html">
              <div class="name">
                Low Voltage Electric
              </div>
              <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/content/gen-1.png" alt=""></div>
            </a>
          </div>
          
          <div class="swiper-slide" style="width: 260px;">
            <a href="class/55/High-Voltage-Electric.html">
              <div class="name">
                High Voltage Electric              </div>
              <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/content/gen-2.png" alt=""></div>
            </a>
          </div>

          <div class="swiper-slide" style="width: 260px;">
            <a href="/class/54/Low-Voltage-Electric.html">
              <div class="name">
                Low Voltage Electric
              </div>
              <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/content/gen-1.png" alt=""></div>
            </a>
          </div>
          
          <div class="swiper-slide" style="width: 260px;">
            <a href="class/55/High-Voltage-Electric.html">
              <div class="name">
                High Voltage Electric              </div>
              <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/content/gen-2.png" alt=""></div>
            </a>
          </div>

          <div class="swiper-slide" style="width: 260px;">
            <a href="/class/54/Low-Voltage-Electric.html">
              <div class="name">
                Low Voltage Electric
              </div>
              <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/content/gen-1.png" alt=""></div>
            </a>
          </div>
          
          <div class="swiper-slide" style="width: 260px;">
            <a href="class/55/High-Voltage-Electric.html">
              <div class="name">
                High Voltage Electric              </div>
              <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/content/gen-2.png" alt=""></div>
            </a>
          </div>
        
        </div>
      </div>
      <!-- Add Pagination -->
      <!-- <div class="swiper-pagination swiper-pagination-fraction"><span class="swiper-pagination-current">1</span> / <span class="swiper-pagination-total">3</span></div> -->
      <!-- Add Arrows -->
      <div class="button-next"></div>
      <div class="button-prev swiper-button-disabled"></div>
    
		</div>
	</div>
</main>

<?php get_footer(); ?>