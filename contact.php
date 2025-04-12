<?php
/*
Template Name: Контакты
*/
get_header();
?>


<div class="page-wrapper d-flex flex-column min-vh-60 mb-5">
		<div class="container mt-5">
            <h2 class="mt-5 mb-3"><?php the_title(); ?></h2>
			<?php the_content(); ?>

            <div class="row block-contacts">
                <div class="col-md-6">
                    <div class="d-flex flex-column h-100">
                        <div class="block-contacts-div">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/phone-colored.png" alt="">
                            </div>
                            <div>
                                <div>
                                    Телефон для связи: +7 (342) 203-90-33
                                </div>
                                <div>
                                    E-mail:
                                    tehnologynk@mail.ru
                                </div>
                            </div>
                        </div>
                        <div class="block-contacts-div">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/accounting-colored.png" alt="">
                            </div>
                            <div>
                                <div>Бухгалтерия</div>
                                <div>E-mail:buh@technology-nk.ru</div>
                            </div>
                        </div>
                        <div class="block-contacts-div">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/placeholder-colored.png" alt="">
                            </div>
                            <div>
                                <div>Адрес компании:</div>
                                <div>
                                    614015, Пермский край, г. Пермь, ул. Ленина, д.50, оф. 141/4
                                </div>
                            </div>                            
                        </div>
                        <div class="w-100 btn-container">
                            <button class="btn btn-primary effect">Оставить заявку</button>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-6 d-flex align-items-stretch">
                    <div id="map">
                        <iframe
                            src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab52bf7778f8b9e03ce8265c4e1067caea5f97c1962765efab52de9b94f5ce042&amp;source=constructor"
                            width="100%" height="500" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>