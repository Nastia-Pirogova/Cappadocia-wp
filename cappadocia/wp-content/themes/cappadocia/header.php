<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cappadocia
 */

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); echo "|"; bloginfo('description')?></title>
</head>

<body>

<header class="header">
    <div class="container">
        <div class="header__top">
            <nav class="menu">
                <ul class="menu__list">
                    <li class="menu__list-item">
                        <a class="menu__list-link" href="<?php echo is_front_page()? '' : esc_url(home_url('/')); ?>#our-trip">Маршрут</a>
                    </li>
                    <li class="menu__list-item">
                        <a class="menu__list-link" href="<?php echo is_front_page()? '' : esc_url(home_url('/')); ?>#hotel">Отель</a>
                    </li>
                    <li class="menu__list-item">
                        <a class="menu__list-link" href="<?php echo is_front_page()? '' : esc_url(home_url('/')); ?>#price">Стоимость</a>
                    </li>
                </ul>
            </nav>
            <a class="header__phone" href="tel:<?php the_field("phone_number_back_end", 2); ?>"><?php the_field("phone_number"); ?></a>
        </div>
        <h1 class="header__title"><?php bloginfo('name')?> <span><?php bloginfo('description')?></span>
        </h1>
    </div>
</header>