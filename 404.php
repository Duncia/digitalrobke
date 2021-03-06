<?php
/*
Basic 404 page template

- Few strings ready for translations
*/
?>

<?php get_header(); ?>
    <section class="container">
        <div class="container__inner txt-center pt-md pb-md">
            <h1 class="heading heading--1"><?php _e('Ooops error occured...', 'digitalrobke'); ?></h1>
        </div>
        <div class="container__inner txt-center pt-md pb-md">
            <h1 class="heading heading--1"><?php _e('Go back to home page...', 'digitalrobke'); ?></h1>
        </div>
        <div class="container__inner txt-center pt-md pb-md">
            <h1 class="heading heading--1"><?php _e('If it repeats - let me know!', 'digitalrobke'); ?></h1>
        </div>
    </section>

<?php get_template_part('template-parts/call-to-contact'); ?>

<?php get_footer(); ?>