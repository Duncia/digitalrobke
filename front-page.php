<?php 
/* Template Name: Home page */

/*
HOME PAGE template
- Static page with Advanced Custom Fields
- Posibility to select as template in Gutenberg page builder
- Layout contains 2 parts and 3 parts of content
- First containers revealed on load with @keyframes, rest container reveal with JavaScript intersection observer API
- Images URL hardcoded and not allowed to change in the admin panel
 */
?>

<?php get_header(); ?>

<section class="container container--home hero">
    <div class="container__inner d-flex-2 pt-lr pb-lr">
        <div class="hero__content flex-2-child-50">
            <h1 class="heading heading--1 clr-white"><?php the_field('hero_title'); ?></h1>
            <div class="hero__content--paragraph">
                <?php the_field('hero_subtitle'); ?>
            </div>
        </div>
        <figure class="flex-2-child-50">
            <img srcset="<?php echo get_template_directory_uri() . '/images/home-top-img-mobile.webp'; ?> 365w, <?php echo get_template_directory_uri() . '/images/home-top-img.svg'; ?> 600w" alt="Home page map"/>
        </figure>
    </div>
</section>

<section class="container container--home intro container--scroll-reveal">
    <div class="container__inner txt-center pt-lr pb-lr">
        <h2 class="heading heading--2 pb-md"><?php the_field('intro_title'); ?></h2>
        <p class="paragraph content-mx-60  home-page-el home-page-el--reveal"><?php the_field('intro_subtitle'); ?></p>
    </div>
    <div class="container--bg-grey pt-md pb-md">
        <div class="container__inner d-flex-2 txt-center ">
            <div class="flex-2-child-50">
                <figure class="image-bckgrd home-page-el home-page-el--reveal">
                    <img src="<?php echo get_template_directory_uri() . '/images/cms-edit-content.svg'; ?>" alt="Edit content"/>
                </figure>
            </div>
            <div class="flex-2-child-50 home-page-el home-page-el--reveal">
                <h3 class="heading heading--3 pt-sm pb-sm"><?php the_field('title_cms'); ?></h3>
                <p class="paragraph"><?php the_field('content_cms'); ?></p>
            </div>
        </div>
    </div>
    <div class="container__inner d-flex-2 txt-center pt-md pb-md">
        <div class="flex-2-child-50 home-page-el home-page-el--reveal">
            <h3 class="heading heading--3 pt-sm pb-sm"><?php the_field('title_functions'); ?></h3>
            <p class="paragraph"><?php the_field('content_functions'); ?></p>
        </div>
        <div class="flex-2-child-50 d-flex-2--rev">
            <figure class="image-bckgrd home-page-el home-page-el--reveal">
                    <img  
                        class="lazy"
                        srcset="<?php echo get_template_directory_uri() . '/images/lazy-load.png'; ?>"
                        data-srcset="<?php echo get_template_directory_uri() . '/images/city-london-mobile.webp'; ?> 470w, <?php echo get_template_directory_uri() . '/images/city-london.svg';?> 600w" alt="Edit content"
                        alt=""
                    />
                <noscript>
                    <img srcset="<?php echo get_template_directory_uri() . '/images/city-london-mobile.webp'; ?> 470w, <?php echo get_template_directory_uri() . '/images/city-london.svg'; ?> 600w" alt="Edit content"/>
                </noscript>
            </figure>
        </div>
    </div>
    <div class="container__inner txt-center pb-lr home-page-el home-page-el--reveal">
        <a class="btn btn--purple" href="<?php the_field('url_check_examples'); ?>"><?php the_field('btn_check_examples'); ?></a>
    </div>
</section>

<section class="container container--home about container--scroll-reveal">
    <div class="container__inner txt-center pt-lr pb-lr">
        <h2 class="heading heading--2 pb-md"><?php the_field('about_title'); ?></h2>
        <p class="paragraph content-mx-60"><?php the_field('about_content'); ?></p>
    </div>
</section>

<section class="container container--home container--scroll-reveal pt-md">
    <div class="container__inner boxes pt-lr pb-lr">
        <div class="box">
            <figure class="box__image">
                <img src="<?php echo get_template_directory_uri() . '/images/desktop.svg'; ?>" alt="Website creation"/>
            </figure>
            <div class="box__content home-page-el home-page-el--reveal">
                <h4><?php the_field('home_box_1_title'); ?></h4>
                <p><?php the_field('home_box_1_content'); ?></p>
            </div>
        </div>
        <div class="box">
            <figure class="box__image">
                <img src="<?php echo get_template_directory_uri() . '/images/monitor.svg'; ?>" alt="Website updates"/>
            </figure>
            <div class="box__content home-page-el home-page-el--reveal">
                <h4><?php the_field('home_box_2_title'); ?></h4>
                <p><?php the_field('home_box_2_content'); ?></p>
            </div>
        </div>
        <div class="box">
            <figure class="box__image">
                <img src="<?php echo get_template_directory_uri() . '/images/office-worker.svg'; ?>" alt="Full-time work"/>
            </figure>
            <div class="box__content home-page-el home-page-el--reveal">
                <h4><?php the_field('home_box_3_title'); ?></h4>
                <p><?php the_field('home_box_3_content'); ?></p>
            </div>
        </div>
    </div>
</section>
<section class="container container--home container--scroll-reveal">
    <div class="container__inner pb-lr d-grid-auto">
        <h3 class="heading heading--3 clr-purple"><a href="<?php the_field('link_examples_url'); ?>"><?php the_field('link_examples_text'); ?></a></h3>
        <h3 class="heading heading--3 clr-purple"><a href="<?php the_field('link_faq_url'); ?>"><?php the_field('link_faq_text'); ?></a></h3>
        <h3 class="heading heading--3 clr-purple"><a href="<?php the_field('link_tech_details_url'); ?>"><?php the_field('link_tech_details_text'); ?></a></h3>
    </div>
</section>

<?php 
/*
Passing CSS class name as argument to template part and footer to apply reveal on scroll effect.
NOTE: The last style rule hides lazy loaded img in case JavaScript is turned off.
*/
$args = array('class' => 'container--home');
get_template_part('template-parts/call-to-contact', '', $args); 
?>
<?php get_footer(null, $args); ?>

<noscript>
  <style>.lazy { display: none; }</style>
</noscript>