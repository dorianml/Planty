<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
        <header id="header" role="banner">
            <div id="branding">
                <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                    <?php
                        echo '<a href="' . esc_url(home_url('/')) . '">
                        <img id="logo" src=" ' . get_template_directory_uri() . "-child" . '/images/logo.png">
                        </a>';
                    ?>
                </div>
                <div id="site-description" <?php if (!is_single()) {
                                                echo ' itemprop="description"' . ' "DESCRIPTION ';
                                            } ?>><?php bloginfo('description'); ?></div>
            </div>
            <nav id="menu" class="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                <?php wp_nav_menu(array(['theme_location' => 'menuHeader',
                                         'container' => false,
                                          'link_before' => '<span itemprop="name">',
                                           'link_after' => '</span>',
                                           'menu_class' => 'navBar-header'
                                           ])); ?>
            </nav>
        </header>
        <div id="container">
            <main id="content" role="main">