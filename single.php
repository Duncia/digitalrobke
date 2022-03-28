<?php get_header(); ?>
<div class="single-test"><?php _e('This is single post test.', 'websitewizards'); ?></div>
<?php if (have_posts()) :
    while (have_posts()) : the_post();?>

    <?php the_content(); ?>
<?php endwhile;
else :
    echo 'Nothing found.';
endif;
?>
<?php get_footer(); ?>