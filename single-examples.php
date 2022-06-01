<?php
/*
EXAMPLES CUSTOM POST TYPE SINGLE PAGE template.

- Used when Examples custom post is created
- Includes top banner with title, excerpt and thumbnal from the Example post
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : 
    while (have_posts()) : the_post();?>

<section class="container single-example__banner">
    <div class="container__inner d-flex-2 pt-md pb-md">
        <div class="flex-2-child-50">
            <h1 class="heading heading--3 clr-white pb-sm"><?php the_title(); ?></h1>
            <p class="paragraph clr-white pb-sm"><?php echo get_the_excerpt(); ?></p>
        </div>
        <figure class="flex-2-child-50 txt-center">
            <?php if ( has_post_thumbnail() ) {the_post_thumbnail();}?>
        </figure>
    </div>
</section>
<main class="container--page pt-md pb-md">   
    <section class="container__inner">
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