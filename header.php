<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?//php bloginfo('name'); wp_title('|'); ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="wrapper"> <!-- обертка для Flexbox -->

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

      <div class="btn-container">
        <button class="btn btn-primary effect" data-bs-toggle="modal" data-bs-target="#contactModal">Связаться с нами</button>
      </div>
      <!-- <a class="nav-link d-none d-lg-block" href="tel:+79299011125">+7(929)-901-11-25</a> -->

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
          <!-- <a class="nav-link mobile-phone" href="tel:+79299011125">+7(929)-901-11-25</a> -->
          <div class="btn-container">
            <button class="btn btn-primary effect" data-bs-toggle="modal" data-bs-target="#contactModal">Связаться с нами</button>
          </div>
        </div>
      </div>
      <div class="menu-overlay d-lg-none" id="menu-overlay"></div>
    </div>

  </header>