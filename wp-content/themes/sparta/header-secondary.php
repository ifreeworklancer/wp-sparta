<!doctype html>
<html lang="ru_RU">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&amp;subset=cyrillic" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

   <?php get_template_part('includes/partials/svgs'); ?>

    <!-- Header Main -->
    <header id="app-header" class="light">
        <div class="container-fluid position-relative d-flex justify-content-between align-items-center">

            <div class="logo">
                <a href="/" class="logo-item logo-item--white">
                    <img src="<?php echo get_theme_file_uri('images/icon/logo/logo-white.png') ?>" alt="logo">
                </a>
                <a href="/" class="logo-item logo-item--dark">
                    <img src="<?php echo get_theme_file_uri('images/icon/logo/logo-dark.png') ?>" alt="logo">
                </a>
            </div>

            <nav class="menu">
                <ul class="menu-list list-unstyled d-flex flex-column flex-xl-row align-items-center">
                    <li class="menu-list-item">
                        <a href="<?php echo site_url() . '#teams'?>" class="menu-list-item__link scroll-link">
                            О нас
                        </a>
                    </li>
                    <li class="menu-list-item">
                        <a href="<?php echo site_url() . '#side'?>" class="menu-list-item__link scroll-link">
                            Инновации
                        </a>
                    </li>
                    <li class="menu-list-item">
                        <a href="<?php echo site_url() . '#services'?>" class="menu-list-item__link scroll-link">
                            Услуги
                        </a>
                    </li>
                    <li class="menu-list-item">
                        <a href="<?php echo site_url() . '#partners'?>" class="menu-list-item__link scroll-link">
                            Нам доверяют
                        </a>
                    </li>
                    <li class="menu-list-item">
                        <a href="<?php echo site_url() . '#app-footer'?>" class="menu-list-item__link scroll-link">
                            Свяжитесь с нами
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="burger-menu d-flex flex-column justify-content-center align-items-center position-relative">
                <div class="line line--top"></div>
                <div class="line line--middle"></div>
                <div class="line line--bottom"></div>
                <div class="line line--left"></div>
                <div class="line line--right"></div>
            </div>

        </div>
    </header>

    <?php wp_reset_postdata(); ?>

    <main>