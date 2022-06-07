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
    <section class="container__inner single_sidebar">
        <article class="content-mx-60">
            <?php the_content(); ?>
        </article>
        <aside>
            <h4 class="txt-center"><?php  _e('Other examples', 'digitalrobke'); ?></h4>
            <div class="sidebar__items">
                <?php //WP_Query for other examples
                $args = array(
                    'post_type' => 'examples',
                    'post_status' => 'publish',
                    'posts_per_page' => '3',
                    'orderby' => 'date',
                    'post__not_in' => [$post->ID]
                );
                $exampleLoop = new WP_Query($args);
                if($exampleLoop->have_posts()){
                    while($exampleLoop->have_posts()) {
                        $exampleLoop->the_post(); ?>
                            <div class="txt-center pb-lr">
                                <a href="<?php the_permalink(); ?>">
                                    <p><?php the_title(); ?></p>
                                    <?php if ( has_post_thumbnail() ) {the_post_thumbnail('medium');}?>
                                </a>
                            </div>
                        <?php
                    }
                } else {
                    _e('No examples yet.', 'digitalrobke');
                };
                wp_reset_postdata();
                ?>
            </div>
        </aside>
        <?php endwhile;
        else :
            echo 'Nothing to show.';
        endif;
        ?>

    </section>
</main>

<?php get_template_part('template-parts/call-to-contact'); ?>

<?php get_footer(); ?>