<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head <?php do_action('add_head_attributes'); ?>>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php wp_title(); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Architects+Daughter|Kirang+Haerang" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <header>
        <div class="hero-head">
            <nav id="navbar" class="navbar">
                    <div class="container">
                        <div class="navbar-brand">
                            <a class="navbar-item" href="<?php echo site_url() ?>">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="Surfbreak Protection Society">
                            </a>
                            <span class="navbar-burger burger" data-target="navbarMenuHeroA">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </div>
                        <div id="navbarMenuHeroA" class="navbar-menu">
                            <div class="navbar-end">
                                <a class="navbar-item page-link">
                                    ABOUT US
                                </a>
                                <a class="navbar-item page-link">
                                    REGIONS
                                </a>
                                <a class="navbar-item page-link">
                                    NEWS
                                </a>
                                <a class="navbar-item page-link">
                                    EVENTS
                                </a>
                                <a class="navbar-item page-link">
                                    MERCHANDISE
                                </a>
                                <a class="navbar-item page-link">
                                    CONTACT US
                                </a>
                                <span class="navbar-item">
                                    <a class="button is-primary" href="index.html">
                                        <span>DONATE</span>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

        <div class="nav-collapse">
            <?php wp_nav_menu(array(
                'menu_class' => false,
                'theme_location' => 'primary-menu',
                'container' => false
            )); ?>
        </div>

        <?php 
        if(is_front_page()) : ?>
            <div>
                <?php the_custom_logo(); ?>
            </div>
        <?php endif; ?>
        <?php if(is_page('contact')) : ?>
        <h1>I am the contact</h1>
        <?php endif; ?>
        <?php if(is_home()) : ?>
        <h1>I am the home</h1>
        <?php endif; ?>
    </header>