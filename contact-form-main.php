<?php 
/* Template Name: Contact form page */

/*
CONTACT PAGE template

- Includes contact form HTML part
- Includes basic PHP email send function
- JS/CSS is loaded separately to this page
*/


$subjectPreText = __('New message: ', 'digitalrobke');
$mainHeader = __('Message from digitalrobke!', 'digitalrobke');
$bodyFrom = __('From', 'digitalrobke');
$bodyEmail = __('Email', 'digitalrobke');
$bodyTextMain = __('Message text', 'digitalrobke');

$headers = 'Content-type: text/html';
$name = '';
$to = 'robertas.duncia@gmail.com';
$message = '';
$message_sent = false;
if(!empty($_POST['webwizcontactformhoneypot'])) die();

if(isset($_POST['send'])){
    //Sanitize the data
    $name = isset($_POST['main-contact-form__name']) ? sanitize_text_field($_POST['main-contact-form__name']) : '';
    $email = isset($_POST['main-contact-form__email']) ? sanitize_text_field($_POST['main-contact-form__email']) : '';
    $messageText = isset($_POST['main-contact-form__message']) ? sanitize_textarea_field($_POST['main-contact-form__message']) : '';
    $message = '<div style="text-align: center; background-color: #481a72; color: #fff; padding: 50px 20px; box-sizing: boder-box;"><p style="font-size: 20px; text-transform: uppercase; font-weight: 600; padding-bottom: 20px;">'. $mainHeader.'</p><div style="background-color: #fff; padding: 20px; color: #000; max-width: 500px; margin: auto; text-align: left;">';
    $message .= '<p style="font-size: 18px;">'.$bodyFrom.': ' . $name . '</p>';
    $message .= '<p style="font-size: 18px;">'.$bodyEmail.': ' . $email . '</p>';
    $message .= '<p>'.$bodyTextMain.': ' . $messageText . '</p></div><p><a style="color: #fff !important;">https://digitalrobke.eu/</a></p></div>';

    $message_sent = true;
}
$subject = $subjectPreText . $name;
wp_mail($to, $subject, $message, $headers);

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
    <div class="contact-form">
        <div class="contact-form__text">
            <?php if($message_sent): ?>
                <h2 class="heading heading--2 clr-white pt-md pb-md txt-center"><?php the_field('success_message'); ?></h2>
                <h2 class="heading heading--2 clr-white pb-md txt-center"><?php the_field('thank_you'); ?></h2>
            <?php else: ?>
                <form method="post" action="" class="main-contact-form" id="main-contact-form" novalidate>
                <div class="pb-sm">
                    <label for="main-contact-form__name" id="label-name"><?php the_field('name'); ?></label>
                    <label for="main-contact-form__name" id="error-name" class="error-name display-none"><?php the_field('please_enter_name'); ?></label>
                    <input type="text" id="main-contact-form__name" name="main-contact-form__name">
                </div>
                <div class="pb-sm">
                    <label for="main-contact-form__email" id="label-email"><?php the_field('your-email'); ?></label>
                    <label for="main-contact-form__name" id="error-email" class="error-name display-none"><?php the_field('please_enter_valid_email'); ?></label>
                    <input type="email" id="main-contact-form__email" name="main-contact-form__email">
                </div>
                <div class="pb-sm">
                    <label for="main-contact-form__message" id="label-message"><?php the_field('your_message'); ?></label>
                    <label for="main-contact-form__name" id="error-message" class="error-name display-none"><?php the_field('please_write_your_message'); ?></label>
                    <textarea rows="4" id="main-contact-form__message" name="main-contact-form__message"></textarea>
                </div>
                <input type="text" id="webwizcontactformhoneypot" name="webwizcontactformhoneypot"/>
                <div class="pb-sm txt-center">
                    <button class="btn btn--white" id="main-contact-form__submit" type="submit" name="send"><?php the_field('send'); ?></button>
                </div>
            </form>
            <?php endif; ?>  
        </div>
        <figure class="contact-form__img">
            <img src="<?php echo get_template_directory_uri() . '/images/new-email.svg'; ?>" alt="Edit content"/>
        </figure>
    </div>
    </section>
</main>

<?php get_footer(); ?>