<?php get_header(); ?>
<div class="page-content">
<?php

get_template_part('template-parts/content');
$blurb = get_theme_mod('surfbreak_contact_blurb');
if($blurb || is_customize_preview()) :
    // If you want to retain paragraphing
    // echo wpautop($blurb);
    echo $blurb;
endif;
?>
</div>
<?php
get_footer(); 
?>
