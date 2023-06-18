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
<!--    <link rel="stylesheet" href="css/style.css">-->
<!--    <link rel="stylesheet" href="css/reset.css">-->
<!--    <link rel="stylesheet" href="css/slick.css">-->
<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />-->
    <title>My Title</title>
</head>

<body>

<header class="header">
    <div class="container">
        <div class="header__top">
            <nav class="menu">
                <ul class="menu__list">
                    <li class="menu__list-item">
                        <a class="menu__list-link" href="#our-trip">Маршрут</a>
                    </li>
                    <li class="menu__list-item">
                        <a class="menu__list-link" href="#hotel">Отель</a>
                    </li>
                    <li class="menu__list-item">
                        <a class="menu__list-link" href="#price">Стоимость</a>
                    </li>
                </ul>
            </nav>
            <a class="header__phone" href="tel:+38066555776">+38(066)555-777-6</a>
        </div>
        <h1 class="header__title">
            Cappadocia
            <span>Эксклюзивный тур</span>
        </h1>
    </div>
</header>