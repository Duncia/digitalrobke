<?php
/*
Simple button to contacts page template part.
NOTE: Arguments passed when called from HOME PAGE to add class for reveal on scroll effect.
*/
?>
<section class="container <?php if(isset($args['class'])) { echo ($args['class']);};?> call-to-contact container--scroll-reveal">
    <div class="container__inner pt-md pb-md">
        <h2 class="heading heading--2 clr-white pb-sm"><?php _e('Interested in cooperation?', 'websitewizards'); ?></h2>
        <p class="paragraph clr-white pb-sm"><?php _e('Maybe have some questions? Please drop me a message!', 'websitewizards'); ?></p>
        <a class="btn btn--white" href="<?php _e('Some link', 'websitewizards'); ?>"><?php _e('Contact me', 'websitewizards'); ?></a>
    </div>
</section>