<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cappadocia
 */

?>

<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__contacts">
                <div class="footer__contacts-title">
                    Contacts
                </div>
                <a class="footer__phone" href="tel:+380665557776">+38(066)555-777-6</a>
                <br>
                <a class="footer__email" href="mailto:сappadocia.tours@gmail.com">сappadocia.tours@gmail.com</a>
                <div class="footer__social">
                    <a class="footer__social-link" href="#">
                        <img src="<?php echo bloginfo('template_url');?>/assets/images/youtube.svg" alt="">
                    </a>
                    <a class="footer__social-link" href="#">
                        <img src="<?php echo bloginfo('template_url');?>/assets/images/facebook.svg" alt="">
                    </a>
                    <a class="footer__social-link" href="#">
                        <img src="<?php echo bloginfo('template_url');?>/assets/images/instagram.svg" alt="">
                    </a>
                </div>
            </div>
            <div class="footer__text">
                Dreams come true
            </div>
        </div>
    </div>
</footer>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
<!--<script src="js/slick.min.js"></script>-->
<!--<script src="js/main.js"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>-->


<?php wp_footer(); ?>

</body>

</html>
