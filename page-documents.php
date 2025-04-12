<?php
/*
Template Name: Документы
*/
get_header();
?>
<div class="page-wrapper d-flex flex-column min-vh-60 mb-5">
    <div class="container mt-5">
        <h2 class="mt-5 mb-3"><?php the_title(); ?></h2>
  
        <div class="row g-4">
    <?php for ($i = 1; $i <= 10; $i++): 
      $pdf = get_field("pdf_$i");
      $title = get_field("pdf_title_$i");
      $preview = get_field("pdf_preview_$i");
      if ($pdf): ?>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="border p-3 h-100 d-flex flex-column justify-content-between">
            <div>
              <h5 class="mb-3"><?php echo esc_html($title ?: 'Документ ' . $i); ?></h5>
              <div class="mb-3">
                <a data-fancybox data-type="iframe" data-src="<?php echo esc_url($pdf['url']); ?>" href="javascript:;">
                  <?php if ($preview): ?>
                    <img src="<?php echo esc_url($preview['url']); ?>" alt="PDF preview" style="width: 100%; max-height: 250px; object-fit: contain;">
                  <?php else: ?>
                    <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="PDF preview" style="width: 100%; max-height: 250px; object-fit: contain;">
                  <?php endif; ?>
                </a>
              </div>
            </div>
            <a href="<?php echo esc_url($pdf['url']); ?>" class="btn btn-outline-secondary w-100" download>
              Скачать PDF
            </a>
          </div>
        </div>
    <?php endif; endfor; ?>
  </div>
    </div>
</div>

<?php get_footer(); ?>
