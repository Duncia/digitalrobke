<?php 
/* Template Name: Contact form page */

?>

<?php get_header(); ?>

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
    <section>
        <form action="">
            Cia bus forma
            <input type="text">
            <button type="submit">Pateikti</button>
        </form>
    </section>
</main>

<?php get_footer(); ?>