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
        <nav class="nav-collapse">
            <?php wp_nav_menu(array(
                'menu_class' => false,
                'theme_location' => 'primary-menu',
                'container' => false
            )); ?>
        </nav>
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