<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name');
          wp_title('|'); ?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

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

      <div class="mobile-menu d-lg-none" id="mobile-menu">
        <div class="mobile-menu-header d-flex justify-content-end mb-4">
          <button class="close-mobile-menu" id="close-menu">✕</button>
        </div>
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
    </div>

  </header>