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
        <div class="accordion-item">
            <h3 class="accordion-item__title">When my website will be live?</h3>
            <svg class="accordion-item__icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="m19 9-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
            </svg>
            <div class="accordion-item__hidden-box accordion-hide-content">
                <p>It depends on the scope of works and cane be anything from 2-3 days for a simple one pager to few months for a more complex project.</p>
            </div>
        </div>
        <div class="accordion-item">
            <h3 class="accordion-item__title">Can I edit all content?</h3>
            <svg class="accordion-item__icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="m19 9-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
            </svg>
            <div class="accordion-item__hidden-box accordion-hide-content">
                <p>You can edit all content and images. Also there is possibility to add languages, create new pages or news and updated according to needs.</p>
            </div>
        </div>

    </section>
</main>

<?php get_template_part('template-parts/call-to-contact'); ?>

<?php get_footer(); ?>