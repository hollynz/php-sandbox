<?php get_header(); ?>
<?php
$blurb = get_theme_mod('surfbreak_contact_blurb');
if($blurb || is_customize_preview()) :
    // If you want to retain paragraphing
    // echo wpautop($blurb);
    echo $blurb;
endif;
get_template_part('template-parts/content');
get_footer(); 
?>
