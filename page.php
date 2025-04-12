<?php get_header(); ?>
<main>
	
	<div class="page-wrapper d-flex flex-column min-vh-60 mb-5">
		<div class="container mt-5">
			<h2 class="mt-5 mb-3"><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
	</div>
    
</main>
<?php get_footer(); ?>
