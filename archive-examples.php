<?php get_header(); ?>

<main class="container--page">   
        <?php if (have_posts()) :
            while (have_posts()) : the_post();?>

<a href="<?php the_permalink(); ?>"><h1 class="heading heading--1"><?php the_title(); ?></h1></a>
        <?php endwhile;
        else :
            echo 'Nothing to show.';
        endif;
        ?>
</main>

<?php get_template_part('template-parts/call-to-contact'); ?>

<?php get_footer(); ?>