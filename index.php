<?php get_header(); ?>

    <!-- Hero Section -->
    <section id="main">
        <div class="container relative">
            <div>
                <div class="main-text">
                    <!-- <p>Электрощитовые решения для бизнеса и частного сектора!</p> -->
                    <h1 class="mg-0">Производство электрощитового оборудования</h1>
                    <ul class="mt-3">
                        <li>Проектирование</li>
                        <li>Производство</li>
                        <li>Профессиональный монтаж</li>
                    </ul>
                </div>
                <div class="d-flex blocks_wrap">
                <div class="wrap-block-info">
                    <div class="block-info blur-background">
                        <div class="wrap-block-info-title">
                            <div class="block-info-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-1-colored.png" alt=""></div>
                            <h3 class="block-info-title">Проектирование</h3>
                        </div>
                        <p class="block-info-text">Проектирование и разработка технической документации,
                            комплекта конструкторской документации.
                        </p>
                    </div>
                </div>
                
                <div class="wrap-block-info">
                    <div class="block-info blur-background">
                        <div class="wrap-block-info-title">
                            <div class="block-info-icon "><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-2-colored.png" alt=""></div>
                            <h3 class="block-info-title">Производство</h3>
                        </div>
                        <p class="block-info-text">Большой опыт производства электрооборудования и выполнения
                            электромонтажных
                            работ с соблюдением всех технологических норм и требований.
                        </p>
                    </div>
                </div>
                
                <div class="wrap-block-info">
                    
                    <div class="block-info blur-background">
                        <div class="wrap-block-info-title">
                            <div class="block-info-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-3-colored.png" alt=""></div>
                            <h3 class="block-info-title">Монтаж</h3>
                        </div>
                        <p class="block-info-text">Выполняем комплексные поставки электрооборудования на объекты нефтяных
                            месторождений, строительства
                            и электрификации.
                        </p>
                    </div>
                </div>
                
            </div>
            </div>
        </div>
    </section>


    <section>
        <!-- <div class="page-wrapper d-flex flex-column min-vh-60 mb-5"> -->
            <div class="container mt-5">
                <h2 class="mt-5 mb-3">Продукция</h2>
                <div class="swiper-container swiper-container-horizontal">
                    <div class="swiper-wrapper product-carousel owl-carousel owl-theme" style="transform: translate3d(0px, 0px, 0px);">

                    <?php
                        // Укажи здесь ID нужных страниц
                        $page_ids = array(80, 99, 84, 88, 170, 61); // Пример ID

                        foreach ( $page_ids as $page_id ) {
                            $page = get_post($page_id);
                            if ( $page && $page->post_status === 'publish' ) {
                                // Здесь можно задать уникальные изображения вручную или через ACF
                                $image_url = get_template_directory_uri() . '/img/content/gen-' . $page_id . '.png';
                                ?>
                                <div class="swiper-slide item">
                                    <a href="<?php echo get_permalink($page); ?>">
                                        <div class="name"><?php echo esc_html($page->post_title); ?></div>
                                        <!-- <div class="img">
                                            <img src="<?php echo esc_url($image_url); ?>" alt="">
                                        </div> -->
                                        <div class="img">
                                            <?php echo get_the_post_thumbnail($page->ID, 'medium'); ?>
                                        </div>

                                    </a>
                                </div>
                                <?php
                            }
                        }
                    ?>

                    <!-- <div class="swiper-slide" style="width: 260px;">
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
                    </div> -->
                    
                    </div>
                </div>
                <!-- Add Pagination -->
                <!-- <div class="swiper-pagination swiper-pagination-fraction"><span class="swiper-pagination-current">1</span> / <span class="swiper-pagination-total">3</span></div> -->
                <!-- Add Arrows -->
                <div class="button-next"></div>
                <div class="button-prev swiper-button-disabled"></div>
                
                    </div>
                <!-- </div> -->
    </section>
    
    <!-- About Section -->
    <!-- <section id="about" class="pt-45">

        <div class="container">
            <div class="about-wrap">
                <h2>О компании</h2>
                <div class="d-flex about-info">
                    <div class="about-info-text">
                        <p>
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
                        <p>ООО "Технология-НК" это качество, профессионализм и стабильность!</p>
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
    </section> -->

    <!-- Portfolio Section -->
    <section id="production" class="pt-45">
        <div class="container">
            <h2 class="mb-4">Производство</h2>
            <div class="production-text">
                <!-- <p>
                    Собственное производство металлических корпусов и щитов любой конструкции и степени сложности с применением лазерной резки, гибки, гравировки и покраски, а также нанесением пенополиуретанового уплотнителя по технологии гаскейтинг (Gasketing).
                    В  соответствии с требованиями ГОСТ и СНиП. Предоставляем квалифицированную помощь по подбору продукции с учетом области использования.
                </p>

                <p>
                    Технология-НК является производителем электрощитового оборудования для
                    промышленных, сельскохозяйственных и непроизводственных объектов, жилых и административных зданий
                </p>
            
                <p>
                    Собственное производство металлических корпусов и щитов любой конструкции и степени сложности с применением лазерной резки, гибки, гравировки и покраски, а также нанесением пенополиуретанового уплотнителя по технологии гаскейтинг (Gasketing)
                    Изготавливаем блок-контейнеры и модульные здания под ключ с электротехническим оборудованием, необходимыми коммуникациями, разных размеров и типов из усиленного каркаса, огнестойких и пожаробезопасных сендвич-панелей, соответствующих ГОСТ и СНиП
                </p> -->

                <p>Технология-НК является производителем электрощитового оборудования для
                промышленных, сельскохозяйственных и непроизводственных объектов, жилых и административных зданий
</p>
<p>
                Собственное производство металлических корпусов и щитов любой конструкции и степени сложности с применением лазерной резки, гибки, гравировки и покраски, а также нанесением пенополиуретанового уплотнителя по технологии гаскейтинг (Gasketing)
</p>
<p>
                Изготавливаем блок-контейнеры и модульные здания под ключ с электротехническим оборудованием, необходимыми коммуникациями, разных размеров и типов из усиленного каркаса, огнестойких и пожаробезопасных сендвич-панелей, соответствующих ГОСТ и СНиП
</p>

                <!-- <p>Собственное производство металлических корпусов и щитов любой конструкции и степени сложности с
                    применением
                    лазерной резки, гибки, гравировки и покраски.
                </p>
                <p>
                    Изготавливаем: электротехнические боксы, стоечные и приборные корпуса, корпуса для блоков питания.
                </p>
                <p>В соответствии с требованиями ГОСТ и СНиП. Предоставляем квалифицированную помощь по подбору
                    продукции с учетом
                    области использования.
                </p> -->
            </div>

            <div class="d-flex d-wrap portfolio-gallery">
                <div class="production-carousel owl-carousel owl-theme">
                    <div class="wrap-gallery-slide item">
                        <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/img/content/products/1.jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/content/products/1.jpg">
                        </a>
                    </div>
    
                    <div class="wrap-gallery-slide item">
                        <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/img/content/products/2.jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/content/products/2.jpg">
                        </a>
                    </div>
    
                    <div class="wrap-gallery-slide item">
                        <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/img/content/products/3.jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/content/products/3.jpg">
                        </a>
                    </div>
    
                    <div class="wrap-gallery-slide">
                        <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/img/content/products/4.jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/content/products/4.jpg">
                        </a>
                    </div>
    
                    <div class="wrap-gallery-slide">
                        <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/img/content/products/5.jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/content/products/5.jpg">
                        </a>
                    </div>
    
                    <div class="wrap-gallery-slide">
                        <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/img/content/products/8.jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/content/products/6.jpg">
                        </a>
                    </div>
    
                    <div class="wrap-gallery-slide">
                        <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/img/content/products/7.jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/content/products/7.jpg">
                        </a>
                    </div>
    
                    <div class="wrap-gallery-slide">
                        <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/img/content/products/8.jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/content/products/8.jpg">
                        </a>
                    </div>
    
                    <div class="wrap-gallery-slide">
                        <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/img/content/products/9.jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/content/products/9.jpg">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="blocks">
        <div class="container mt-5">
            <div class="d-flex blocks_wrap">
                <div class="wrap-block-info">
                    <div class="wrap-block-info-title">
                        <div class="block-info-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-1.png" alt=""></div>
                        <h3 class="block-info-title">Проектирование</h3>
                    </div>
                    <div class="block-info">
                        <p class="block-info-text">Проектирование и разработка технической документации,
                            комплекта конструкторской документации.
                        </p>
                    </div>
                </div>
                
                <div class="wrap-block-info">
                    <div class="wrap-block-info-title">
                        <div class="block-info-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-2.png" alt=""></div>
                        <h3 class="block-info-title">Производство</h3>
                    </div>
                    
                    <div class="block-info">
                        <p class="block-info-text">Большой опыт производства электрооборудования и выполнения
                            электромонтажных
                            работ с соблюдением всех технологических норм и требований.
                        </p>
                    </div>
                </div>
                
                <div class="wrap-block-info">
                    <div class="wrap-block-info-title">
                        <div class="block-info-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-3.png" alt=""></div>
                        <h3 class="block-info-title">Монтаж</h3>
                    </div>
                    <div class="block-info">
                        <p class="block-info-text">Выполняем комплексные поставки электрооборудования на объекты нефтяных
                            месторождений, строительства
                            и электрификации.
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </section> -->
    
<!-- Call to Action Section -->
    <section id="partners">
        <div class="container">
            <h2 class="mt-5 mb-4">Партнеры</h2>
            <div>
                <div class="partners-items">
                    <div class="partners-carousel owl-carousel owl-theme d-flex">
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/rosheft.png" alt=""></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/gas.png" alt=""></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/transneft.png" alt=""></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/nikel.png" alt=""></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/etm.png" alt=""></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/gloster.png" alt=""></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/perforator.png" alt=""></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/russianlght.png" alt=""></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/tek.png" alt=""></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/zavod.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<section class="ftco-section contact-section pt-5 pb-5" id="contact">
        <div class="container">
            <h2 class="mt-5 mb-4">Наши контакты</h2>

            <div class="row block-contacts">
                <div class="col-md-6">
                    <div class="d-flex flex-column h-100">
                        <div class="block-contacts-div">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/phone-colored.png" alt="">
                            </div>
                            <div>
                                <div>
                                    Телефон для связи:</br> +7 (342) 203-90-33, +7 (929) 901-11-25
                                </div>
                                <!-- <div>
                                    E-mail:
                                    tehnologynk@mail.ru
                                </div> -->
                            </div>
                        </div>
                        <div class="block-contacts-div">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/accounting-colored.png" alt="">
                            </div>
                            <div>
                                    E-mail:
                                    tehnologynk@mail.ru
                                </div>
                            <!-- <div>
                                <div>Бухгалтерия</div>
                                <div>E-mail:buh@technology-nk.ru</div>
                            </div> -->
                        </div>
                        <div class="block-contacts-div">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/placeholder-colored.png" alt="">
                            </div>
                            <div>
                                <div>Адрес компании:</div>
                                <div>
                                    614015, Пермский край, г. Пермь, ул. Ленина, д.50, оф. 148
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
                            width="100%" height="400" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>


    

<?php get_footer(); ?>
