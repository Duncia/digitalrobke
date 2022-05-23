<?php get_header(); ?>

<main class="container--page pt-md pb-md">   
    <section class="container__inner">
        <?php if (have_posts()) :
            while (have_posts()) : the_post();?>

            <?php the_content(); ?>
        <?php endwhile;
        else :
            echo 'Nothing found.';
        endif;
        ?>
    </section>
</main>

<?php get_template_part('template-parts/call-to-contact'); ?>

<?php get_footer(); ?>