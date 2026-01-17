<?php
/*
Template Name: Галлеря - справа
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
                        <!-- <p>
                            <b>ООО "Технология-НК"</b> - завод, специализирующийся на разработке,
                            изготовлении и поставке электрощитового оборудования любой
                            сложности, имеем собственное производство металлических корпусов
                            и щитов любой конструкции, изготавливаем климатические модульные
                            здания.
                        </p>
                        <p>
                            Наша компания <b>является сертифицированным производителем</b>
                            низковольтного электрощитового оборудования. Вся наша проудкция
                            имеет необходимые сертификаты и соответствует нормам технических
                            и эксплуатационных требований, что гарантирует их безопасную и бесперебойную работу.
                        </p>
                        <p>
                            <b>Предоставляем комплексные услуги по проектированию</b>,
                            производству, а также по монтажу низковольтного электрощитового
                            оборудования и щитового оборудования.
                        </p>
                        <p>
                            <b>Проводим модернизацию электроустановок</b> зданий и различных
                            промышленных объектов, осуществляем производство и поставку
                            нестандартного электротехнического оборудования.
                        </p>
                        <p>ООО "Технология-НК" это качество, профессионализм и стабильность!</p> -->
                    </div>
                    <div class="about-info-img">
                        <div class="owl-start owl-carousel owl-theme">
                            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/content/VRU/1.jpg" alt=""></div>
                            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/content/VRU/2.jpg" alt=""></div>
                            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/content/VRU/3.jpg" alt=""></div>
                            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/content/VRU/4.jpg" alt=""></div>
                        </div>
                    </div>
                </div>
		</div>
	</div>
</main>

<?php get_footer(); ?>