<?php get_header(); ?>

<?php get_template_part('template-parts/hero-text-image'); ?>

<h1><?php _e('Front page example V3', 'websitewizards'); ?></h1>
<p>
	<?php _e('Paragraph example V3', 'websitewizards'); ?>
</p>
<?php if (have_posts()) :
    while (have_posts()) : the_post();?>

    <?php the_content(); ?>
<?php endwhile;
else :
    echo 'Nothing found.';
endif;
?>

<?php get_template_part('template-parts/call-to-contact'); ?>

<?php get_footer(); ?>