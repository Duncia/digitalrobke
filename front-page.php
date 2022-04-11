<?php 
/* Template Name: Home page */

$homeTop = get_post_custom_values($key = 'home-top');

?>

<?php get_header(); ?>

<section class="container hero">
    <div class="container__inner d-flex-2 pt-md pb-md">
        <div class="hero__content flex-2-child-50">
            <h1 class="heading heading--1"><?php if(isset($homeTop)) {echo $homeTop[0];}; ?></h1>
            <div class="hero__content--paragraph">
                <p><?php if(isset($homeTop)) {echo $homeTop[1];}; ?></p>
                <p><?php if(isset($homeTop)) {echo $homeTop[2];}; ?></p>
            </div>
        </div>
        <figure class="flex-2-child-50">
            <img src="<?php echo get_template_directory_uri() . '/images/home-top-img.svg'; ?>" alt="Home page map">
        </figure>
    </div>
</section>

<section class="container intro">
    <div class="container__inner txt-center pt-md pb-md">
        <h2 class="heading heading--2 clr-white pb-md">Custom solutions</h2>
        <p class="paragraph content-mx-60  clr-white">Let me know your vision about the perfect website and let’s see what can be created. Endless possibilities for layouts, content boxes and user journeys.</p>
    </div>
    <div class="container_inner d-flex-2 txt-center pb-md">
        <figure class="flex-2-child-50">
            <img src="<?php echo get_template_directory_uri() . '/images/cms-edit-content.svg'; ?>" alt="Edit content">
        </figure>
        <div class="flex-2-child-50">
            <h3 class="heading heading--3 clr-white pb-sm">Power of CMS</h3>
            <p class="paragraph clr-white content-mx-35">Create, edit, update content and upload images. Control the content, pages and menus in your website.</p>
        </div>
    </div>
    <div class="container_inner d-flex-2 txt-center pb-md">
        <div class="flex-2-child-50">
            <h3 class="heading heading--3 clr-white pb-sm">All vital functions</h3>
            <p class="paragraph clr-white pb-sm content-mx-35">Post news, introduce your services or products, get questions from customers and start building your network.</p>
        </div>
        <figure class="flex-2-child-50">
            <img src="<?php echo get_template_directory_uri() . '/images/city-london.svg'; ?>" alt="Edit content">
        </figure>
    </div>
    <div class="container_inner txt-center pb-md">
        <a class="btn btn--white" href="">Check examples</a>
    </div>
</section>

<section class="container about">
    <div class="container__inner txt-center pt-md pb-md">
        <h2 class="heading heading--2 pb-md">About me</h2>
        <p class="paragraph content-mx-60 pb-sm">I am web/WordPress developer with a focus to front-end part and content. Let's cooperate in your next project!</p>
    </div>
</section>

<?php get_template_part('template-parts/call-to-contact'); ?>

<?php get_footer(); ?>