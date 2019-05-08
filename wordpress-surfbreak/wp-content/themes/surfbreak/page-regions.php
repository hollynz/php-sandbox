<?php get_header(); ?>
<?php
get_template_part('template-parts/content');
?>
<p>Welcome to the contact page</p>
<?php
$args = array(
    'post_type' => 'surfbreak-region',
    'posts_per_page' => 5
);
$loop = new WP_Query($args);
if($loop->have_posts()) : $count = 0;
while($loop->have_posts()) : 
    $loop->the_post();
?>
<h2><a href="<?php echo site_url() ?>/surfbreak-regions/<?php echo $post->post_name?>"><?php echo the_title(); ?></a></h2>
<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo $post->post_name;?>" />
<?php
endwhile;
endif;
get_footer(); 
?>
