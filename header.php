<?php
/*
Website HEADER part.

- Includes <head> section
- Top header section with logo and menus
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body <?php body_class(); ?>>
    <header class="container header" id="header">
        <div class="container__inner d-flex-space-btwn">
            <div class="header__left">
                <div class="header__logo">
                    <a href="<?php echo get_home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri() . '/images/logo.svg'; ?>" alt="Website Wizards Logo">
                    </a>
                </div>
                <div class="header__language-switcher">
                    <?php $args_language_switcher_header = array(
                    'theme_location' => 'header-language-switcher');
                    wp_nav_menu($args_language_switcher_header); ?>
                </div>
            </div>
            <div class="header__burger" id="burger">
                    <div class="header__burger__middle" id="burger__middle"></div>
                </div>
            <div class="header__menu" id="header-menu">
                <nav class="navigation-top">
                    <?php $args = array(
                    'theme_location' => 'header-meniu');
                    wp_nav_menu($args); ?>
                </nav>
            </div>
        </div>
        <div class="mobile-menu mobile-menu--close" id="mobile-menu">
            <nav class="mobile-menu__nav">
                <?php wp_nav_menu($args); ?>
            </nav>
        </div>
        <div class="mobile-menu-open-logo mobile-menu-open-logo--hide" id="mobile-menu-open-logo">
            <img src="<?php echo get_template_directory_uri() . '/images/logo-mobile.svg'; ?>" alt="Website Wizards Logo">
        </div>

    </header>