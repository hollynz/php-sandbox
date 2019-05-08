<?php get_header(); ?>
<div class="columns blog-content">
    <div class="column">
        <?php
        get_template_part('template-parts/content-single');
        ?>
    </div>
    <div class="column is-one-third">
        <?php
        get_sidebar();
        ?>
    </div>
</div>
<?php
get_footer();
?>
