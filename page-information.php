<?php 
/* Template Name: Info / inner */

get_header(); ?>
<section class="container container--clr pt-md pb-md">
    <div class="container__inner d-flex-2 txt-center">
        <div class="flex-2-child-50">
            <h2 class="heading heading--2 clr-white pb-md">Pavadinimas</h2>
            <p class="paragraph clr-white pb-sm">I am web/WordPress developer with a focus to HTML, CSS, JavaScript and functionality (WordPress CMS). I can create or update your website.</p>
        </div>
        <figure class="flex-2-child-50">
            <img src="<?php echo get_template_directory_uri() . '/images/cms-edit-content.svg'; ?>" alt="Edit content"/>
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