<?php
/*
Simple button to contacts page template part.
NOTE: Arguments passed when called from HOME PAGE to add class for reveal on scroll effect.
*/
?>
<section class="container <?php if(isset($args['class'])) { echo ($args['class']);};?> call-to-contact container--scroll-reveal">
    <div class="container__inner pt-lr pb-lr">
        <h2 class="heading heading--2 clr-white pb-sm"><?php _e('Interested in cooperation?', 'digitalrobke'); ?></h2>
        <p class="paragraph clr-white pb-sm"><?php _e('Maybe have some questions? Please drop me a message!', 'digitalrobke'); ?></p>
        <a class="btn btn--white" href="<?php _e('Some link', 'digitalrobke'); ?>"><?php _e('Contact me', 'digitalrobke'); ?></a>
    </div>
</section>