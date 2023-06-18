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
                Fairy tail
                <span>Сказочная страна чудес</span>
            </h3>
        </div>
        <div class="fairy-tail__inner">
            <div class="fairy-tail__slider">
                <div class="fairy-tail__item"><img src="<?php echo bloginfo('template_url');?>/assets/images/fairy-tail-1.jpg" alt=""></div>
                <div class="fairy-tail__item"><img src="<?php echo bloginfo('template_url');?>/assets/images/fairy-tail-2.jpg" alt=""></div>
                <div class="fairy-tail__item"><img src="<?php echo bloginfo('template_url');?>/assets/images/fairy-tail-3.jpg" alt=""></div>
            </div>
            <div class="fairy-tail__content">
                <div class="fairy-tail__container">
                    <div class="fairy-tail__body">
                        <p class="fairy-tail__text">
                            Каппадокия - сказочная страна воздушных шаров, сырных домиков, разноцветных долин и волшебных рассветов! Сюда приезжают, чтобы увидеть природные чудеса, полетать на воздушном шаре и конечно же сделать миллион красивых фотографий!
                        </p>
                        <p class="fairy-tail__text">
                            Участников тура ждёт профессиональная фотосессия от лучших фотографов Каппадокии! Ведь именно за волшебными фото на рассвете на фоне воздушных шаров сюда приезжают люди со всего мира!
                        </p>
                        <div class="fairy-tail__body-title">
                            Также Вы увидите:
                        </div>
                        <ul class="fairy-tail__list">
                            <li>Музей на открытом воздухе в Гёреме</li>
                            <li>Ущелье Ыхлара и монастырь Селиме</li>
                            <li>Подземные города</li>
                            <li>Крепость Учхисар</li>
                            <li>Зельве и Пашабаг</li>
                        </ul>
                        <p class="fairy-tail__text">
                            и многие другие достпримечательности.
                        </p>
                        <p class="fairy-tail__text">
                            Местная кухня — один из поводов посетить Каппадокию, здесь есть рестораны на любой бюджет.
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
                            Our trip
                            <span>Маршрут</span>
                        </h3>
                        <ul class="our-trip__list">
                            <li>День 1 </li>
                            <li>Прилёт в Анкару</li>
                            <li>Трансфер в Каппадокию</li>
                            <li>Солёное озеро</li>
                            <li>Приезд в Гёреме</li>
                            <li>Ужин</li>
                        </ul>

                        <ul class="our-trip__list">
                            <li>День 2 </li>
                            <li>Фотосессия</li>
                            <li>Завтрак в отеле </li>
                            <li>Дневной тур по Каппадокии</li>
                            <li>Закат с панорамным видом</li>
                        </ul>

                        <ul class="our-trip__list">
                            <li>День 3 </li>
                            <li>Полёт на воздушном шаре</li>
                            <li>Завтрак в отеле</li>
                            <li>Экскурсии на выбор</li>
                        </ul>

                        <ul class="our-trip__list">
                            <li>День 4 </li>
                            <li>Свободное время, шоппинг</li>
                            <li>Трансфер в Анкару</li>
                            <li>Вылет в Киев</li>
                        </ul>
                        <a class="our-trip__btn" href="#contacts">ЗАБРОНИРОВАТЬ</a>
                    </div>
                </div>
            </div>
            <div class="our-trip__slider">
                <div class="our-trip__slider-item"><img src="<?php echo bloginfo('template_url');?>/assets/images/our-trip-1.jpg" alt=""></div>
                <div class="our-trip__slider-item"><img src="<?php echo bloginfo('template_url');?>/assets/images/our-trip-2.jpg" alt=""></div>
                <div class="our-trip__slider-item"><img src="<?php echo bloginfo('template_url');?>/assets/images/our-trip-3.jpg" alt=""></div>
            </div>
        </div>
    </section>

    <section id="hotel" class="hotel page-section">
        <div class="container">
            <h3 class="hotel__title title">
                Hotel
                <span>Sultan Cave Suites</span>
            </h3>
            <div class="hotel__inner">
                <img class="hotel__<?php echo bloginfo('template_url');?>/assets/images" src="<?php echo bloginfo('template_url');?>/assets/images/hotel.jpg" alt="">
                <div class="hotel__content">
                    <p class="hotel__text">
                        В этом уникальном отеле, расположенном на вершине холма Айдынлы, вы можете забронировать высеченные в скале номера, обставленные антикварной мебелью со всей Турции. С солнечной террасы отеля открывается прекрасный панорамный вид на Национальный парк Гереме.
                    </p>
                    <p class="hotel__text">
                        Большинство номеров отеля Sultan Cave Suites высечены в скале, что обеспечивает прохладу и покой. Все номера оборудованы гостиной зоной и современной ванной комнатой. В большинстве из них есть собственная терраса или балкон.
                    </p>
                    <p class="hotel__text">
                        Отель Cave Suites Sultan располагает изысканным рестораном, где подают фирменные блюда региона Каппадокии. После ужина, пройдя на террасу, вы сможете заказать напиток и полюбоваться закатом солнца над деревней.
                    </p>
                    <div class="hotel__gallery">
                        <a data-fancybox="<?php echo bloginfo('template_url');?>/assets/images" href="<?php echo bloginfo('template_url');?>/assets/images/hotel_1.jpg" data-caption="Hotel">
                            <img src="<?php echo bloginfo('template_url');?>/assets/images/hotel_1.jpg" alt="">
                        </a>
                        <a data-fancybox="<?php echo bloginfo('template_url');?>/assets/images" href="<?php echo bloginfo('template_url');?>/assets/images/hotel_2.jpg" data-caption="Hotel">
                            <img src="<?php echo bloginfo('template_url');?>/assets/images/hotel_2.jpg" alt="">
                        </a>
                        <a data-fancybox="<?php echo bloginfo('template_url');?>/assets/images" href="<?php echo bloginfo('template_url');?>/assets/images/hotel_3.jpg" data-caption="Hotel">
                            <img src="<?php echo bloginfo('template_url');?>/assets/images/hotel_3.jpg" alt="">
                        </a>
                        <a data-fancybox="<?php echo bloginfo('template_url');?>/assets/images" href="<?php echo bloginfo('template_url');?>/assets/images/hotel_4.jpg" data-caption="Hotel">
                            <img src="<?php echo bloginfo('template_url');?>/assets/images/hotel_4.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="price page-section">
        <div class="container">
            <h3 class="price__title title">
                Price
                <span>Стоимость услуг</span>
            </h3>
            <div class="price__inner">
                <ul class="price__on">
                    <div class="price__on-title">
                        Включено
                    </div>
                    <li class="price__list-item">Проживание в двухместном номере в отеле с завтраками</li>
                    <li class="price__list-item">Индивидуальный трансфер для нашей группы из Анкары и обратно</li>
                    <li class="price__list-item">Экскурсия на Солёное озеро</li>
                    <li class="price__list-item">Индивидуальная дневная экскурсия по лучшим местам Каппадокии с личным транспортом</li>
                    <li class="price__list-item">Фотосессия с профессиональным фотографом для каждой участницы (Несколько локаций, 5 лучших фото в обработке фотографа и весь материал (до 100 фотографий)</li>
                </ul>

                <ul class="price__off">
                    <div class="price__on-title">
                        Не включено
                    </div>
                    <li class="price__list-item">Авиа Киев-Анкара-Киев (140-170$)</li>
                    <li class="price__list-item">Обеды и ужины (150$ на поездку)</li>
                    <li class="price__list-item">Воздушный шар 200$</li>
                    <li class="price__list-item">Дополнительные экскурсии (по желанию) от 30$</li>
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
                        <input class="contacts__form-input contacts__form-name" type="text" placeholder="Имя">
                        <input class="contacts__form-input contacts__form-phone" type="text" placeholder="Телефон">
                        <button class="contacts__form-btn" type="submin">ОСТАВИТЬ ЗАЯВКУ</button>
                    </form>
                </div>
                <img class="contacts__<?php echo bloginfo('template_url');?>/assets/images" src="<?php echo bloginfo('template_url');?>/assets/images/contacts.jpg" alt="">
            </div>
        </div>
    </section>



    </body>

    </html>

<?php
get_footer();
