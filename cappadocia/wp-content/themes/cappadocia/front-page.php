<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cappadocia
 */

get_header();
?>


    <section class="fairy-tail page-section">
        <div class="container">
            <h3 class="fairy-tail__title title">
                <?php the_field("fairy-tail_title"); ?>
                <span> <?php the_field("fairy-tail_title-descr"); ?></span>
            </h3>
        </div>
        <div class="fairy-tail__inner">
            <div class="fairy-tail__slider">
                <?php
                if (have_rows('fairy-tail_slider')):
                    while (have_rows('fairy-tail_slider')) : the_row(); ?>
                        <div class="fairy-tail__item">
                            <?php
                            $image = get_sub_field('fairy-tail_img');
                            if (!empty($image))
                                $image_id = $image['ID'];
                            $image_alt = $image['alt'];
                            $image_url = $image['url'];
                            ?>
                            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt ?>">
                        </div>
                    <?php endwhile; else : endif; ?>

            </div>

            <div class="fairy-tail__content">
                <div class="fairy-tail__container">
                    <div class="fairy-tail__body">
                        <p class="fairy-tail__text">
                            <?php the_field("text_field-1"); ?>
                        </p>
                        <div class="fairy-tail__body-title">
                            <?php the_field("fairy-tail_body-title"); ?>
                        </div>
                        <ul class="fairy-tail__list">
                            <?php
                            if (have_rows('fairy-tail_list')):
                                while (have_rows('fairy-tail_list')) : the_row();
                                    $sub_value = get_sub_field('fairy-tail_li');
                                    ?>
                                    <li><?php echo $sub_value; ?></li>
                                <?php endwhile; else : endif; ?>
                        </ul>
                        <p class="fairy-tail__text">
                            <?php the_field("fairy-tail_text-1"); ?>
                        </p>
                        <p class="fairy-tail__text">
                            <?php the_field("fairy-tail_text-2"); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="our-trip" class="our-trip page-section">
        <div class="our-trip__inner">
            <div class="our-trip__content">
                <div class="our-trip__container">
                    <div class="our-trip__body">
                        <h3 class="our-trip__title title">
                            <?php the_field("our-trip_title"); ?>
                            <span>  <?php the_field("our_trip_descr"); ?></span>
                        </h3>

                        <?php
                        if (have_rows('our-trip_list')):
                            while (have_rows('our-trip_list')) : the_row(); ?>
                                <ul class="our-trip__list">
                                    <?php
                                    if (have_rows('our-trip_li')):
                                        while (have_rows('our-trip_li')) : the_row(); ?>
                                            <li> <?php the_sub_field("our-trip_li-text"); ?></li>
                                        <?php endwhile; else  : endif; ?>
                                </ul>
                            <?php endwhile; else : endif; ?>

                        <a class="our-trip__btn" href="#contacts">ЗАБРОНИРОВАТЬ</a>
                    </div>
                </div>
            </div>
            <div class="our-trip__slider">
                <div class="our-trip__slider-item"><img
                            src="<?php echo bloginfo('template_url'); ?>/assets/images/our-trip-1.jpg" alt=""></div>
                <div class="our-trip__slider-item"><img
                            src="<?php echo bloginfo('template_url'); ?>/assets/images/our-trip-2.jpg" alt=""></div>
                <div class="our-trip__slider-item"><img
                            src="<?php echo bloginfo('template_url'); ?>/assets/images/our-trip-3.jpg" alt=""></div>
            </div>
        </div>
    </section>

    <section id="hotel" class="hotel page-section">
        <div class="container">
            <h3 class="hotel__title title">
                <?php the_field("hotel_title"); ?>
                <span>  <?php the_field("hotel_descr"); ?></span>
            </h3>
            <div class="hotel__inner">
                <img class="hotel__<?php echo bloginfo('template_url'); ?>/assets/images"
                     src="<?php echo bloginfo('template_url'); ?>/assets/images/hotel.jpg" alt="">
                <div class="hotel__content">
                    <p class="hotel__text">
                        <?php the_field("hotel_text"); ?>
                    </p>
                    <div class="hotel__gallery">
                        <a data-fancybox="<?php echo bloginfo('template_url'); ?>/assets/images"
                           href="<?php echo bloginfo('template_url'); ?>/assets/images/hotel_1.jpg"
                           data-caption="Hotel">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/images/hotel_1.jpg" alt="">
                        </a>
                        <a data-fancybox="<?php echo bloginfo('template_url'); ?>/assets/images"
                           href="<?php echo bloginfo('template_url'); ?>/assets/images/hotel_2.jpg"
                           data-caption="Hotel">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/images/hotel_2.jpg" alt="">
                        </a>
                        <a data-fancybox="<?php echo bloginfo('template_url'); ?>/assets/images"
                           href="<?php echo bloginfo('template_url'); ?>/assets/images/hotel_3.jpg"
                           data-caption="Hotel">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/images/hotel_3.jpg" alt="">
                        </a>
                        <a data-fancybox="<?php echo bloginfo('template_url'); ?>/assets/images"
                           href="<?php echo bloginfo('template_url'); ?>/assets/images/hotel_4.jpg"
                           data-caption="Hotel">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/images/hotel_4.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="price page-section"
             style=" background-image:  url(<?php the_field("balloon-img"); ?>  )">
        <div class="container">
            <h3 class="price__title title">
                <?php the_field("price_title"); ?>
                <span>  <?php the_field("price_descr"); ?></span>
            </h3>
            <div class="price__inner">
                <ul class="price__on">
                    <div class="price__on-title">
                        <?php
                        if (have_rows('price_list')):
                            while (have_rows('price_list')) : the_row();
                                $sub_value = get_sub_field('price_on-title');
                                ?>
                                <li><?php echo $sub_value; ?></li>
                            <?php endwhile; else : endif; ?>
                    </div>
                    <?php
                    if (have_rows('price_list')):
                        while (have_rows('price_list')) : the_row();
                            $sub_value = get_sub_field('price_li');
                            ?>
                            <li class="price__list-item"> <?php echo $sub_value; ?></li>
                        <?php endwhile; else : endif; ?>
                </ul>

                <ul class="price__off">
                    <div class="price__on-title">
                        <?php
                        if (have_rows('price_list_2')):
                            while (have_rows('price_list_2')) : the_row();
                                $sub_value = get_sub_field('price_off-title');
                                ?>
                                <li><?php echo $sub_value; ?></li>
                            <?php endwhile; else : endif; ?>
                    </div>
                    <?php
                    if (have_rows('price_list_2')):
                        while (have_rows('price_list_2')) : the_row();
                            $sub_value = get_sub_field('price_li-2');
                            ?>
                            <li class="price__list-item"> <?php echo $sub_value; ?></li>
                        <?php endwhile; else : endif; ?>
                </ul>
            </div>
    </section>

    <section id="contacts" class="contacts page-section">
        <div class="container">
            <div class="contacts__inner">
                <div class="contacts__content">
                    <div class="contacts__info">
                        <div class="contacts__date">
                            1.07.2020
                            <span>Ближайшая дата тура </span>
                        </div>
                        <div class="contacts__price">
                            490$
                            <span>Стоимость</span>
                        </div>
                    </div>
                    <form class="contacts__form">
                        <h4 class="contacts__form-title">Оставить заявку или задать вопрос</h4>
                        <?php echo do_shortcode('[contact-form-7 id="107" title="Контактна форма"]'); ?>
                    </form>
                </div>
                <img class="contacts__<?php echo bloginfo('template_url'); ?>/assets/images"
                     src="<?php echo bloginfo('template_url'); ?>/assets/images/contacts.jpg" alt="">
            </div>
        </div>
    </section>


    </body>

    </html>

<?php
get_footer();
