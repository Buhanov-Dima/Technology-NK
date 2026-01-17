<?php get_header(); ?>

    <!-- Hero Section -->
    <section id="main">
        <div class="container relative">
            <div>
                <div class="main-text">
                    <h1 class="mg-0">Производство электрощитового оборудования в Перми</h1>
                    <ul class="mt-3">                        
                        <p>Компания "Технология-НК" занимается изготовлением электрощитового оборудования в Перми под ключ и предоставляет комплексные услуги по проектированию, автоматизации и монтажу.</p>
                    </ul>
                </div>
                <div class="d-flex blocks_wrap">
                <div class="wrap-block-info">
                    <div class="block-info blur-background">
                        <div class="wrap-block-info-title">
                            <div class="block-info-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-1-colored.png" alt=""></div>
                            <p class="block-info-title">Проектирование</p>
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
                            <p class="block-info-title">Производство</p>
                        </div>
                        <p class="block-info-text">Мы являемся прямым производителем металлических шкафов и блок-боксов, это позволяет нам гарантировать высокое качество продукции и короткие сроки поставки. </p>
                    </div>
                </div>
                
                <div class="wrap-block-info">
                    
                    <div class="block-info blur-background">
                        <div class="wrap-block-info-title">
                            <div class="block-info-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-3-colored.png" alt=""></div>
                            <p class="block-info-title">Монтаж</p>
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


    <section class="mt-5">
            <div class="container">
                <h2 class="mb-3">Продукция</h2>
                <div class="swiper-container swiper-container-horizontal">
                    <div class="swiper-wrapper product-carousel owl-carousel owl-theme" style="transform: translate3d(0px, 0px, 0px);">

                    <?php
                        // Укажи здесь ID нужных страниц
                        $page_ids = array(80, 99, 88, 170, 61, 84, 96); // Пример ID

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
                   
                    </div>
                </div>
                <div class="button-next"></div>
                <div class="button-prev swiper-button-disabled"></div>
                <div>
                    <p>Мы специализируемся на производстве и имеем большой опыт:</p>
                    <ul>
                        <li>Распределительных щитов для промышленных объектов</li>
                        <li>Шкафов автоматики и управления, ВРУ, НКУ, УКРМ и многих других</li>
                        <li>Специальных электрощитов по индивидуальным проектам</li>
                        <li>Металлических щитов и корпусов любых исполнений и степеней защиты</li>
                        <li>Климатических блок-боксов</li>
                    </ul>
                </div>
            </div>
    </section>

    <section id="production" class="mt-5">
        <div class="container">
            <h2 class="mb-4">Полный цикл производства электрощитов</h2>
            <div class="production-text">
                <p>Процесс изготовления начинается с тщательного проектирования, при котором учитываются все технические требования заказчика. </p>
                    <p>Наши инженеры профессионально выполняют необходимые расчёты и подбирают необходимые комплектующие для сборки, которые в свою очередь, мы используем только у проверенных производителей и опираемся на свой многолетний опыт. </p>
                    <p>Сборка на нашем заводе осуществляется квалифицированными специалистами с соблюдением всех норм ГОСТ и ПУЭ.</p></p>
                <p>Наш завод оснащён современным оборудованием для металлообработки, точной сборки металлических шкафов и щитов управления.</p>


            </div>

            <div class="d-flex d-wrap portfolio-gallery">
                <div class="production-carousel owl-carousel owl-theme">
                    <?php for ($i = 1; $i <= 10; $i++): 
                        $image = get_field("image_$i", 20);
                        if ($image): ?>
                            <div class="wrap-gallery-slide item">
                                <a data-fancybox="gallery" href="<?php echo esc_url($image['url']); ?>">
                                    <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                </a>
                            </div>
                    <?php endif; endfor; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="container">
            <h2 class="mb-4">Преимущества работы с нами</h2>
            <div class="production-text">
                <p>Мы, как завод - изготовитель предлагаем:</p>
                <ul>
                    <li>Профессиональный расчет и разработку проектов любой сложности</li>
                    <li>Контроль качества на всех этапах изготовления</li>
                    <li>Использование оптимальных и надежных комплектующих</li>
                    <li>Точное соблюдение сроков поставки</li>
                    <li>Гарантию на все виды продукции</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="container">
            <h2 class="mb-4">Как заказать электрощитовое оборудование?</h2>
            <div class="production-text">
                <p>
                    Для расчёта стоимости изготовления электрощитов и другого оборудования, высылайте нам техническое задание или описание требований, после чего наши специалисты сделают все необходимые расчёты, подберут нужное оборудование, спроектируют и составят необходимую документацию, вы получите на согласование коммерческое предложение.
                </p>
                <p>
                    Компания "Технология НК" осуществляет поставку электрощитового оборудования по Перми и Пермскому краю, а также всей России.
                </p>
                <p>
                    Мы готовы разработать и изготовить электрощиты любой сложности с учетом ваших требований.
                </p>
            </div>
        </div>
    </section>
    
    <!-- Call to Action Section -->
    <section id="partners" class="mt-5">
        <div class="container">
            <h2 class="mb-4">Партнеры</h2>
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

	<section class="ftco-section contact-section pb-5 mt-5" id="contact">
        <div class="container">
            <h2 class="mb-4">Наши контакты</h2>

            <div class="row block-contacts">
                <div class="col-md-6">
                    <div class="d-flex flex-column h-100">
                        <div class="block-contacts-div">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/phone-colored.png" alt="">
                            </div>
                            <div>
                                <div>
                                    Телефон для связи:</br> +7 (342) 203-13-18
                                </div>
                            </div>
                        </div>
                        <div class="block-contacts-div">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/accounting-colored.png" alt="">
                            </div>
                            <div>
                                    E-mail:
                                    tech@technology-nk.ru
                                </div>
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
                            <button class="btn btn-primary effect" data-bs-toggle="modal" data-bs-target="#contactModal">Оставить заявку</button>
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
