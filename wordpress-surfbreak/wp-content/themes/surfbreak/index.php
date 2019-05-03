<?php get_header(); ?>

<?php
if(have_posts()):
while(have_posts()): the_post();
?>
<h2><?php the_title(); ?></h2>
<div class="entry-content">
    <?php the_content(); ?>
</div>

<?php
endwhile;
else: 
?>
    <p>Sorry, no posts!</p>
<?php
endif;
get_footer(); 
?>
