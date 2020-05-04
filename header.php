<!DOCTYPE html>
<html  <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    /*Ensure elements load hidden before ScrollRevel runs*/
        html.sr .reviews__wrapper, html.sr .bio__content-wrapper, html.sr .bio__video-container {
        visibility: hidden;
        }
    </style>
    <?php wp_head();?>
     <?php
    function theme_get_customizer_css() {
    
    ob_start();

    $logo_text_color = get_theme_mod( 'logo_text_color', '' );
    if ( ! empty( $logo_text_color ) ) {
      ?>
      .title__primary {
        color: <?php echo $logo_text_color; ?>;
      }
      <?php
    }

    $heading_text_color = get_theme_mod( 'heading_text_color', '' );
    if ( ! empty( $heading_text_color ) ) {
      ?>
      .title__secondary{
        color: <?php echo $heading_text_color; ?>;
      }
      <?php
    }

    $feature_text_color = get_theme_mod( 'feature_text_color', '' );
    if ( ! empty( $feature_text_color ) ) {
      ?>
      .customer__title,
      .customer__name,
      .customer__content,
      .owner__name,
      .owner__title,
      .owner__text,
      .bio__title,
      .bio__content{
        color: <?php echo $feature_text_color; ?>;
      }
      <?php
    }
    
    $footer_heading_color = get_theme_mod( 'footer_heading_color', '' );
    if ( ! empty( $footer_heading_color ) ) {
      ?>
      .footer_title {
        color: <?php echo $footer_heading_color; ?>;
      }
      <?php
    }

    $link_color = get_theme_mod( 'link_color', '' );
    if ( ! empty( $link_color ) ) {
      ?>
      .banner__link,
      .footer__link {
        color: <?php echo $link_color; ?>;
      }
      <?php
    }

    $accent_color = get_theme_mod( 'accent_color', '' );
    if ( ! empty( $accent_color ) ) {
      ?>
      h2:after {
        background-color: <?php echo $accent_color; ?>;
      }
      
      .wpforms-validate{
        border-top: 5px solid <?php echo $accent_color; ?>;
      }

      .img__avatar,
      .wpforms-container .wpforms-list-inline .wpforms-image-choices-modern li,
      div.wpforms-container div.wpforms-uploader,
      .wpforms-submit-container > button {
        border-color: <?php echo $accent_color; ?>;
      }
      <?php
    }

    $theme_color = get_theme_mod( 'theme_color', '' );
    if ( ! empty( $theme_color ) ) {
      ?>
      .aletta_bio,
      #aletta__bio_content {
       background-color: <?php echo $theme_color; ?>;
       
      }
      <?php
    }
    
    $css = ob_get_clean();
    return $css;
    }   


    ?> 
</head>
<body <?php body_class();?> >

    <!--Front Page Navigation Mark-up-->
    <?php 
        if(is_front_page()){ ?>
        <header>
            <nav class="side-nav">
            <ul class="nav-bar">
                <li class="nav__item">
                <svg class="nav-icons">
                    <use href="<?php echo get_theme_file_uri("/assests/img/raw/nav-icons/aletta-nav-icons.svg#home")?>">
                </svg>
                <a class="banner__link scroll" href="#top">Home</a>
                </li>
                <li class="nav__item">
                <svg class="nav-icons">
                    <use href="<?php echo get_theme_file_uri("/assests/img/raw/nav-icons/aletta-nav-icons.svg#gallery")?>">
                </svg>
                <a class="banner__link scroll" href="#showCase">Gallery</a>
                </li>
                <li class="nav__item">
                <svg class="nav-icons">
                    <use href="<?php echo get_theme_file_uri("/assests/img/raw/nav-icons/aletta-nav-icons.svg#person")?>">
                </svg>
                <a class="banner__link scroll" href="#person">About Me</a>
                </li>
                <li class="nav__item">
                <svg class="nav-icons">
                    <use href="<?php echo get_theme_file_uri("/assests/img/raw/nav-icons/aletta-nav-icons.svg#shop")?>">
                </svg>
                <a class="banner__link scroll" href="<?php echo esc_url(site_url('/shop')); ?>">Shop</a>
                </li>
                <li class="nav__item">
                <svg class="nav-icons">
                    <use href="<?php echo get_theme_file_uri("/assests/img/raw/nav-icons/aletta-nav-icons.svg#contactMe")?>">
                </svg>
                <a class="banner__link scroll" href="#contactMe">Contact</a>
                </li>
            </ul>
            </nav>

            <!--Front Page Hamburger Icon-->
            <div id="site__wrapper">
            <div class="hamburger-menu">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>

            <!--Front Page Site Logo-->
            <div id="top" class="image_and_slogan" role="banner">
                <div class="logo_and_tagline animated fadeIn blur">
                <a href="<?php echo esc_url(site_url('/')); ?>">
                    <div class="logo_img">
                        <?php the_custom_logo();?>
                    </div>
                </a> 
                <h1 class="title__primary"><?php bloginfo('description'); ?></h1>
                </div>
            </div>
        </header>
    <?php } else { ?>

        <!--Interior Pages Markup -->
        <nav class="side-nav">
            <ul class="nav-bar">
                <li class="nav__item">
                <svg class="nav-icons">
                    <use href="<?php echo get_theme_file_uri("/assests/img/raw/nav-icons/aletta-nav-icons.svg#home")?>">
                </svg>
                <a class="banner__link scroll" href="<?php echo esc_url(site_url('/')); ?>">Home</a>
                </li>
                <li class="nav__item">
                <svg class="nav-icons">
                    <use href="<?php echo get_theme_file_uri("/assests/img/raw/nav-icons/aletta-nav-icons.svg#gallery")?>">
                </svg>
                <a class="banner__link scroll" href="<?php echo esc_url(site_url('/#showCase'));?>">Gallery</a>
                </li>
                <li class="nav__item">
                <svg class="nav-icons">
                    <use href="<?php echo get_theme_file_uri("/assests/img/raw/nav-icons/aletta-nav-icons.svg#person")?>">
                </svg>
                <a class="banner__link scroll" href="<?php echo esc_url(site_url('/#person'));?>">About Me</a>
                </li>
                <li class="nav__item">
                <svg class="nav-icons">
                    <use href="<?php echo get_theme_file_uri("/assests/img/raw/nav-icons/aletta-nav-icons.svg#shop")?>">
                </svg>
                <a class="banner__link scroll" href="<?php echo esc_url(site_url('/shop')); ?>">Shop</a>
                </li>
                <li class="nav__item">
                <svg class="nav-icons">
                    <use href="<?php echo get_theme_file_uri("/assests/img/raw/nav-icons/aletta-nav-icons.svg#contactMe")?>">
                </svg>
                <a class="banner__link scroll" href="<?php echo esc_url(site_url('/#contactMe'));?>">Contact</a>
                </li>
            </ul>
            </nav>

            <!--Site Hamburger Icon-->
            <div id="site__wrapper">
            <div class="hamburger-menu">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>

        <!--Site Logo-->
        <div id="home" class="image_and_slogan" role="banner">
            <div class="logo_and_tagline animated fadeIn blur">
            <a href="<?php echo esc_url(site_url('/')); ?>">
              <div class="logo_img">
                <?php the_custom_logo();?>
              </div>
            </a> 
            <h1 class="title__primary">Bringing Your Vision Into Focus</h1>
            </div>
        </div>

    <?php }
   

   

        
