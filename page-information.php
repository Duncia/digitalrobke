<?php 
/* Template Name: Info / inner */

/*
INFORMATION OR INNER PAGE template.

- Used as page template for information about dev stack, FAQ etc.
- Contains header, CTA to contacts section and footer
- Top section needs content and image - Advanced Custom Fields used
*/
?>

<?php get_header(); ?>
<section class="container container--clr pt-md pb-md">
    <div class="container__inner d-flex-2 txt-center">
        <div class="flex-2-child-50">
            <h2 class="heading heading--2 clr-white pb-md"><?php the_field('page_info_title'); ?></h2>
            <p class="paragraph clr-white pb-sm"><?php the_field('page_info_subtitle'); ?></p>
        </div>
        <figure class="flex-2-child-50">
            <img src="<?php the_field('page_info_image'); ?>" alt="Page top image"/>
        </figure>
    </div>
</section>
<main class="container container--page">
    <section class="container__inner">
        
        <?php if (have_posts()) :
            while (have_posts()) : the_post();?>

            <?php the_content(); ?>
        <?php endwhile;
        else :
            echo 'Nothing to show.';
        endif;
        ?>
    </section>
</main>

<?php get_template_part('template-parts/call-to-contact'); ?>

<?php get_footer(); ?>