<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); wp_title('|'); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<!-- Header -->
    <!--<header class="header fixed-top">
        <div class="container d-flex relative">
            <div class="logo">
                <a href="index.html">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/logo-new.png" alt="Company Logo">
                </a>
            </div>

            <nav class="nav">
                <ul class="d-flex justify-content-center align-items-center mg-0">
                    <li><a class="nav-link active" aria-current="page" href="/company.html">о компании</a></li>
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                        aria-expanded="false">услуги</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Проектирование</a></li>
                        <li><a class="dropdown-item" href="#">Монтаж и ПНР</a></li>
                        <li><a class="dropdown-item" href="#">Автоматизация</a></li>
                    </ul>
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                        aria-expanded="false">производство</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">Оборудование низкого напряжения</a>
                            <div class="dropdown-menu-sub">
                                <a href="#">пример 1</a>
                                <a href="#">пример 2</a>
                                <a href="#">пример 3</a>
                            </div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Оборудование высокого напряжения</a>
                            <div class="dropdown-menu-sub">
                                <a href="#">пример 1</a>
                                <a href="#">пример 2</a>
                                <a href="#">пример 3</a>
                            </div>
                        </li>
                        <li><a class="dropdown-item" href="#">Производство щитов и корпусов</a></li>
                        <li><a class="dropdown-item" href="#">Производство климатических блок-боксов</a></li>
                    </ul>
                    <li><a class="nav-link" href="#products">проекты</a></li>
                    <li><a class="nav-link" href="#contacts">контакты</a></li>
                </ul>

            </nav>
            <a class="nav-link" href="tel:+7342555555">+7(342)-55-55-515</a>
        </div>
    </header>-->

<!--
<header class="header fixed-top">
    <div class="container d-flex relative">
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/logo-new.png" alt="Company Logo">
            </a>
        </div>

        <nav class="nav">
            <?php
				wp_nav_menu(array(
				'theme_location' => 'main_menu',
				'menu_class' => 'd-flex justify-content-center align-items-center mg-0',
				'container' => false,
				'walker' => new WP_Bootstrap_Navwalker(),
			));
            ?>
        </nav>

        <a class="nav-link" href="tel:+7342555555">+7(342)-55-55-515</a>
    </div>
	
	<div class="burger d-lg-none" id="burger">
		<span></span>
		<span></span>
		<span></span>
	</div>
	
	<div class="mobile-menu d-lg-none" id="mobile-menu">
		<div class="mobile-menu-inner">
		  <?php
		  wp_nav_menu(array(
			'theme_location' => 'main_menu',
			'menu_class' => 'mobile-nav',
			'container' => false,
			'walker' => new WP_Bootstrap_Navwalker(),
		  ));
		  ?>
			<a class="nav-link mobile-phone" href="tel:+7342555555">+7(342)-55-55-515</a>
		</div>
	</div>
</header>-->
	
	
	
<header class="header fixed-top">
  <div class="container d-flex justify-content-between align-items-center">
    <div class="logo">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/logo-new.png" alt="Company Logo">
      </a>
    </div>

    <div class="burger d-lg-none" id="burger">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <nav class="nav d-none d-lg-flex" id="main-nav">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'main_menu',
        'menu_class' => 'd-flex justify-content-center align-items-center mg-0',
        'container' => false,
        'walker' => new WP_Bootstrap_Navwalker(),
      ));
      ?>
    </nav>
	  
	<a class="nav-link d-none d-lg-block" href="tel:+7342555555">+7(342)-55-55-515</a>
  </div>

  <div class="mobile-menu d-lg-none" id="mobile-menu">
    <div class="mobile-menu-inner">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'main_menu',
        'menu_class' => 'mobile-nav',
        'container' => false,
        'walker' => new WP_Bootstrap_Navwalker(),
      ));
      ?>
      <a class="nav-link mobile-phone" href="tel:+7342555555">+7(342)-55-55-515</a>
    </div>
  </div>
</header>