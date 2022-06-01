<?php
/*
EXAMPLES CUSTOM POST TYPE archive page

- Includes wp_footer() function
- Footer menu and some basic static content
*/
?>

<?php get_header(); ?>

<section class="container examples-category-banner pb-lr pt-lr">
    <div class="container__inner examples-category-banner__inner txt-center">
        <figure class="examples-category-banner__icon">
            <img src="<?php echo get_template_directory_uri() . '/images/online-campaign.svg'; ?>" alt="Online campaign image"/>
        </figure>
        <div class="examples-category-banner__text">
            <h1 class="heading heading--2 pb-md"><?php _e('Examples', 'digitalrobke'); ?></h1>
            <p class="paragraph content-mx-60"><?php _e('Please check the functionalities and elements - all these and much more can be implemented in the website.', 'digitalrobke'); ?></p>
        </div>
        <figure class="examples-category-banner__icon">
            <img src="<?php echo get_template_directory_uri() . '/images/search-examples.svg'; ?>" alt="Search examples image"/>
        </figure>
    </div>
</section>
<section class="container txt-center pt-md">
    <div class="container__inner">
        <p class="paragraph content-mx-60"><?php _e('In this page I will try to show you various website parts like forms, admin environment elements and samples of code/functions.', 'digitalrobke'); ?></p>
    </div>
</section>

<main class="container--page pb-md pt-md">   
    <section class="container__inner d-grid-2">
        <?php if (have_posts()) :
            while (have_posts()) : the_post();?>
            <div class="example-box">
                <div class="example-box__img">
                    <a href="<?php the_permalink(); ?>">
                        <div class="example-box__overlay">
                            <p class="example-box__paragraph pb-sm"><?php _e('Case', 'digitalrobke'); ?>: <?php the_title(); ?></p>
                        </div>
                        <?php if ( has_post_thumbnail() ) {the_post_thumbnail();}?>
                    </a>
                </div>
                <div class="example-box__text pt-sm pb-sm">
                    
                    <p class="example-box__paragraph"><?php _e('Description', 'digitalrobke'); ?>: <?php echo get_the_excerpt(); ?></p>
                </div>
                <button class="btn btn--purple"><a href="<?php the_permalink(); ?>"><?php _e('More details', 'digitalrobke'); ?></a></button>
            </div>
        <?php endwhile;
        else :
            echo 'Nothing to show.';
        endif;
        ?>
    </section>     
</main>

<?php get_template_part('template-parts/call-to-contact'); ?>

<?php get_footer(); ?>