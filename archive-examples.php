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
            <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"><g id="magic-pot"><circle cx="31.5" cy="32.5" r="21.5" style="fill:#e5efef"/><circle cx="25" cy="18" r="1" style="fill:#4c241d"/><circle cx="33" cy="9" r="1" style="fill:#4c241d"/><line x1="12" y1="6.463" x2="12" y2="7.878" style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/><line x1="12" y1="12.122" x2="12" y2="13.537" style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/><line x1="8.463" y1="10" x2="9.878" y2="10" style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/><line x1="14.122" y1="10" x2="15.537" y2="10" style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/><circle cx="45.5" cy="8.5" r="2.5" style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/><line x1="53.837" y1="20.663" x2="50.163" y2="24.337" style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/><line x1="50.163" y1="20.663" x2="53.837" y2="24.337" style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/><path d="M35.711,50H21.829a5.63,5.63,0,0,1-3.308-1.075L1,34H49L40.612,47.134A5.624,5.624,0,0,1,35.711,50Z" style="fill:#ffce56;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/><path d="M24.3,30h8.4A3.3,3.3,0,0,1,36,33.3V34a0,0,0,0,1,0,0H21a0,0,0,0,1,0,0v-.7A3.3,3.3,0,0,1,24.3,30Z" style="fill:#fc8c29;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/><path d="M28.5,21h0A2.5,2.5,0,0,1,31,23.5V30a0,0,0,0,1,0,0H26a0,0,0,0,1,0,0V23.5A2.5,2.5,0,0,1,28.5,21Z" style="fill:#ffce56;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/><path d="M25,26H18.773A5.772,5.772,0,0,0,13,31.773v1.786" style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/><path d="M31,26h6.227A5.772,5.772,0,0,1,43,31.773v1.786" style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/><line x1="7" y1="39" x2="22" y2="39" style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/><line x1="25" y1="39" x2="31" y2="39" style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/><path d="M33,54h0a2,2,0,0,1-2-2V50H26v2a2,2,0,0,1-2,2h0a3,3,0,0,0-3,3H36A3,3,0,0,0,33,54Z" style="fill:#fc8c29;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/><path d="M48,34H60a3,3,0,0,1,3,3v3a3,3,0,0,1-3,3H59a3,3,0,0,1-3-3h0" style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/><line x1="10" y1="57" x2="49" y2="57" style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/></g></svg>
        </figure>
        <div class="examples-category-banner__text">
            <h2 class="heading heading--2 pb-md"><?php _e('Examples what can be developed', 'websitewizards'); ?></h2>
            <p class="paragraph content-mx-60"><?php _e('Please check the functionalities and elements - all these and much more can be implemented in the website.', 'websitewizards'); ?></p>
        </div>
        <figure class="examples-category-banner__icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.001 512.001" xmlns:v="https://vecta.io/nano"><path d="M336.76 327.082l-8.182-47.699 59.308-57.809a9.23 9.23 0 0 0 2.336-9.464c-1.086-3.341-3.975-5.777-7.45-6.282L300.81 193.92l-36.654-74.269a9.23 9.23 0 0 0-16.553 0l-36.654 74.269-81.958 11.908c-3.476.506-6.366 2.941-7.451 6.282s-.18 7.011 2.336 9.464l59.308 57.809-14.002 81.627a9.23 9.23 0 0 0 13.395 9.731l73.306-38.538 73.306 38.538c1.35.711 2.825 1.06 4.296 1.06 1.912 0 3.817-.595 5.426-1.763 2.845-2.065 4.267-5.567 3.675-9.028l-5.826-33.928M180.09 43.24c-.481-1.481-1.762-2.561-3.301-2.783L140.48 35.18l-16.239-32.9C123.552.883 122.131 0 120.574 0s-2.978.883-3.667 2.28l-16.239 32.9-36.31 5.277a4.09 4.09 0 0 0-2.266 6.974l26.274 25.61-6.203 36.164a4.09 4.09 0 0 0 5.934 4.31l32.476-17.073 32.475 17.073c.598.314 1.253.47 1.904.47.847 0 1.691-.264 2.404-.781 1.258-.915 1.889-2.466 1.628-3.999L152.78 73.04l26.274-25.609a4.09 4.09 0 0 0 1.036-4.191zM300.467 459c-.36-1.109-1.32-1.917-2.473-2.085l-27.202-3.952-12.166-24.648a3.06 3.06 0 0 0-5.492 0l-12.164 24.648-27.202 3.952a3.07 3.07 0 0 0-2.475 2.085c-.36 1.109-.059 2.327.776 3.141l19.684 19.186-4.648 27.09a3.07 3.07 0 0 0 1.218 2.997c.944.686 2.195.775 3.227.233l24.328-12.792 24.331 12.792a3.06 3.06 0 0 0 1.424.35c.633 0 1.27-.196 1.8-.584.944-.686 1.416-1.848 1.222-2.997l-4.649-27.09 19.684-19.186a3.06 3.06 0 0 0 .777-3.14z" fill="#ffd960"/><g opacity=".1"><path d="M199.294 352.062l14.002-81.627-59.308-57.809c-2.516-2.453-3.421-6.123-2.336-9.464.075-.23.178-.444.27-.666l-22.933 3.333c-3.476.506-6.366 2.941-7.451 6.282s-.18 7.011 2.336 9.464l59.308 57.809-14.002 81.627a9.23 9.23 0 0 0 13.395 9.731l19.61-10.31c-2.308-2.104-3.426-5.248-2.891-8.37z" fill="#231f20"/></g><g opacity=".1"><path d="M112.279 100.257l6.203-36.164-26.274-25.61a4.08 4.08 0 0 1-1.104-1.912l-26.745 3.886a4.09 4.09 0 0 0-2.266 6.974l26.274 25.61-6.203 36.164a4.09 4.09 0 0 0 5.934 4.31l24.124-12.682c.005-.192.024-.384.057-.576z" fill="#231f20"/></g><g opacity=".1"><path d="M257.22 499.469l4.648-27.09-19.684-19.186c-.349-.34-.582-.76-.734-1.204l-.481.975-27.202 3.952a3.07 3.07 0 0 0-2.475 2.085c-.36 1.109-.059 2.327.776 3.141l19.684 19.186-4.648 27.09a3.07 3.07 0 0 0 1.218 2.997c.944.686 2.195.775 3.227.233l24.328-12.792 1.338.704c.007-.031 0-.061.005-.091z" fill="#231f20"/></g><g fill="#ffd960"><circle cx="450.892" cy="301.617" r="26.77"/><circle cx="61.109" cy="344.999" r="26.77"/></g><path d="M442.02 301.621c0-11.647 7.437-21.549 17.82-25.232a26.73 26.73 0 0 0-8.949-1.537c-14.786 0-26.77 11.984-26.77 26.77s11.984 26.77 26.77 26.77c3.14 0 6.15-.545 8.949-1.538-10.382-3.684-17.82-13.587-17.82-25.233zM52.237 344.994c0-11.645 7.437-21.549 17.82-25.232a26.71 26.71 0 0 0-8.949-1.538c-14.786 0-26.77 11.984-26.77 26.77s11.984 26.77 26.77 26.77a26.71 26.71 0 0 0 8.949-1.538c-10.381-3.683-17.82-13.586-17.82-25.232z" opacity=".1" fill="#231f20"/><g fill="#ffd960"><circle cx="382.396" cy="95.3" r="18.694"/><circle cx="424.123" cy="435.063" r="18.695"/></g></svg>
        </figure>
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
                            <p class="example-box__paragraph pb-sm"><?php _e('Case', 'websitewizards'); ?>: <?php the_title(); ?></p>
                        </div>
                        <?php if ( has_post_thumbnail() ) {the_post_thumbnail();}?>
                    </a>
                </div>
                <div class="example-box__text pt-sm pb-sm">
                    
                    <p class="example-box__paragraph"><?php _e('Description', 'websitewizards'); ?>: <?php echo get_the_excerpt(); ?></p>
                </div>
                <button class="btn btn--purple"><a href="<?php the_permalink(); ?>"><?php _e('More details', 'websitewizards'); ?></a></button>
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